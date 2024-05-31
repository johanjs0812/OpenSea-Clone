<?php

    function countAllUser(){
        $conn = connectDatabaseNFT();
        $stmt = $conn -> prepare("SELECT * FROM  `user` ORDER BY `UserID`");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function checkValueGetAdminFromUser(){
        $conn = connectDatabaseNFT();

        $totalItems = pageindex;

        $chieudaidata = countAllUser();

        $tongsotrang = ceil(count($chieudaidata) / $totalItems);

        $sobatdau = isset($_GET['pages_user']) && is_numeric($_GET['pages_user']) ? $_GET['pages_user'] : 1;
        
        if ($sobatdau <= 0 || $sobatdau > $tongsotrang){
            $sobatdau = 1;
        }
        $chaytudau = ($sobatdau == '' || $sobatdau == 1) ? 0 : ($sobatdau * $totalItems) - $totalItems;
        
        $stmt = $conn -> prepare("SELECT * FROM `user` ORDER BY `UserID` ASC LIMIT :start, :total");
        $stmt->bindParam(":start", $chaytudau, PDO::PARAM_INT);
        $stmt->bindParam(":total", $totalItems, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

?>

    <!-- // ------------------------------------------------------Collections---------------------------------------- -->

<?php

    function countAllCollections(){

        $conn = connectDatabaseNFT();

        $stmt = $conn -> prepare("SELECT * FROM  `collections` ORDER BY `CollectionID`");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();

        return $best;
    }

    function checkValueGetAdminFromClollections(){

        $conn = connectDatabaseNFT();

        $totalItems = pageindex;

        $chieudaidata = countAllCollections();

        $tongsotrang = ceil(count($chieudaidata) / $totalItems);

        $sobatdau = isset($_GET['pages_user']) && is_numeric($_GET['pages_user']) ? $_GET['pages_user'] : 1;
        
        if ($sobatdau <= 0 || $sobatdau > $tongsotrang){
            $sobatdau = 1;
        }
        $chaytudau = ($sobatdau == '' || $sobatdau == 1) ? 0 : ($sobatdau * $totalItems) - $totalItems;
        
        $stmt = $conn -> prepare("SELECT `collec`.*, `author`.`username` as `aname`
                                    FROM `collections` As `collec` 
                                    INNER JOIN `user` AS `author`
                                    ON `collec`.`author` = `author`.`UserID`
                                    ORDER BY collec.id ASC LIMIT $chaytudau, $totalItems");
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();

        return $best;
        
    }

?>

<?php

    // function countAllProducts(){

    //     $conn = connectDatabaseNFT();

    //     $stmt = $conn -> prepare("SELECT * FROM  `products` ORDER BY `id`");
    //     $stmt->execute();
    //     $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $best = $stmt->fetchAll();

    //     return $best;
    // }
    
    // function checkValueGetAdminFromProducts(){

    //     $conn = connectDatabaseNFT();

    //     $totalItems = 6;

    //     $chieudaidata = countAllProducts();

    //     $tongchieudaicuadatabennay = count($chieudaidata);
    //     $tongsotrang = Ceil($tongchieudaicuadatabennay / $totalItems);

    //     if (isset($_GET['pages_products'])) {
    //         $sobatdau = $_GET['pages_products'];
    //     }
    //     else{
    //         $sobatdau = 1;
    //     };

    //     if ($sobatdau <= 0) {
    //         $sobatdau = $tongsotrang;
    //     }

    //     if ($sobatdau > $tongsotrang) {
    //         $sobatdau = 1;
    //         $chaytudau = 0;
    //     };

    //     if ($sobatdau == '' || $sobatdau == 1){
    //         $chaytudau = 0;
    //     }
    //     else{
    //         $chaytudau = ($sobatdau * $totalItems) - $totalItems;
    //     };

    //     $stmt = $conn -> prepare("SELECT products.*, collec.name AS cname
    //     FROM products AS products INNER JOIN collections AS collec
    //     ON products.id_collections = collec.id
    //     ORDER BY products.id ASC LIMIT $chaytudau, $totalItems");

    //     $stmt->execute();
    //     $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $best = $stmt->fetchAll();

    //     return $best;
        
    // }

    // function deleteProduct($IdProductsforDelete){
    //     $conn = connectDatabaseNFT();

    //     $sql = " DELETE FROM `products` WHERE `id`='".$IdProductsforDelete."' ";

    //     $conn->exec($sql);
    // }

?>