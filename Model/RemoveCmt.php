<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    include "../Model/connectdatabase.php";
    $conn = connectDatabaseNFT();
    // if ($UserID == null){
    //     echo 'Bạn chưa đăng nhập!';
    //     return;
    // }

    $CmtID = isset($_POST['CmtID']) ? $_POST['CmtID'] : null;

    $stmt = $conn->prepare(
        "   DELETE FROM `comment` 
            WHERE `CommentID` = :CmtID
        "
    );
    $stmt->bindParam(":CmtID", $CmtID);
    return $stmt->execute();

?>