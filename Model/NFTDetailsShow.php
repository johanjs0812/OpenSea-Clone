<?php
    function getInformationofNFTs(){
        $kndatabase = connectDatabaseNFT();
        if (isset($_GET['NFTIDdetails'])) {
            $NFTIDdetails = $_GET['NFTIDdetails'];
        } else {
            $NFTIDdetails = "";
        }
        $stmt = $kndatabase->prepare(
        "   SELECT `nfts`.*, `user`.`username`, `collections`.`Name` 
            AS `NameCollections`, `collections`.`CollectionID` 
            AS `IDCOLLEC`, `prices`.`CreatedAt` 
            AS `CreatedAtPrice`, `prices`.`ListedPrice`, `categoriy`.`Name` 
            AS `NameCategory`
            FROM `nfts`
            JOIN `user`
            ON `nfts`.`OwnerID` = `user`.`UserID`
            JOIN `collections`
            ON `collections`.`CollectionID` = `nfts`.`CollectionID`
            JOIN `prices`
            ON `prices`.`NFTID` = `nfts`.`NFTID`
            JOIN `Categoriy`
            ON `categoriy`.`CategoriyID` = `collections`.`CategoryID`
            WHERE `nfts`.`NFTID` = :NFTIDdetails 
            AND `prices`.`CreatedAt` = (
                SELECT MAX(`CreatedAt`)
                FROM `prices`
                WHERE `NFTID` = `nfts`.`NFTID`
            )   
        ");
        $stmt->bindParam(':NFTIDdetails', $NFTIDdetails);
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetch();
        return $best;
    }

    // ===============================GET ALL NFT FROM COLLECTIONS========================================

    function getNFTsInvolves(){
        $conn = connectDatabaseNFT();
        $stmt = "";
        if (isset($_GET['NFTIDdetails'])) {
            $id = $_GET['NFTIDdetails'];
        }
        else{
            $id = "";
        };
        $stmt = $conn -> prepare(
        "   SELECT `nfts`.*, `prices`.*, `collections`.`CollectionID`
            FROM `nfts`
            JOIN `prices`
            ON `nfts`.`NFTID` = `prices`.`NFTID`
            JOIN `collections`
            ON `collections`.`CollectionID` = `nfts`.`CollectionID`
            WHERE `nfts`.`NFTID` <> :idNFT
            AND `collections`.`CollectionID` = (
                SELECT `CollectionID`
                FROM `nfts`
                WHERE `NFTID` = :idNFT
            )
            AND `prices`.`CreatedAt` = (
                SELECT MAX(`CreatedAt`)
                FROM `prices`
                WHERE `NFTID` = `nfts`.`NFTID`
            )
        ");
        $stmt->bindParam(':idNFT', $id);
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;  
        return $best;
    }
?>