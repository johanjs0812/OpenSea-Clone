<?php    

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include_once "../Model/connectdatabase.php";
    $dbmain = connectDatabaseNFT();

    function showCartNFTx($dbmain, $UserID){
        $stmt = $dbmain->prepare(
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
    
?>