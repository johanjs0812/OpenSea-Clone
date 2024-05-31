<?php
    include "../Model/ShowCart.php";     
    $UserID = (isset($_SESSION['UserID']) && $_SESSION['UserID']!="") ? $_SESSION['UserID'] : null;
    $ShowAllNFTinCart = showCartNFTx($dbmain, $UserID);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Johan</title>

       <!--=============== CSS ===============-->
       <?php include "../View/CSS/Home/style.php"; ?>
       <?php include "../View/CSS/Home/REPONSIVE_INDEX.php"; ?>
       <?php include "../View/CSS/drops/drops.php"; ?>
       <?php include "../View/CSS/detail/detail.php"; ?>
       <?php include "../View/CSS/collections_user/collections_user.php"; ?>
       <?php include "../View/CSS/collections_user/REPONSIVE_collections_user.php"; ?>
       <?php include "../View/CSS/payment/payment_page.php" ?>       
       <?php include "../View/CSS/thanhtoangiohang/thanhtoangiohang.php"; ?>

       <!--=============== FAVICON ===============-->
       <link rel="shortcut icon" href="../View/img/logo.jpg" type="image/x-icon">

       <!--=============== BOXICONS ===============-->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

       <!-- =================JS=================== -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <script
            src="https://code.jquery.com/jquery-3.7.0.js"
            integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
            crossorigin="anonymous">
        </script>


        <!-- ============================ROUNDING TO VND==================================== -->
        <script src="../View/JS/Home/RoudingtoVND.js"></script>
        
        <!-- ==============================SIGNUP=========================================== -->
        <script src="../View/JS/signup/SignUpAjax.js"></script>

        <!-- ==============================LOGIN============================================ -->
        <script src="../View/JS/Login/LoginAjax.js"></script>

        <!-- ==============================ADD TO CART====================================== -->
        <script src="../View/JS/AddToCart/main.js"></script>
        <script src="../View/JS/AddToCart/AddAjax.js"></script>
        
        <!-- ===============================DELETE CART===================================== -->
        <script src="../View//JS/AddToCart/DeleteCart.js"></script>

        <!-- ===============================COMMENT===================================== -->
        <script src="../View/JS/Comment/AddComment.js"></script>
        <script src="../View/JS/Comment/RemoveCmt.js"></script>


</head>

<body id="body">

    <!-- ------------khungthanhtoan---------------- -->
    <div class="khungthanhtoan" id="uuphiencongai" style="z-index: 300000;">
        <div class="padding-full-all">
            <div class="duongmieu">
                <div class="sopss">Cart</div>
                <div><i class='bx bx-x' id="andi-x"></i></div>
            </div>
            <div class="ngocthu">
                <div class="huynhs">
                    <p id="countNFTinCart147">

                    </p>
                    <!-- <p>items</p> -->
                </div>
                <div class="tnaspds" id="clearall-pr">
                    Xóa tất cả
                </div>
            </div>
            <style>
                .pridsd:hover span{
                    display: none;
                }

                .pridsd:hover .the-i{
                    display: block;
                }
            </style>
            <div class="hop-love actor-van" id="hopssss-add" style=" max-height:300px; overflow-y:scroll;">
                <?php
                    if (is_array($ShowAllNFTinCart )){
                        foreach($ShowAllNFTinCart as $k){
                            extract($k, EXTR_PREFIX_ALL, 'NFTsCart');
                            if ($NFTsCart_ListedPrice) {
                                $NFTsCart_ListedPrice = number_format($NFTsCart_ListedPrice, 0, ',', '.');
                                $NFTsCart_ListedPrice = $NFTsCart_ListedPrice . ' ₫';
                            }
                            echo '
                                <div class="NumberAllNFT" time="'.$NFTsCart_CreatedAt.'" style="display:flex; align-items:center; margin-bottom:10px;">
                                    <div id="sethovervip" class="boxanh-ss" style="height: 50px; width:50px; overflow:hidden; border-radius:5px; margin-right:10px;">
                                        <img src="'.$urlFOLDERImageNFT.''.$NFTsCart_ImageURL.'" alt="" style="width:100%; height:100%;">
                                    </div>
                                    <div class="in4-sd" style="margin-right: 20px">
                                        <p class="x47">'.$NFTsCart_Name.'</p>
                                        <p class="x45"></p>
                                        <p class="x43"><span></span></p>
                                    </div>
                                    <div class="pridsd">
                                        <div class="xsss58">
                                            <span class="tatcagiatien">'.$NFTsCart_ListedPrice.'</span>
                                            <span></span>
                                            <div class="parentClass-17-10">
                                                <input type="hidden" name="IDNFTd" value="'.$NFTsCart_NFTID.'">
                                                <input type="hidden" name="IDCartd" value="'.$NFTsCart_CartID.'">
                                                <div class="the-i oppoa3s" style="text-align: right; border:0px;background:none;">
                                                    <button class="RemoveNFTCart" name="bamxoasanpham">
                                                        <i class="thungrac bx bx-trash"></i>
                                                    </button>                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    }
                    else{
                        echo "Chưa có NFT nào.";
                    }
                ?>
            </div>
            <div class="phantongtien">
                <div class="koquantam">Tổng giá</div>
                <div class="nhaatsdd">
                    <div class="x5444">
                        <div id="x1444"></div>
                    </div>
                </div>
            </div>
            <a href="index.php?act=thanhtoangiohang" class="bussssw">
                <button class="nhuhoanhumong">Check Out</button>
            </a>           
        </div>
    </div>
    <!-- ------------khungthanhtoan---------------- -->

    <!-- ==================== BACKDOOR ========================= -->
    <div class="backdoor"></div>
    <!-- ===================== BACKDOOR ======================== -->

    <!-- ===================== HEADER ======================== -->
    <header>   
        <div class="bar-height-menu">
                <nav class="menu-main">
                    <div class="menu-reponsive-vip">
                        <i class='bx bx-menu'></i>
                    </div>
                    <div class="logo-drop-star">
                        <a class="a-menu" href="index.php?act=home">
                            <div class="logo-main">
                                <img id="hoan" class="thienhoatong" src="../View/img/logo.jpg" alt="">
                            </div>
                            <div class="textlogomain">
                                <p>
                                    Johan
                                </p>
                            </div>                
                        </a>

                        <div class="dr-st">
                            <div class="padding">
                                <div class="width-1px">

                                </div>

                                <div class="nav-one-two">
                                    <a href="index.php?act=drops">
                                        <span>Drop</span>
                                    </a>
                                    <a href="#st">
                                        <span>Stats</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-nav">
                        <div class="search-nav-tang1">
                            <div class="search-nav-tang2">
                                <div class="tanginput">
                                    <div class="search-icon">
                                        <i class='bx bx-search-alt-2'></i>
                                    </div>
                                    <input type="text" class="input-nav" placeholder="Search items, collections, ...">
                                    <div class="slash-nav">/</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="user-cart">
                        <div class="nav-user-mail">
                            <div class="tration-center-nav">
                                <div class="tration-center-button">
                                    <div class="mail-content" style="display: flex; align-items:center">
                                        <a href="index.php?act=admin">
                                            <button class="button">
                                                <?php
                                                    if (isset($_SESSION['Role']) && $_SESSION['Role']=='admin'){
                                                    echo '
                                                            <i class="bx bxs-key"></i>
                                                            <span class="span">Đến trang quản trị</span>
                                                    ';
                                                    }
                                                    else{
                                                        echo '
                                                            <i class="bx bxs-wallet"></i>
                                                            <span class="span">Connecting to wallet</span>
                                                        ';
                                                    }
                                                ?>
                                            </button>
                                        </a>
                                        <div href="" class="hover-2027-xxx" id="#barMenu147">
                                            <div class="box-user">
                                                <div class="icon-user">
                                                    <?php
                                                        if (isset($_SESSION['Role']) && $_SESSION['Role']!="") {
                                                        echo '
                                                            <div class="showBarxs" id="UserIconCheck" style="width: 40px; height: 40px; overflow:hidden; border-radius:50%; margin: 5px 10px;">
                                                                <img style="height: 100%; width: 100%;" src="'.$urlFOLDERImageUser.''.$_SESSION['Logo'].'"; alt="">
                                                            </div>
                                                                ';
                                                        }else{
                                                            echo '<i style="font-size: 30px; margin: 5px 10px;" id="UserIconCheck" class="bx bx-user-circle showBarxs"></i>';
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart-nav">
                            <div class="box-cart" id="checked-cart-header">
                                <div class="box-button-cart">     
                                    <div class="ngocngoc" id="chisoindexcart">

                                    </div>
                                    <button id="hienlistmua">
                                        <i class='bx bx-cart-alt' ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </ul>             
                </nav>
        </div>
    </header>
    <!-- ===================== HEADER ======================== -->

    <!-- ==============MENU======================================= -->
    <div class="parent-list-down-all-2027" id="ShowMenuAll">
            <a href="index.php?act=signup" class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-user-circle'></i>
                    <span>Profile</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bxs-directions'></i>
                    <span>Make a deal</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bxs-low-vision'></i>
                    <span>Watchlist</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bxs-grid' ></i>
                    <span>My collections</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-edit' ></i>
                    <span>Create</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <!-- <a class="list-nav-2027">
                <div class="children-2027">
                    <img src="" alt="">
                    <span>Johan Pro</span>
                </div>
                <div class="children02-2027"></div>
            </a> -->

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-add-to-queue' ></i>
                    <span>Learn</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-help-circle'></i>
                    <span>Help center</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-cog' ></i>
                    <span>Settings</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-world'></i>
                    <span>Language</span>
                </div>
                <div class="children02-2027">
                    <span>en</span>
                    <i class='bx bx-chevron-right'></i>
                </div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-sun' ></i>
                    <span>Night mode</span>
                </div>
                <div class="children02-2027"></div>
            </a>

            <a class="list-nav-2027">
                <div class="children-2027">
                    <i class='bx bx-log-out-circle' ></i>
                    <span>Log out</span>
                </div>
                <div class="children02-2027"></div>
            </a>
    </div>
    <!-- ==============MENU======================================= -->

<script>

    const HoaThanTue = document.getElementById('UserIconCheck');
    
    const MenuMain = document.querySelector('div.parent-list-down-all-2027').style.display = "none";

    HoaThanTue.addEventListener('click', () =>{
        if (document.querySelector('div.parent-list-down-all-2027').style.display == "none") {
            document.querySelector('div.parent-list-down-all-2027').style.display = "block";
        }else{
            document.querySelector('div.parent-list-down-all-2027').style.display = "none";
        }
    })

    function RoudingtoVNDCart(){      
        let totalx14 = 0;
        $('.tatcagiatien').each(function() {
            let textx  = $(this).text();
            let numberString = textx.replace('₫', '').replace(/\D/g, '').trim();
            let numeman = Number(numberString);
            totalx14 += numeman;
        });
        let painer = totalx14.toLocaleString('vi-VN');
        $('#x1444').text(painer + '₫');
    }


    window.RoudingtoVNDCart = RoudingtoVNDCart;

    if (typeof window.RoudingtoVNDCart === 'function') {
        window.RoudingtoVNDCart();
    }

</script>