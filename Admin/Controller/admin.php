<?php 
    session_start();
    ob_start();

    define("pageindex", 6);
    
    $urlFOLDERImage = "../../View/img/";
    $urlFOLDERImageCollec = "../../View/img/Collections/";
    $urlFOLDERImageNFT = "../../View/img/NFTs/";
    $urlFOLDERImageNFT101 = "../../View/img/NFT101/";
    $urlFOLDERImageCategories = "../../View/img/Categories/";
    $urlFOLDERImageUser = "../../View/img/User/";
    $urlFOLDERCSS = "../../View/CSS/";

    include "../../Model/connectdatabase.php";
    $connectDatabaseNFTAD = connectDatabaseNFT();

    include "../Model/Pagination.php";

    include "../View/header.php";

    if (isset($_GET['actadmin'])){
        $johanchoose = $_GET['actadmin'];
        switch($johanchoose){
            case 'products':
                // $fptpolytechnic = checkValueGetAdminFromProducts();
                // $count = countAllProducts();
                include "../View/productsedit.php";
                break;
            case 'collections':
                // $fptpolytechnic = checkValueGetAdminFromClollections();
                // $count = countAllCollections();
                include "../View/collectionsedit.php";
                break;
            default:
                $fptpolytechnic = checkValueGetAdminFromUser();
                $countAllUser = countAllUser();
                include "../View/User.php";
                break;
        }
    }
    else{
        $fptpolytechnic = checkValueGetAdminFromUser();
        $countAllUser = countAllUser();
        include "../View/User.php";
    }
    include "../View/footer.php";

?>
