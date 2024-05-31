<?php

    // function createorder($code_order, $fn_thanhtoan, $email_thanhtoan, $address_thanhtoan, $city_thanhtoan, $state_thanhtoan,
    //     $zipcode_thanhtoan, $namecard_thanhtoan, $numbercard_thanhtoan, $exp_month, $exp_year, $cvv)
    // {
    //     $conn = connectDatabase_Drop();

    //     $sql = "INSERT INTO `donhang` (`code_order`,`fullname_user`,`email`,`address`,`city`,`state`,
    //     `zip_code`,`name_on_cart`,`cart_number`,`exp_month`,`exp_year`,`cvv`) VALUE ('".$code_order."', '".$fn_thanhtoan."', '".$email_thanhtoan."',
    //     '".$address_thanhtoan."','".$city_thanhtoan."','".$state_thanhtoan."','".$zipcode_thanhtoan."','".$namecard_thanhtoan."','".$numbercard_thanhtoan."','".$exp_month."',
    //     '".$exp_year."', '".$cvv."')";

    //     $conn->exec($sql);
    //     $last_id = $conn -> lastInsertId();
    //     return $last_id;
    // }

    // function addtocart($iddh, $img, $name_pr, $price, $currency, $idproducts){
    //     $conn = connectDatabase_Drop();
    //     $sql = "INSERT INTO `cart` (`idorder`,`img`,`name_pr`,`price`,`currency`,`idproducts`)
    //     VALUE ('".$iddh."', '".$img."', '".$name_pr."', '".$price."', '".$currency."', '".$idproducts."')";
    //     $conn->exec($sql);
    // }

    // function showJ($iddh){
    //     $conn = connectDatabase_Drop();

    //     $stmt = $conn -> prepare("SELECT * FROM `cart` WHERE `idorder`=".$iddh);
    //     $stmt->execute();
    //     $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $best = $stmt->fetchAll();
    //     $conn = null;
    //     return $best;
    // }

    // function getorderInf($iddh){

    //     $conn = connectDatabase_Drop();

    //     $stmt = $conn -> prepare("SELECT * FROM `donhang` WHERE `id`=".$iddh);
    //     $stmt->execute();
    //     $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $best = $stmt->fetchAll();
    //     $conn = null;
    //     return $best;

    // }

?>