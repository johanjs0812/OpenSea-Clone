<?php

    function getAllCommentAtNFT(){
        $conn = connectDatabaseNFT();
        if (isset($_GET['NFTIDdetails'])) {
            $NFTIDdetails = $_GET['NFTIDdetails'];
        } else {
            $NFTIDdetails = "";
        }     
        $stmt = $conn -> prepare(
            "   SELECT `comment`.*, `user`.`username`, `user`.`AvatarImage`
                FROM `comment` 
                JOIN `user`
                ON `user`.`UserID` = `comment`.`UserID`
                WHERE `NFTID` = :NFTID 
                ORDER BY `CommentID` DESC 
            ");
        $stmt->bindParam(':NFTID', $NFTIDdetails);
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };

    function getAvataUser(){
        $conn = connectDatabaseNFT();
        $UserID = (isset($_SESSION['UserID']) && $_SESSION['UserID']!="") ? $_SESSION['UserID'] : null;
        $stmt = $conn -> prepare(
            "   SELECT *
                FROM `user` 
                WHERE `UserID` = :UserID 
        ");
        $stmt->bindParam(':UserID', $UserID);
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetch();
        $conn = null;
        return $best;
    }

?>