<?php

    function connectDatabaseNFT(){
        $servername = "localhost";
        $username = "root";
        $password = "";
    
        try {
            $conn = new PDO("mysql:host=$servername;dbname=nft_marketplace", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        } catch(PDOException $e){
        }
        return $conn;
    } 

?>

