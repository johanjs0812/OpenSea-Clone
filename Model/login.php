<?php
    session_start();

    include "../Model/connectdatabase.php";

    function getUser($conn, $username){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `username` = :name");
        $stmt->bindParam(":name", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    $Username = isset($_POST['Username222']) ? $_POST['Username222'] : null;
    $Password = isset($_POST['Password222'] ) ? $_POST['Password222'] : null;;
    $conn = connectDatabaseNFT();

    $user = getUser($conn, $Username);

    if (!$user) {
        echo "Tên đăng nhập không tồn tại.";
    }
    else if(!password_verify($Password, $user['Password']) && $Password != $user['Password']){
        echo "Mật khẩu không chính xác.";
    }
    else{
        $_SESSION['loggedin'] = 'OKAY!';
        $_SESSION['Role'] = $user['Role'];
        $_SESSION['Logo'] = $user['AvatarImage'];
        $_SESSION['username'] = $Username;
        $_SESSION['UserID'] = $user['UserID'];
        echo "Đăng nhập thành công!";
    }
?>
