<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include "../../Model/connectdatabase.php";

    $conn = connectDatabaseNFT();

    if (isset($_POST['ID'])) {

        $id = isset($_POST['ID']) ? $_POST['ID'] : null;

        $stmt = $conn->prepare("DELETE FROM `user` WHERE `UserID` = :id");

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        echo "Người dùng đã được xóa thành công!";
    } else {
        echo "Xóa người dùng thất bại!";
    }

?>