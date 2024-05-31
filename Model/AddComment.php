<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    include "../Model/connectdatabase.php";
    $conn = connectDatabaseNFT();
    $contentCMT = isset($_POST['contentCMT']) ? $_POST['contentCMT'] : null;
    $urlFOLDERImageUser = "../View/img/User/";
    $UserID = (isset($_SESSION['UserID']) && $_SESSION['UserID']!="") ? $_SESSION['UserID'] : null;
    $NFTIDdetails = isset($_POST['NFTIDdetails']) ? $_POST['NFTIDdetails'] : null;
    if ($UserID == null){
        echo 'Bạn chưa đăng nhập!';
        return;
    }
    $stmt = $conn->prepare(
        "   INSERT INTO `comment` (`Content`, `CreatedAt`, `UserID`, `NFTID`)
            VALUES (:Content, NOW(), :UserID, :NFTID)
        "
    );
    $stmt->bindParam(":Content", $contentCMT);
    $stmt->bindParam(":UserID", $UserID);
    $stmt->bindParam(":NFTID", $NFTIDdetails);
    return $stmt->execute();

?>