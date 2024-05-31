<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include "../Model/connectdatabase.php";

    $conn = connectDatabaseNFT();

    if (isset($_POST['getIDNFT']) && isset($_POST['getIDCart'])){

        $getIDNFT = isset($_POST['getIDNFT']) ? $_POST['getIDNFT'] : null;
        $getIDCart = isset($_POST['getIDCart']) ? $_POST['getIDCart'] : null;

        $stmt = $conn->prepare("DELETE FROM `cartnft` WHERE `NFTID` = :NFTID AND `CartID` = :CartID");

        $stmt->bindParam(':NFTID', $getIDNFT);
        $stmt->bindParam(':CartID', $getIDCart);

        $stmt->execute();

        echo "NFT đã được xóa thành công khỏi giỏ hàng!";
    } else {
        echo "Xóa NFT thất bại!";
    }

?>