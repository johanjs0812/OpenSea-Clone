<?php
    error_reporting(E_ALL);

    ini_set('display_errors', '1');

    session_start();

    include "../Model/connectdatabase.php";
    $conn = connectDatabaseNFT();
    $urlFOLDERImageNFT = "../View/img/NFTs/";
    $UserID = (isset($_SESSION['UserID']) && $_SESSION['UserID']!="") ? $_SESSION['UserID'] : null;
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
        "
    );
    $stmt->bindParam("UserID", $UserID);
    $stmt->execute();
    $NFTs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $html = '';

    foreach($NFTs as $N){
        extract($N, EXTR_PREFIX_ALL, 'NFTs');
        if ($NFTs_ListedPrice) {
            $NFTs_ListedPrice = number_format($NFTs_ListedPrice, 0, ',', '.');
            $NFTs_ListedPrice = $NFTs_ListedPrice . ' ₫';
        }
        $html .= '
        <div class="NumberAllNFT" time="'.$NFTs_CreatedAt.'" style="display:flex; align-items:center; margin-bottom:10px;">
            <div id="sethovervip" class="boxanh-ss" style="height: 50px; width:50px; overflow:hidden; border-radius:5px; margin-right:10px;">
                <img src="'.$urlFOLDERImageNFT.''.$NFTs_ImageURL.'" alt="" style="width:100%; height:100%;">
            </div>
            <div class="in4-sd" style="margin-right: 20px">
                <p class="x47">'.$NFTs_Name.'</p>
                <p class="x45"></p>
                <p class="x43"><span></span></p>
            </div>
            <div class="pridsd">
                <div class="xsss58">
                    <span class="tatcagiatien">'.$NFTs_ListedPrice.'</span>
                    <span></span>
                    <div class="parentClass-17-10">
                        <input type="hidden" name="IDNFTd" value="'.$NFTs_NFTID.'">
                        <input type="hidden" name="IDCartd" value="'.$NFTs_CartID.'">
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
    echo $html;
?>