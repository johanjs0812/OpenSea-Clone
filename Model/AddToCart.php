<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    include_once "../Model/connectdatabase.php";
    $conn = connectDatabaseNFT();

    $UserID = (isset($_SESSION['UserID']) && $_SESSION['UserID']!="") ? $_SESSION['UserID'] : null;
    $NFTImage = isset($_POST['NFTImage']) ? $_POST['NFTImage'] : null;
    $NFTName = isset($_POST['NFTName']) ? $_POST['NFTName'] : null;
    // $NFTPrice = isset($_POST['NFTListedPrice']) ? $_POST['NFTPrice'] : null;
    $NFTListedPrice = isset($_POST['NFTListedPrice']) ? $_POST['NFTListedPrice'] : null;
    $NFTID = isset($_POST['NFTID']) ? $_POST['NFTID'] : null;
    $urlFOLDERImageNFT = "../View/img/NFTs/";

    // ====================== START INSERT FUNCTION =================================

    function insertUserinCart($conn, $UserID){
        $stmt = $conn->prepare(
            "   INSERT INTO `cart` (`UserID`)
                VALUES (:UserID)
            "
        );
        $stmt->bindParam(":UserID", $UserID);
        return $stmt->execute();
    }

    function insertCartinCartNFT($conn, $CartID){
        $stmt = $conn->prepare(
            "   INSERT INTO `cartnft` (`CartID`)
                VALUES (:CartID)
            "
        );
        $stmt->bindParam(":CartID", $CartID);
        return $stmt->execute();
    }

    function insertNFTinCartNFT($conn, $NFTID, $CartID){
        $stmt = $conn->prepare(
            "   INSERT INTO `cartnft` (`CartID`, `NFTID`)
                VALUES (:CartID, :NFTID)
            "
        );
        $stmt->bindParam(":CartID", $CartID);
        $stmt->bindParam(":NFTID", $NFTID);
        return $stmt->execute();
    }

    function showCart($conn, $UserID){
        $stmt = $conn->prepare(
        "   SELECT `nfts`.*, `prices`.`ListedPrice`, `cartnft`.*
            FROM `nfts`
            JOIN `cartnft` 
            ON `nfts`.`NFTID` = `cartnft`.`NFTID`
            JOIN `cart`
            ON `cart`.`CartID` = `cartnft`.`CartID`
            JOIN `prices`
            ON `nfts`.`NFTID` = `prices`.`NFTID`
            WHERE `cart`.`UserID` = :UserID
        ");
        $stmt->bindParam("UserID", $UserID);
        if (!$stmt->execute()) {
            error_log(print_r($stmt->errorInfo(), true));
        }        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // ====================== END INSERT FUNCTION =================================

    // ==============================START CHECK FUNCTION=========================
    
    function checkUserofCartexits($conn, $UserID){
        $stmt = $conn->prepare("SELECT * FROM `cart` WHERE `UserID` = :UserID");
        $stmt->bindParam(":UserID", $UserID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function checkCartexits($conn, $CartID){
        $stmt = $conn->prepare("SELECT * FROM `cartnft` WHERE `CartID` = :CartID");
        $stmt->bindParam("CartID", $CartID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function checkNFTexits($conn, $NFTID, $CartID){
        $stmt = $conn->prepare("SELECT * FROM `cartnft` WHERE `NFTID` = :NFTID AND `CartID` = :CartID");
        $stmt->bindParam(":NFTID", $NFTID);
        $stmt->bindParam("CartID", $CartID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // ==============================END CHECK FUNCTION=========================

    if ($UserID == null) {
        echo "Bạn chưa đăng nhập!";
        return;
    } 

    if (checkUserofCartexits($conn, $UserID)){
        // echo "Giỏ hàng đã tồn tại!";
    }
    else{
        insertUserinCart($conn, $UserID);
        // echo "Giỏ hàng đã được khởi tạo!";
    }

    $CartID = checkUserofCartexits($conn, $UserID);

    if (checkCartexits($conn, $CartID['CartID'])){
        if (checkNFTexits($conn, $NFTID, $CartID['CartID'])) {
            // echo "Sản phẩm đã tồn tại!";
            return ;
        }
        else{
            insertNFTinCartNFT($conn, $NFTID, $CartID['CartID']);
            // echo "Sản phẩm đã được thêm";
        }
    }
    
    if (!checkCartexits($conn, $CartID['CartID'])){
        insertNFTinCartNFT($conn, $NFTID, $CartID['CartID']);
        // echo "Sản phẩm đã được thêm";
    }

    // ==============================SHOW=========================================
    $ShowCartAll ="";
    $ShowCartAll = showCart($conn, $UserID);
    $html = "";

    if (is_array($ShowCartAll)){
        foreach($ShowCartAll as $item){
            extract($item, EXTR_PREFIX_ALL, "NFT");
            if ($NFT_ListedPrice) {
                $NFT_ListedPrice = number_format($NFT_ListedPrice, 0, ',', '.');
                $NFT_ListedPrice = $NFT_ListedPrice . ' ₫';
            }
            $html.= '
            <div class="NumberAllNFT" time="'.$NFT_CreatedAt.'" style="display:flex; align-items:center; margin-bottom:10px;">
                <div id="sethovervip" class="boxanh-ss" style="height: 50px; width:50px; overflow:hidden; border-radius:5px; margin-right:10px;">
                    <img src="'.$urlFOLDERImageNFT.''.$NFT_ImageURL.'" alt="" style="width:100%; height:100%;">
                </div>
                <div class="in4-sd" style="margin-right: 20px">
                    <p class="x47">'.$NFT_Name.'</p>
                    <p class="x45"></p>
                    <p class="x43"><span></span></p>
                </div>
                <div class="pridsd">
                    <div class="xsss58">
                        <span class="tatcagiatien">'.$NFT_ListedPrice.'</span>
                        <span></span>
                        <div class="parentClass-17-10">
                            <input type="hidden" name="IDNFTd" value="'.$NFT_NFTID.'">
                            <input type="hidden" name="IDCartd" value="'.$NFT_CartID.'">
                            <div class="the-i oppoa3s" style="text-align: right; border:0px;background:none;">
                                <button class="RemoveNFTCart" name="bamxoasanpham">
                                    <i class="thungrac bx bx-trash"></i>
                                </button>                                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        } 
    }else{
        echo "KHÔNG PHẢI LÀ MỘT MẢNG!";
        return;
    }

    echo $html;
?>