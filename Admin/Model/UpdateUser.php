<?php
// =========================== START CHECK FUNCTION ==================================
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include "../../Model/connectdatabase.php";
    define("MainFolder", '../../View/img/User/');
    chmod(MainFolder, 0555);

    function checkUsernameExists($conn, $Username, $UserID){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `username` = :name AND `UserID` != :id");
        $stmt->bindParam(":name", $Username);
        $stmt->bindParam(":id", $UserID);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    function checkEmailExists($conn, $Email, $UserID){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `Email` = :email AND `UserID` != :id");
        $stmt->bindParam(":email", $Email);
        $stmt->bindParam(":id", $UserID);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    function generateUniqueFileName($fileName){
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $uniqueName = uniqid() . '.' . $extension;
        return $uniqueName;
    }
    // =========================== END CHECK FUNCTION ==================================

    // ============================START GET VALUE FROM AJAX====================================

    $Username = isset($_POST['Username012']) ? $_POST['Username012'] : null;

    $Email =  isset($_POST['Email0123']) ? $_POST['Email0123'] : null;

    $Password = isset($_POST['Password012'] ) ? $_POST['Password012'] : null;

    $Bio = isset($_POST['Bio0123'] ) ? $_POST['Bio0123'] : null;
    $BankName = isset($_POST['BankName012'] ) ? $_POST['BankName012'] : null;
    $BankAccNum = isset($_POST['BankAccNum012'] ) ? $_POST['BankAccNum012'] : null;
    $AvtImg = isset($_FILES['AvatarImg012'] ) ? $_FILES['AvatarImg012']['name'] : null;
    $CoverImg = isset($_FILES['CoverImg012'] ) ? $_FILES['CoverImg012']['name'] : null;

    $Role = isset($_POST['Role012']) ? $_POST['Role012'] : null;

    $UserID = isset($_POST['UserID012']) ? $_POST['UserID012'] : null;

    $AvtImgTmp = isset($_FILES['AvatarImg012'] ) ? $_FILES['AvatarImg012']['tmp_name'] : null;
    $CoverImgTmp = isset($_FILES['CoverImg012'] ) ? $_FILES['CoverImg012']['tmp_name'] : null;

    // ============================END VALUE FROM AJAX============================================

    $conn = connectDatabaseNFT();

    function UpdateUser($conn, $Username, $Password, $Email, $BankName, $BankAccNum, $AvtImg, $CoverImg, $Role, $Bio, $UserID){

        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare(
            "   UPDATE `user`
                SET `username`=:name, `Password`=:password, `Email`=:email, `BankName`=:bankname,
                `BankAccountNumber`=:bankaccnum, `AvatarImage`=:AvtImg, `CoverImage`=:CoverImg, `Role`=:role, `Bio`=:bio
                WHERE `UserID`=:id
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
        $stmt->bindParam(":id", $UserID);
        return $stmt->execute();
    }

    if (checkUsernameExists($conn, $Username, $UserID)){
        echo "Tên {$Username} đã được sử dụng!";
    } 

    if (checkEmailExists($conn, $Email, $UserID)){
        echo "Địa chỉ {$Email} đã được sử dụng!";
    }

    $uniqueAvtImg = "";
    $uniqueCoverImg = "";

    if (!checkUsernameExists($conn, $Username, $UserID) && !checkEmailExists($conn, $Email, $UserID)){
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

        if (UpdateUser($conn, $Username, $Password, $Email, $BankName, $BankAccNum, $uniqueAvtImg, $uniqueCoverImg, $Role, $Bio, $UserID)){
            echo "Đã cập nhật thông tin thành công!";
        } else {
            echo "Đã có lỗi xảy ra.";
        }
    }
?>
