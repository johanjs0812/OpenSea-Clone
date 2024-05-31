<?php 

    session_start();
    ob_start();
    
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    include "../Model/connectdatabase.php";
    include "../Model/category.php";
    include "../Model/collections.php";
    include "../Model/NFTDetailsShow.php";
    include "../Model/CommentAtNFT.php";
    
    $urlFOLDERImage = "../View/img/";
    $urlFOLDERImageCollec = "../View/img/Collections/";
    $urlFOLDERImageNFT = "../View/img/NFTs/";
    $urlFOLDERImageNFT101 = "../View/img/NFT101/";
    $urlFOLDERImageCategories = "../View/img/Categories/";
    $urlFOLDERImageUser = "../View/img/User/";
    $urlFOLDERCSS = "../View/CSS/";

    updatedFloor();
    updatedVolume();
    
    include "../View/header.php";

    if (isset($_GET['act'])){

        $johanchoose = $_GET['act'];

        switch($johanchoose){
            
            case 'drops':

                include "../View/drops.php";
                break;

            case 'collections':

                $getdataCollections = getdataCollections();
                $getNFTsfromeCollections = getNFTsfromeCollections();
                include "../View/collections.php";
                break;
            
            case 'NFTdetail':

                $getInformationofNFTs = getInformationofNFTs();
                $getNFTsInvolves = getNFTsInvolves();
                $getAllCommentAtNFT = getAllCommentAtNFT();
                $getAvataUser = getAvataUser();

                include "../View/NFTdetails.php";
                include_once "../View/CommentNFT.php";
                break;

            case 'payment':
                
                include "../View/payment.php";
                break;

            case 'thanhtoangiohang':

                include "../View/thanhtoangiohang.php";
                break;
               
            case 'chitietdonhang':   

                include "../View/chitietthanhtoan.php";
                break;

            case 'login':

                include "../View/login.php";
                break; 

            case 'signup':

                include "../View/signup.php";
                break;

            case 'admin':
                    header('location: ../index.php');
                    break;

            default:  
                $categories = getCategories();

                $getCollectionsforBanner = getCollectionsforBanner();
                $getCollectionsforChart1 = getCollectionsforChart1();
                $getCollectionsforChart2 = getCollectionsforChart2();

                $getCollectionsArtTrend = getCollectionsArtTrend();
                $getCollectionsGammingTrend = getCollectionsGammingTrend();
                $getCollectionsMusicTrend = getCollectionsMusicTrend();
                $getCollectionsMembershipsTrend = getCollectionsMembershipsTrend();
                $getCollectionsPhotographyTrend = getCollectionsPhotographyTrend();
                include "../View/home.php";
                break;
        }

    }
    else{
        $categories = getCategories();

        $getCollectionsforBanner = getCollectionsforBanner();
        $getCollectionsforChart1 = getCollectionsforChart1();
        $getCollectionsforChart2 = getCollectionsforChart2();

        $getCollectionsArtTrend = getCollectionsArtTrend();
        $getCollectionsGammingTrend = getCollectionsGammingTrend();
        $getCollectionsMusicTrend = getCollectionsMusicTrend();
        $getCollectionsMembershipsTrend = getCollectionsMembershipsTrend();
        $getCollectionsPhotographyTrend = getCollectionsPhotographyTrend();
        include "../View/home.php";
    }
    include "../View/footer.php";

?>
