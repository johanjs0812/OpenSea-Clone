<?php
    function getdataCollections(){
        $conn = connectDatabaseNFT();
        if ($conn === false) {
            die("ERROR: Could not connect to the database. " . mysqli_connect_error());
        }
        if (isset($_GET['idcollec'])) {
            $id = $_GET['idcollec'];
        } else {
            $id = "";
        }
        $stmt = $conn->prepare(
        "   SELECT `user`.`username`, `collections`.*
            FROM `user`
            INNER JOIN `collections`
            ON `user`.`UserID` = `collections`.`CreatorID`
            WHERE `collections`.`CollectionID` = :idcollec
        ");
        $stmt->bindParam(':idcollec', $id);
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetch();
        $conn = null;
        return $best;
    }

    function getNFTsfromeCollections(){
        $conn = connectDatabaseNFT();
        $stmt = "";
        if (isset($_GET['idcollec'])) {
            $id = $_GET['idcollec'];
        }
        else{
            $id = "";
        };
        $stmt = $conn -> prepare(
        "   SELECT `nfts`.*,`prices`.*
            FROM `nfts`
            INNER JOIN `prices`
            ON `nfts`.`NFTID` = `prices`.`NFTID`
            WHERE `CollectionID` = :idcollec 
            AND `prices`.`CreatedAt` = (
                SELECT MAX(`CreatedAt`)
                FROM `prices`
                WHERE `NFTID` = `nfts`.`NFTID`
            )
        ");
        $stmt->bindParam(':idcollec', $id);
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;  
        return $best;
    }

    // function getFloorPriceforCollections(){
    //     $conn = connectDatabaseNFT();
    //     $stmt = "";
    //     if (isset($_GET['idcollec'])) {
    //         $id = $_GET['idcollec'];
    //     }
    //     else{
    //         $id = "";
    //     };
    //     $stmt = $conn -> prepare(
    //     "   SELECT MIN(`prices`.`Price`) AS `FloorofCollec`
    //         FROM `prices`
    //         JOIN `NFTs` ON `prices`.`NFTID` = `NFTs`.`NFTID`
    //         JOIN `Listings` ON `NFTs`.`NFTID` = `Listings`.`NFTID`
    //         WHERE `NFTs`.`CollectionID` = :idcollec
    //         AND `Listings`.`Status` = 'active'  
    //     "); 
    //     $stmt->bindParam(':idcollec', $id);
    //     $stmt->execute();
    //     $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $best = $stmt->fetch();
    //     $conn = null;
    //     return $best;
    // }

    // ==========================UPDATA================================

    function updatedFloor(){
        $conn = connectDatabaseNFT();
        $stmt = "";
        $stmt = $conn->prepare(
        "   UPDATE `collections`
            SET `Floor` = (
            SELECT MIN(`prices`.`ListedPrice`)
                FROM `prices`
                JOIN `nfts` 
                ON `prices`.`NFTID` = `nfts`.`NFTID`
                JOIN `listings` 
                ON `nfts`.`NFTID` = `listings`.`NFTID`
                WHERE `listings`.`Status` = :status 
                AND `collections`.`CollectionID` = `nfts`.`CollectionID`
            )
        ");
        $status = 'active';
        $stmt->bindParam(':status', $status);
        $stmt->execute();
    }

    function updatedVolume(){
        $conn = connectDatabaseNFT();
        $stmt = "";
        $stmt = $conn->prepare(
        "   UPDATE `collections`
            SET `Volume` = (
                SELECT SUM(`orderdetails`.`Price`)
                AS `TotalVolume`
                FROM `nfts`
                JOIN `orderdetails`
                ON `orderdetails`.`NFTID` = `nfts`.`NFTID`
                JOIN `orders`
                ON `orders`.`OrderID` = `orderdetails`.`OrderID`
                WHERE `orders`.`Status` = :status 
                AND `collections`.`CollectionID` = `nfts`.`CollectionID`
            )
        ");
        $status = 'paid';
        $stmt->bindParam(':status', $status);
        $stmt->execute();
    }
?>