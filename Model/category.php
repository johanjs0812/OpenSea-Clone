<?php
    function getCategories(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `categoriy` WHERE `Home` = 'show' ORDER BY `CategoriyID` ASC");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };

    // --------------------BANNER-----------------------
    
    function getCollectionsforBanner(){
        $conn = connectDatabaseNFT();
        $stmt = "";
        if (isset($_GET['categoryID'])){
            $id = $_GET['categoryID'];
            $stmt = $conn -> prepare(
            "   SELECT `user`.`username`, `collections`.*
                FROM `user`
                INNER JOIN `collections`
                ON `user`.`UserID` = `collections`.`CreatorID`
                WHERE `collections`.`CategoryID` = :CategoryID
                ORDER BY RAND() LIMIT 12
            ");
            $stmt->bindParam(':CategoryID', $id);
        }
        else{
            $id = "";
        };
        if ($id=="" || $id=="all"){
            $stmt = $conn -> prepare(
            "   SELECT `user`.`username`, `collections`.*
                FROM `user`
                INNER JOIN `collections`
                ON `user`.`UserID` = `collections`.`CreatorID`
                ORDER BY RAND() LIMIT 12
            ");
        }
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    }

    // ========================CHART RANK========================================

    function getCollectionsforChart1(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `collections` ORDER BY `Volume` DESC LIMIT 5;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };
    function getCollectionsforChart2(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `collections` ORDER BY `Volume` DESC LIMIT 5,5;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };

    // =============================TREND============================================

    function getCollectionsArtTrend(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `collections` WHERE `CategoryID` = 1 ORDER BY `Views` DESC LIMIT 10;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        return $best;
    };
    function getCollectionsGammingTrend(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `collections` WHERE `CategoryID` = 2 ORDER BY `Views` DESC LIMIT 10;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };
    function getCollectionsMusicTrend(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `collections` WHERE `CategoryID` = 6 ORDER BY `Views` DESC LIMIT 10;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };
    function getCollectionsPhotographyTrend(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `collections` WHERE `CategoryID` = 5 ORDER BY `Views` DESC LIMIT 10;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };
    function getCollectionsMembershipsTrend(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `collections` WHERE `CategoryID` = 3 ORDER BY `Views` DESC LIMIT 10;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };

    // ========================SHOW NFT====================================

    function getNFTsTrend(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM `nfts` ORDER BY `Views` DESC LIMIT 12;");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    };
?>