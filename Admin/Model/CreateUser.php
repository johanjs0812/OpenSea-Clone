<?php

// ===========================  START CHECK FUNCTION ==================================

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include "../../Model/connectdatabase.php";
    define("MainFolder", '../../View/img/User/');
    chmod(MainFolder, 0555);

    function checkUsernameExists($conn, $Username){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `username` = :name");
        $stmt->bindParam(":name", $Username);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    function checkEmailExists($conn, $Email){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `Email` = :email");
        $stmt->bindParam(":email", $Email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    function generateUniqueFileName($fileName){
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $uniqueName = uniqid() . '.' . $extension;
        return $uniqueName;
    }
    // =========================== END CREATED CHECK FUNCTION ==================================

    // ============================START GET VALUE FROM AJAX============================================

    $Username = isset($_POST['UserName012']) ? $_POST['UserName012'] : null;
    $Email =  isset($_POST['Email012']) ? $_POST['Email012'] : null;
    $Password = isset($_POST['Password012'] ) ? $_POST['Password012'] : null;
    $Bio = isset($_POST['Bio012'] ) ? $_POST['Bio012'] : null;
    $BankName = isset($_POST['BankName012'] ) ? $_POST['BankName012'] : null;
    $BankAccNum = isset($_POST['BankAccNum012'] ) ? $_POST['BankAccNum012'] : null;
    $AvtImg = isset($_FILES['AvatarImg012'] ) ? $_FILES['AvatarImg012']['name'] : null;
    $CoverImg = isset($_FILES['CoverImg012'] ) ? $_FILES['CoverImg012']['name'] : null;
    $Role = isset($_POST['Role012']) ? $_POST['Role012'] : null;

    $AvtImgTmp = isset($_FILES['AvatarImg012'] ) ? $_FILES['AvatarImg012']['tmp_name'] : null;
    $CoverImgTmp = isset($_FILES['CoverImg012'] ) ? $_FILES['CoverImg012']['tmp_name'] : null;

    // ============================END VALUE FROM AJAX============================================

    $conn = connectDatabaseNFT();

    function insertUser($conn, $Username, $Password, $Email, $BankName, $BankAccNum, $AvtImg, $CoverImg, $Role, $Bio){

        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare(
            "   INSERT INTO `user` (`username`, `Password`, `Email`, `BankName`, `BankAccountNumber`, `AvatarImage`, `CoverImage`, `Role`, `Bio`) 
                VALUES (:name, :password, :email, :bankname, :bankaccnum, :AvtImg, :CoverImg, :role, :bio)
            "
        );
        $stmt->bindParam(":name", $Username);
        $stmt->bindParam(":password", $hashedPassword);
        $stmt->bindParam(":email", $Email);
        $stmt->bindParam(":bankname", $BankName);
        $stmt->bindParam(":bankaccnum", $BankAccNum);
        $stmt->bindParam(":AvtImg", $AvtImg);
        $stmt->bindParam(":CoverImg", $CoverImg);
        $stmt->bindParam(":role", $Role);
        $stmt->bindParam(":bio", $Bio);
        return $stmt->execute();
    }

    if (checkUsernameExists($conn, $Username)){
        echo "Tên {$Username} đã được sử dụng!";
    } 

    if (checkEmailExists($conn, $Email)){
        echo "Địa chỉ {$Email} đã được sử dụng!";
    }

    $uniqueAvtImg = "";
    $uniqueCoverImg = "";

    if (!checkUsernameExists($conn, $Username) && !checkEmailExists($conn, $Email)){
        if ($AvtImgTmp && $AvtImg){
            $uniqueAvtImg = generateUniqueFileName($AvtImg);
            $newPath = MainFolder . $uniqueAvtImg;
            if (move_uploaded_file($AvtImgTmp, $newPath)) {
            } else {
                echo "Có lỗi xảy ra khi di chuyển ảnh đại diện.";
            }
        }

        if ($CoverImgTmp && $CoverImg){
            $uniqueCoverImg  = generateUniqueFileName($CoverImg);
            $newPath = MainFolder . $uniqueCoverImg;
            if (move_uploaded_file($CoverImgTmp, $newPath)){
            } else {
                echo "Có lỗi xảy ra khi di chuyển ảnh bìa.";
            }
        }

        if (insertUser($conn, $Username, $Password, $Email, $BankName, $BankAccNum, $uniqueAvtImg, $uniqueCoverImg, $Role, $Bio)){
            echo "Đã thêm người dùng thành công!";
        } else {
            echo "Đã có lỗi xảy ra.";
        }
    }


?>