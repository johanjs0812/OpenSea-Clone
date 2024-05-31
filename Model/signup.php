<?php
    // $Username = isset($_POST['Username123']) ? $_POST['Username123'] : null;
    // $Email =  isset($_POST['Email123']) ? $_POST['Email123'] : null;
    // $Password =isset($_POST['Password123'] ) ? $_POST['Password123'] : null;;

    // $stmt = "";
    // $conn = connectDatabaseNFT();
    // $stmt = $conn->prepare(
    //     "SELECT * FROM `user` WHERE `username` = :name"
    // );
    // $stmt->bindParam(":name", $Username);
    // $stmt->execute();
    
    // if($stmt->rowCount() > 0){
    //     echo "<script>alert('Tên {$Username} đã có người sử dụng!')</script>";
    // }   
    // $stmt = $conn->prepare(
    //     "SELECT * FROM `user` WHERE `Email` = :email"
    // );
    // $stmt->bindParam(":email", $Email);
    // $stmt->execute();
    
    // if($stmt->rowCount() > 0){
    //     echo "<script>alert('Địa chỉ {$Email} đã có người sử dụng!')</script>";
    // } 
    
    // if($stmt->rowCount() == 0){
    //     $stmt = $conn->prepare(
    //         "INSERT INTO `user` (`username`, `Password`, `Email`) 
    //         VALUES (:name, :password, :email)"
    //     );
    //     $stmt->bindParam(":name", $Username);
    //     $stmt->bindParam(":password", $Password);
    //     $stmt->bindParam(":email", $Email);
    
    //     $stmt->execute();
    //     echo "<script>alert('Đăng ký thành công!')</script>";
    // }
?>
<?php
    include "../Model/connectdatabase.php";

    function checkUsernameExists($conn, $username){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `username` = :name");
        $stmt->bindParam(":name", $username);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    function checkEmailExists($conn, $email){
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE `Email` = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    function insertUser($conn, $username, $password, $email){

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare(
            "   INSERT INTO `user` (`username`, `Password`, `Email`) 
                VALUES (:name, :password, :email)
            "
        );
        $stmt->bindParam(":name", $username);
        $stmt->bindParam(":password", $hashedPassword);
        $stmt->bindParam(":email", $email);
        return $stmt->execute();
    }

    $Username = isset($_POST['Username123']) ? $_POST['Username123'] : null;
    $Email =  isset($_POST['Email123']) ? $_POST['Email123'] : null;
    $Password = isset($_POST['Password123'] ) ? $_POST['Password123'] : null;;
    $conn = connectDatabaseNFT();

    if (checkUsernameExists($conn, $Username)){
        echo "Tên {$Username} đã có người sử dụng!";
    } 

    if (checkEmailExists($conn, $Email)){
        echo "Địa chỉ {$Email} đã có người sử dụng!";
    } 

    if (!checkUsernameExists($conn, $Username) && !checkEmailExists($conn, $Email)){
        if (insertUser($conn, $Username, $Password, $Email)){
            echo "Đăng ký thành công!";
        } else {
            echo "Đã có lỗi xảy ra.";
        }
    }
?>