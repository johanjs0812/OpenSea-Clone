
<!-- ==================================SCROLLING==================================== -->
<script src="../View/JS/Home/ScrollingHome.js"></script>

<main id="main" class="main">
    <div class="main-trastion">
        <div class="main-grip-trastion-center" style="display: block;">
            <!-- ============================SECTION ONE================================= -->
            <div class="main-section-one rowsx">
                <div class="nav-bar-section-one" style="margin: 50px 0;">
                    <div class="trastion-nav-bar-section-one" style="margin: 40px 0;">
                        <nav>
                            <div class="media-width-100phantram">
                                <ul class="media-width-100phantram padding-0">
                                    <div class="mautext-sss-page-home">
                                        <li>
                                            <a href="index.php?categoryID=all" style="display: flex;padding: 8px 16px;background-color: rgb(208, 212, 213);border-radius: 10px;">
                                                <span>
                                                    All
                                                </span>
                                            </a>
                                        </li>

                                        <?php
                                            foreach($categories as $johan){
                                                extract($johan, EXTR_PREFIX_ALL, 'category');
                                                echo '
                                                    <li>
                                                        <a href="index.php?categoryID='.$category_CategoriyID.'" style="display: flex;padding: 8px 16px;background-color: rgb(208, 212, 213);border-radius: 10px;">
                                                            <span>
                                                                '.$category_Name.'
                                                            </span>
                                                        </a>
                                                    </li>
                                                ';
                                            }                                          
                                        ?>
                                    </div>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- -------------------------------------------------------------------------------------------------- -->

                <div class="banner-section-one" id="truongquanvoky">
                    <div class="banner-all-home-page" style="margin: 0 32px;">
                        <?php
                        foreach ($getCollectionsforBanner as $collec) {
                            extract($collec, EXTR_PREFIX_ALL, 'banner');
                            echo '                                  
                                    <a href="index.php?act=collections&idcollec='.$banner_CollectionID.'" class="banner-product-main-home">
                                        <div id="hoaatao" class="imgs-main-home-banner">
                                            <img src="'.$urlFOLDERImageCollec.''.$banner_FeaturedImage.'" alt="">
                                        </div>
                                        <div class="bg-black">
            
                                        </div>
                                        <div class="text-price-main-home-banner">
                                            <p class="Inter-weight">'.$banner_Name.'</p>
                                            
                                            <p class="floor-weight">Author: '.$banner_username.'</p>
                                        </div>           
                                    </a>
                                ';
                            }
                        // <p class="floor-weight">Giá sàn: '.$banner_CollectionID.' VND</p>
                        ?>
                    </div>
                    <button id="btnleft-banner-home-page" class="btn-left-banner"><i class="bx bxs-chevron-left"></i></button>
                    <button id="btnright-banner-home-page" class="btn-right-banner"><i class="bx bxs-chevron-right"></i></button>
                </div>
            </div>
            <!-- ============================SECTION ONE================================= -->

            <!-- ============================SECTION TWO================================= -->
            <div class="main-section-two rowsx" id="twosectionHome" >
                <!-- ============== START NAV SECTION TWO=============== -->
                <div class="trastion-nav-section-two">
                    <div class="navbar-section2">
                        <div class="tredning-and-top" style="font-weight:700; font-size: 20px; display:flex; column-gap: 10px">
                            <p style=" color: white; padding: 0px 20px; background-color: blue; border-radius: 8px; display:flex; align-items:center; text-align:center">Rank</p>
                            <p style="padding: 0px 20px; border: 1px solid black; border-radius: 8px; display:flex; align-items:center; text-align:center">Trending</p>
                        </div>
                        <div class="times-of-view">
                            <div class="times">
                                <div class="hours">
                                    <span>1h</span>
                                </div>
                                <div class="hours-2">
                                    <span>6h</span>
                                </div>
                                <div class="hours-3">
                                    <span>24h</span>
                                </div>
                                <div class="days">
                                    <span>7d</span>
                                </div>
                                <div class="display-none-temp">
                                    <i class="bx bx-chevron-down "></i>
                                </div>
                            </div>
                            <div class="select-box-all-chans">
                                <div class="all-chans">
                                    <span>All chains</span>
                                </div>
                                <div class="icon-select">
                                    <i class='bx bx-chevron-down'></i>
                                </div>
                            </div>
                            <div class="viewall">
                                <div>
                                    <span>
                                        View all
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- ---------hr--------- -->

                    <div class="hoa-ab">
                        <div class="hr">
                            <div class="hr-js">

                            </div>
                        </div>
                    </div>


                </div>

                <!-- ===============END NAV SECTION TWO=============== -->

                <!-- ==================START CHART SECTION TWO============= -->

                <div class="two-charts">
                    <div class="fristly-chart">
                        <div class="content-fl">
                            <div class="plot">
                                <div class="nav-fl">
                                    <div style="display: flex; align-items:center;">
                                        <span>Rank</span>
                                    </div>
                                    <div class="collection-fl" style="margin-left: 30px;">
                                        <span>Collections</span>
                                    </div>
                                    <div class="floor-price-fl">
                                        <span>Floor Price</span>
                                    </div>
                                    <div class="volume-fl">
                                        <span>Volume</span>
                                    </div>
                                </div>
                                <div class="table-chart">
                                    <?php
                                        $tang = 1;
                                        foreach ($getCollectionsforChart1 as $chart){
                                            extract($chart, EXTR_PREFIX_ALL, 'charthome1');
                                            if ($charthome1_Floor == 0) {
                                                $charthome1_Floor = "No revenue yet";
                                            }
                                            else{
                                                $charthome1_Floor = "{$charthome1_Floor}";
                                            }
                                            if ($charthome1_Volume == 0) {
                                                $charthome1_Volume = "No revenue yet";
                                            }
                                            else{
                                                $charthome1_Volume = "{$charthome1_Volume}";
                                            }
                                            echo '
                                                <div class="chart-user">
                                                    <a  href="index.php?act=collections&idcollec='.$charthome1_CollectionID.'">
                                                        <div class="user-x125-all-1">
                                                            <div class="reponsive-home-x125-a">
                                                                <div class="reponsive-home-x125-a-1">
                                                                    <span class="reponsive-home-x125-a-1-1">' . $tang++ . '</span>
                                                                </div>
                                                            </div>
                                                            <div class="reponsive-home-x125-b" style="margin-left: 30px;">
                                                                <div class="reponsive-home-x125-b-1">
                                                                    <span>
                                                                        <img src="'.$urlFOLDERImageCollec.''.$charthome1_LogoImage.'" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="reponsive-home-x125-b-2">
                                                                    <div class="reponsive-home-x125-b-2-1">
                                                                        <span >
                                                                            <div class="reponsive-home-x125-b-2-1-name-text">
                                                                                <div class="reponsive-home-x125-b-2-1-name-text-xxx" style="width: 100%;">'.$charthome1_Name.'</div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-x125-all-2">
                                                            <span>
                                                                <div class="floorinChart1810">
                                                                '.$charthome1_Floor.' 
                                                                </div>
                                                            </span>
                                                        </div>
                                                        <div class="user-x125-all-3">
                                                            <span>
                                                                <div class="volumeinChart1810">
                                                                '.$charthome1_Volume.' 
                                                                </div>
                                                            </span>
                                                        </div>                                                   
                                                    </a>                                          
                                                </div>
                                            ';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- ------------------------- -->

                    <div class="seconds-chart">
                        <div class="content-fl">
                            <div class="plot">
                                <div class="nav-fl">
                                    <div style="display: flex; align-items:center;">
                                        <span>Rank</span>
                                    </div>
                                    <div class="collection-fl" style="margin-left: 30px;">
                                        <span>Collections</span>
                                    </div>
                                    <div class="floor-price-fl">
                                        <span>Floor Price</span>
                                    </div>
                                    <div class="volume-fl">
                                        <span>Volume</span>
                                    </div>
                                </div>
                                <div class="table-chart">
                                    <?php
                                    $hoa = 6;
                                    foreach ($getCollectionsforChart2 as $chartx){
                                        extract($chartx, EXTR_PREFIX_ALL, 'charthome2');
                                        if ($charthome2_Floor == 0) {
                                            $charthome2_Floor = "No revenue yet";
                                        }
                                        else{
                                            $charthome2_Floor = "{$charthome2_Floor}";
                                        }
                                        if ($charthome2_Volume == 0) {
                                            $charthome2_Volume = "No revenue yet";
                                        }
                                        else{
                                            $charthome2_Volume = "{$charthome2_Volume}";
                                        }
                                        echo '
                                            <div class="chart-user">
                                                <a  href="index.php?act=collections&idcollec='.$charthome2_CollectionID.'">
                                                    <div class="user-x125-all-1">
                                                        <div class="reponsive-home-x125-a">
                                                            <div class="reponsive-home-x125-a-1">
                                                                <span class="reponsive-home-x125-a-1-1">' . $hoa++ . '</span>
                                                            </div>
                                                        </div>
                                                        <div class="reponsive-home-x125-b" style="margin-left: 30px;">
                                                            <div class="reponsive-home-x125-b-1">
                                                                <span>
                                                                    <img src="'.$urlFOLDERImageCollec.''.$charthome2_LogoImage.'" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="reponsive-home-x125-b-2">
                                                                <div class="reponsive-home-x125-b-2-1">
                                                                    <span >
                                                                        <div class="reponsive-home-x125-b-2-1-name-text">
                                                                            <div class="reponsive-home-x125-b-2-1-name-text-xxx" style="width: 100%;">'.$charthome2_Name.'</div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-x125-all-2">
                                                        <span>
                                                            <div class="floorinChart1810">
                                                            '.$charthome2_Floor.'
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <div class="user-x125-all-3">
                                                        <span>
                                                            <div class="volumeinChart1810">
                                                            '.$charthome2_Volume.'
                                                            </div>
                                                        </span>
                                                    </div>                                                 
                                                </a>                                          
                                            </div>
                                        ';
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ==================END CHART SECTION TWO============= -->


            </div>
            <!-- ============================SECTION TWO================================= -->

            <!-- ==============================SECTION THREE================================== -->
            <div class="main-section-home three rowsx" id="threesectionHome" style="padding-top: 40px;">
                <div class="xsa-section">
                    <div class="xsa-bb-page">
                        <div class="title">
                            <h2>
                                Trending in Art
                            </h2>
                            <div class="sic-after">
                            </div>
                        </div>
                    </div>
                    <div class="position-relactive-page-index-section-three">
                        <button class="arr-st-3-left"><i class="bx bxs-chevron-left"></i></button>
                        <div class="slide-st-3">
                            <div class="johanchinh">
                                <?php
                                    foreach ($getCollectionsArtTrend as $x) {
                                        extract($x, EXTR_PREFIX_ALL, 'arttrend');
                                        if ($arttrend_Floor == 0.00) {
                                            $arttrend_Floor = "--";
                                        }
                                        else{
                                            $arttrend_Floor = "{$arttrend_Floor}";
                                        }
                                        if ($arttrend_Volume == 0.00) {
                                            $arttrend_Volume = "--";
                                        }
                                        else{
                                            $$arttrend_Volume = "{$arttrend_Volume}";
                                        }
                                        echo '
                                              <div class="sw-slides-margin">
                                                    <div class="s145">
                                                        <a class="cabb2" href="index.php?act=collections&idcollec='.$arttrend_CollectionID.'">
                                                            <div class="img-sw-slides">
                                                                <span class="chenxi">
                                                                    <img src="'.$urlFOLDERImageCollec.''.$arttrend_BannerImage.'" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-sw-slides">
                                                                <div class="kanta-s">
                                                                    <div class="clomnss">
                                                                        <div class="yohan-sl">
                                                                            <div class="ct-yohan-sl">
                                                                            '.$arttrend_Name.'
                                                                            </div>
                                                                        </div>
                                                                        <div class="vantaxi">
                                                                            <div class="benzema">
                                                                                <div class="kens">
                                                                                    <span class="kens-a">
                                                                                        <div>Floor</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos">
                                                                                    <span class="leso-a">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Floor.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>           
                                                                            <div class="benzema-x">
                                                                                <div class="kens-x">
                                                                                    <span class="kens-a-x">
                                                                                        <div>Total Volume</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos-x">
                                                                                    <span class="leso-a-x">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Volume.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                            
                                                                    </div>                                                             
                                                                </div>                                                    
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div> </a>
                                            ';
                                    }
                                ?>
                            </div>
                        </div>
                        <button class="arr-st-3-right"><i class="bx bxs-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <!-- ==============================SECTION THREE================================== -->

            <!-- ==============================SECTION FOUR================================== -->
            <div class="main-section-home four rowsx" id="foursectionHome">
                <div class="xsa-section">
                    <div class="xsa-bb-page">
                        <div class="title">
                            <h2>
                                Trending in Gamming
                            </h2>
                            <div class="sic-after">

                            </div>
                        </div>
                    </div>
                    <div class="position-relactive-page-index-section-three">
                        <button class="arr-st-3-left"><i class="bx bxs-chevron-left"></i></button>
                        <div class="slide-st-3">
                            <div class="johanchinh">
                            <?php
                                    foreach ($getCollectionsGammingTrend as $x) {
                                        extract($x, EXTR_PREFIX_ALL, 'arttrend');
                                        if ($arttrend_Floor == 0.00) {
                                            $arttrend_Floor = "--";
                                        }
                                        else{
                                            $arttrend_Floor = "{$arttrend_Floor}";
                                        }
                                        if ($arttrend_Volume == 0.00) {
                                            $arttrend_Volume = "--";
                                        }
                                        else{
                                            $$arttrend_Volume = "{$arttrend_Volume}";
                                        }
                                        echo '
                                                <div class="sw-slides-margin">
                                                    <div class="s145">
                                                        <a class="cabb2" href="index.php?act=collections&idcollec='.$arttrend_CollectionID.'">
                                                            <div class="img-sw-slides">
                                                                <span class="chenxi">
                                                                    <img src="'.$urlFOLDERImageCollec.''.$arttrend_BannerImage.'" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-sw-slides">
                                                                <div class="kanta-s">
                                                                    <div class="clomnss">
                                                                        <div class="yohan-sl">
                                                                            <div class="ct-yohan-sl">
                                                                            '.$arttrend_Name.'
                                                                            </div>
                                                                        </div>
                                                                        <div class="vantaxi">
                                                                            <div class="benzema">
                                                                                <div class="kens">
                                                                                    <span class="kens-a">
                                                                                        <div>Floor</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos">
                                                                                    <span class="leso-a">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Floor.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>           
                                                                            <div class="benzema-x">
                                                                                <div class="kens-x">
                                                                                    <span class="kens-a-x">
                                                                                        <div>Total Volume</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos-x">
                                                                                    <span class="leso-a-x">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Volume.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                            
                                                                    </div>                                                             
                                                                </div>                                                    
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div> 
                                            ';
                                    }
                                ?>
                            </div>
                        </div>
                        <button class="arr-st-3-right"><i class="bx bxs-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <!-- ==============================SECTION FOUR================================== -->

            <!-- ==============================SECTION FIVE================================== -->
            <div class="main-section-home five rowsx" id="fivesectionHome">
                <div class="xsa-section">

                    <div class="xsa-bb-page">
                        <div class="title">
                            <h2>
                                Trending in Music
                            </h2>
                            <div class="sic-after">

                            </div>
                        </div>
                    </div>

                    <div class="position-relactive-page-index-section-three">
                        <button class="arr-st-3-left"><i class="bx bxs-chevron-left"></i></button>
                        <div class="slide-st-3">
                            <div class="johanchinh">
                            <?php
                                    foreach ($getCollectionsMusicTrend  as $x) {
                                        extract($x, EXTR_PREFIX_ALL, 'arttrend');
                                        if ($arttrend_Floor == 0.00) {
                                            $arttrend_Floor = "--";
                                        }
                                        else{
                                            $arttrend_Floor = "{$arttrend_Floor}";
                                        }
                                        if ($arttrend_Volume == 0.00) {
                                            $arttrend_Volume = "--";
                                        }
                                        else{
                                            $$arttrend_Volume = "{$arttrend_Volume}";
                                        }
                                        echo '
                                                <div class="sw-slides-margin">
                                                    <div class="s145">
                                                        <a class="cabb2" href="index.php?act=collections&idcollec='.$arttrend_CollectionID.'">
                                                            <div class="img-sw-slides">
                                                                <span class="chenxi">
                                                                    <img src="'.$urlFOLDERImageCollec.''.$arttrend_BannerImage.'" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-sw-slides">
                                                                <div class="kanta-s">
                                                                    <div class="clomnss">
                                                                        <div class="yohan-sl">
                                                                            <div class="ct-yohan-sl">
                                                                            '.$arttrend_Name.'
                                                                            </div>
                                                                        </div>
                                                                        <div class="vantaxi">
                                                                            <div class="benzema">
                                                                                <div class="kens">
                                                                                    <span class="kens-a">
                                                                                        <div>Floor</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos">
                                                                                    <span class="leso-a">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Floor.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>           
                                                                            <div class="benzema-x">
                                                                                <div class="kens-x">
                                                                                    <span class="kens-a-x">
                                                                                        <div>Total Volume</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos-x">
                                                                                    <span class="leso-a-x">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Volume.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                            
                                                                    </div>                                                             
                                                                </div>                                                    
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div> 
                                            ';
                                    }
                                ?>
                            </div>
                        </div>
                        <button class="arr-st-3-right"><i class="bx bxs-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <!-- ==============================SECTION FIVE================================== -->

            <!-- ==============================SECTION SIX================================== -->
            <div class="xsa-section rowsx" id="sixsectionHome rowsx">
                <div class="xsa-bb-page">
                    <div class="title">
                        <h2>
                            Trending in Photography
                        </h2>
                        <div class="sic-after">
                        </div>
                    </div>
                </div>
                <div class="position-relactive-page-index-section-three">
                    <button class="arr-st-3-left"><i class="bx bxs-chevron-left"></i></button>
                    <div class="slide-st-3">
                        <div class="johanchinh">
                        <?php
                                    foreach ($getCollectionsPhotographyTrend  as $x) {
                                        extract($x, EXTR_PREFIX_ALL, 'arttrend');
                                        if ($arttrend_Floor == 0.00) {
                                            $arttrend_Floor = "--";
                                        }
                                        else{
                                            $arttrend_Floor = "{$arttrend_Floor}";
                                        }
                                        if ($arttrend_Volume == 0.00) {
                                            $arttrend_Volume = "--";
                                        }
                                        else{
                                            $$arttrend_Volume = "{$arttrend_Volume}";
                                        }
                                        echo '
                                                <div class="sw-slides-margin">
                                                    <div class="s145">
                                                        <a class="cabb2" href="index.php?act=collections&idcollec='.$arttrend_CollectionID.'">
                                                            <div class="img-sw-slides">
                                                                <span class="chenxi">
                                                                    <img src="'.$urlFOLDERImageCollec.''.$arttrend_BannerImage.'" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-sw-slides">
                                                                <div class="kanta-s">
                                                                    <div class="clomnss">
                                                                        <div class="yohan-sl">
                                                                            <div class="ct-yohan-sl">
                                                                            '.$arttrend_Name.'
                                                                            </div>
                                                                        </div>
                                                                        <div class="vantaxi">
                                                                            <div class="benzema">
                                                                                <div class="kens">
                                                                                    <span class="kens-a">
                                                                                        <div>Floor</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos">
                                                                                    <span class="leso-a">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Floor.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>           
                                                                            <div class="benzema-x">
                                                                                <div class="kens-x">
                                                                                    <span class="kens-a-x">
                                                                                        <div>Total Volume</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos-x">
                                                                                    <span class="leso-a-x">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Volume.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                            
                                                                    </div>                                                             
                                                                </div>                                                    
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div> 
                                            ';
                                    }
                                ?>
                        </div>
                    </div>
                    <button class="arr-st-3-right"><i class="bx bxs-chevron-right"></i></button>
                </div>
            </div>
            <!-- ==============================SECTION SIX================================== -->
        </div>


        <!-- ==============================SECTION SEVEN================================== -->
        <div class="main-section-home seven rowsx" id="sevensectionHome">
            <div class="xsa-section">
                <div class="xsa-bb-page">
                    <div class="title">
                        <h2>
                            Trending in Memberships
                        </h2>
                        <div class="sic-after">

                        </div>
                    </div>
                </div>
                <div class="position-relactive-page-index-section-three">
                    <button class="arr-st-3-left"><i class="bx bxs-chevron-left"></i></button>
                    <div class="slide-st-3">
                        <div class="johanchinh">
                        <?php
                                    foreach ($getCollectionsMembershipsTrend  as $x) {
                                        extract($x, EXTR_PREFIX_ALL, 'arttrend');
                                        if ($arttrend_Floor == 0.00) {
                                            $arttrend_Floor = "--";
                                        }
                                        else{
                                            $arttrend_Floor = "{$arttrend_Floor}";
                                        }
                                        if ($arttrend_Volume == 0.00) {
                                            $arttrend_Volume = "--";
                                        }
                                        else{
                                            $$arttrend_Volume = "{$arttrend_Volume}";
                                        }
                                        echo '
                                                <div class="sw-slides-margin">
                                                    <div class="s145">
                                                        <a class="cabb2" href="index.php?act=collections&idcollec='.$arttrend_CollectionID.'">
                                                            <div class="img-sw-slides">
                                                                <span class="chenxi">
                                                                    <img src="'.$urlFOLDERImageCollec.''.$arttrend_BannerImage.'" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-sw-slides">
                                                                <div class="kanta-s">
                                                                    <div class="clomnss">
                                                                        <div class="yohan-sl">
                                                                            <div class="ct-yohan-sl">
                                                                            '.$arttrend_Name.'
                                                                            </div>
                                                                        </div>
                                                                        <div class="vantaxi">
                                                                            <div class="benzema">
                                                                                <div class="kens">
                                                                                    <span class="kens-a">
                                                                                        <div>Floor</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos">
                                                                                    <span class="leso-a">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Floor.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>           
                                                                            <div class="benzema-x">
                                                                                <div class="kens-x">
                                                                                    <span class="kens-a-x">
                                                                                        <div>Total Volume</div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="leos-x">
                                                                                    <span class="leso-a-x">
                                                                                        <div class="RoundingtoVNDx14">'.$arttrend_Volume.'</div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                            
                                                                    </div>                                                             
                                                                </div>                                                    
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div> 
                                            ';
                                    }
                                ?>
                        </div>
                    </div>
                    <button class="arr-st-3-right"><i class="bx bxs-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <!-- ==============================SECTION SEVEN================================== -->

        <!-- ==============================SECTION EIGHT================================== -->
        <div class="main-section-home three rowsx" id="eightsectionHome">
            <div class="xsa-section">

                <div class="xsa-bb-page">
                    <div class="title">
                        <h2>
                            NFT 101
                        </h2>
                        <div class="sic-after">

                        </div>
                    </div>
                </div>
                <div class="position-relactive-page-index-section-three">
                    <button class="arr-st-3-left"><i class="bx bxs-chevron-left"></i></button>
                    <div class="slide-st-3">

                        <div id="canthanmotchut-home" class="johanchinh" style="display: flex;">

                            <div class="sw-slides-margin">
                                <div class="s145">
                                    <a class="cabb2" href="#ad">
                                        <div class="img-sw-slides">
                                            <span class="chenxi">
                                                <img src="<?php echo "{$urlFOLDERImageNFT101}1.webp"; ?>">
                                            </span>
                                        </div>
                                        <div class="text-sw-slides">
                                            <div class="kanta-s">
                                                <div class="clomnss">
                                                    <div class="yohan-sl">
                                                        <div class="ct-yohan-sl">
                                                            What is an NFT?
                                                        </div>
                                                        <div class="vantaxi">
                                                            <div class="benzema">
                                                                <div class="kens">
                                                                    <span class="kens-a">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos" >
                                                                    <span class="leso-a">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="benzema-x">
                                                                <div class="kens-x">
                                                                    <span class="kens-a-x">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos-x">
                                                                    <span class="leso-a-x">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                
                                                </div>
                                                                
                                            </div>                                                    
                                        </div>
                                    </a>
                                </div>
                            </div></div>
                            <!-- -------------------------------- -->
                            <div class="sw-slides-margin">
                                <div class="s145">
                                    <a class="cabb2" href="#ad">
                                        <div class="img-sw-slides">
                                            <span class="chenxi">
                                                <img src="<?php echo "{$urlFOLDERImageNFT101}2.webp"; ?>">
                                            </span>
                                        </div>
                                        <div class="text-sw-slides">
                                            <div class="kanta-s">
                                                <div class="clomnss">
                                                    <div class="yohan-sl">
                                                        <div class="ct-yohan-sl">
                                                            How to buy an NFT?
                                                        </div>
                                                        <div class="vantaxi">
                                                            <div class="benzema">
                                                                <div class="kens">
                                                                    <span class="kens-a">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos" >
                                                                    <span class="leso-a">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="benzema-x">
                                                                <div class="kens-x">
                                                                    <span class="kens-a-x">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos-x">
                                                                    <span class="leso-a-x">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                
                                                </div>
                                                                
                                            </div>                                                    
                                        </div>
                                    </a>
                                </div>
                            </div></div>
                            <!-- -------------------------------- -->
                            <div class="sw-slides-margin">
                                <div class="s145">
                                    <a class="cabb2" href="#ad">
                                        <div class="img-sw-slides">
                                            <span class="chenxi">
                                                <img src="<?php echo "{$urlFOLDERImageNFT101}4.webp"; ?>">
                                            </span>
                                        </div>
                                        <div class="text-sw-slides">
                                            <div class="kanta-s">
                                                <div class="clomnss">
                                                    <div class="yohan-sl">
                                                        <div class="ct-yohan-sl">
                                                            How to stay protecd in web3
                                                        </div>
                                                        <div class="vantaxi">
                                                            <div class="benzema">
                                                                <div class="kens">
                                                                    <span class="kens-a">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos" >
                                                                    <span class="leso-a">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="benzema-x">
                                                                <div class="kens-x">
                                                                    <span class="kens-a-x">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos-x">
                                                                    <span class="leso-a-x">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                
                                                </div>
                                                                
                                            </div>                                                    
                                        </div>
                                    </a>
                                </div>
                            </div></div>
                            <!-- -------------------------------- -->
                            <div class="sw-slides-margin">
                                <div class="s145">
                                    <a class="cabb2" href="#ad">
                                        <div class="img-sw-slides">
                                            <span class="chenxi">
                                                <img src="<?php echo "{$urlFOLDERImageNFT101}5.webp"; ?>">
                                            </span>
                                        </div>
                                        <div class="text-sw-slides">
                                            <div class="kanta-s">
                                                <div class="clomnss">
                                                    <div class="yohan-sl">
                                                        <div class="ct-yohan-sl">
                                                            How to create an NFT on Johan
                                                        </div>
                                                        <div class="vantaxi">
                                                            <div class="benzema">
                                                                <div class="kens">
                                                                    <span class="kens-a">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos" >
                                                                    <span class="leso-a">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="benzema-x">
                                                                <div class="kens-x">
                                                                    <span class="kens-a-x">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos-x">
                                                                    <span class="leso-a-x">
                                                                        <div>0.03</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                
                                                </div>
                                                                
                                            </div>                                                    
                                        </div>
                                    </a>
                                </div>
                            </div></div>
                            <!-- -------------------------------- -->
                            <div class="sw-slides-margin">
                                <div class="s145">
                                    <a class="cabb2" href="#ad">
                                        <div class="img-sw-slides">
                                            <span class="chenxi">
                                                <img src="<?php echo "{$urlFOLDERImageNFT101}6.png"; ?>">
                                            </span>
                                        </div>
                                        <div class="text-sw-slides">
                                            <div class="kanta-s">
                                                <div class="clomnss">
                                                    <div class="yohan-sl">
                                                        <div class="ct-yohan-sl">
                                                            How to sell and using Johan?
                                                        </div>
                                                        <div class="vantaxi">
                                                            <div class="benzema">
                                                                <div class="kens">
                                                                    <span class="kens-a">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos" >
                                                                    <span class="leso-a">
                                                                        <div>0.03 VND</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="benzema-x">
                                                                <div class="kens-x">
                                                                    <span class="kens-a-x">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos-x">
                                                                    <span class="leso-a-x">
                                                                        <div>0.03 VND</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                
                                                </div>
                                                                
                                            </div>                                                    
                                        </div>
                                    </a>
                                </div>
                            </div></div>
                            <!-- -------------------------------- -->
                            <div class="sw-slides-margin">
                                <div class="s145">
                                    <a class="cabb2" href="#ad">
                                        <div class="img-sw-slides">
                                            <span class="chenxi">
                                                <img src="<?php echo "{$urlFOLDERImageNFT101}8.webp"; ?>">
                                            </span>
                                        </div>
                                        <div class="text-sw-slides">
                                            <div class="kanta-s">
                                                <div class="clomnss">
                                                    <div class="yohan-sl">
                                                        <div class="ct-yohan-sl">
                                                            Who is Johan?
                                                        </div>
                                                        <div class="vantaxi">
                                                            <div class="benzema">
                                                                <div class="kens">
                                                                    <span class="kens-a">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos" >
                                                                    <span class="leso-a">
                                                                        <div>0.03 VND</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="benzema-x">
                                                                <div class="kens-x">
                                                                    <span class="kens-a-x">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos-x">
                                                                    <span class="leso-a-x">
                                                                        <div>0.03 VND</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                
                                                </div>
                                                                
                                            </div>                                                    
                                        </div>
                                    </a>
                                </div>
                            </div></div>
                            <!-- -------------------------------- -->
                        </div>
                        
                    </div>
                    <button class="arr-st-3-right"><i class="bx bxs-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <!-- ==============================SECTION EIGHT================================== -->

        <!-- ==============================SECTION NINE================================== -->
        <div class="main-section-home three rowsx" id="ninesectionHome">
            <div class="xsa-section">
                <div class="xsa-bb-page">
                    <div class="title">
                        <h2>
                            Khám phá danh mục
                        </h2>
                        <div class="sic-after">

                        </div>
                    </div>
                </div>
                <div class="position-relactive-page-index-section-three">
                    <button class="arr-st-3-left"><i class="bx bxs-chevron-left"></i></button>
                    <div class="slide-st-3">
                        <div class="johanchinh">
                        <?php 
                            foreach($categories as $johan){
                                extract($johan, EXTR_PREFIX_ALL, 'category');
                                echo '
                                <div class="sw-slides-margin">
                                    <div class="s145">
                                        <a class="cabb2" href="#ad">
                                            <div class="img-sw-slides">
                                                <span class="chenxi">
                                                    <img src="'.$urlFOLDERImageCategories.''.$category_URLImage.'" alt="">
                                                </span>
                                            </div>
                                            <div class="text-sw-slides">
                                                <div class="kanta-s">
                                                    <div class="clomnss">
                                                        <div class="yohan-sl">
                                                            <div class="ct-yohan-sl">
                                                                '.$category_Name.'
                                                            </div>
                                                            <div class="clip-path-tick">
                                                                <div class="anna">
                                                                    <svg>
                                                                        <path d="M13.474 2.80108C14.2729 1.85822 15.7271 1.85822 16.526 2.80108L17.4886 3.9373C17.9785 4.51548 18.753 4.76715 19.4892 4.58733L20.9358 4.23394C22.1363 3.94069 23.3128 4.79547 23.4049 6.0278L23.5158 7.51286C23.5723 8.26854 24.051 8.92742 24.7522 9.21463L26.1303 9.77906C27.2739 10.2474 27.7233 11.6305 27.0734 12.6816L26.2903 13.9482C25.8918 14.5928 25.8918 15.4072 26.2903 16.0518L27.0734 17.3184C27.7233 18.3695 27.2739 19.7526 26.1303 20.2209L24.7522 20.7854C24.051 21.0726 23.5723 21.7315 23.5158 22.4871L23.4049 23.9722C23.3128 25.2045 22.1363 26.0593 20.9358 25.7661L19.4892 25.4127C18.753 25.2328 17.9785 25.4845 17.4886 26.0627L16.526 27.1989C15.7271 28.1418 14.2729 28.1418 13.474 27.1989L12.5114 26.0627C12.0215 25.4845 11.247 25.2328 10.5108 25.4127L9.06418 25.7661C7.86371 26.0593 6.6872 25.2045 6.59513 23.9722L6.48419 22.4871C6.42773 21.7315 5.94903 21.0726 5.24777 20.7854L3.86969 20.2209C2.72612 19.7526 2.27673 18.3695 2.9266 17.3184L3.70973 16.0518C4.10824 15.4072 4.10824 14.5928 3.70973 13.9482L2.9266 12.6816C2.27673 11.6305 2.72612 10.2474 3.86969 9.77906L5.24777 9.21463C5.94903 8.92742 6.42773 8.26854 6.48419 7.51286L6.59513 6.0278C6.6872 4.79547 7.86371 3.94069 9.06418 4.23394L10.5108 4.58733C11.247 4.76715 12.0215 4.51548 12.5114 3.9373L13.474 2.80108Z" class="sc-9c65691d-1 jiZrqV"></path>
                                                                        <path d="M13.5 17.625L10.875 15L10 15.875L13.5 19.375L21 11.875L20.125 11L13.5 17.625Z" fill="white" stroke="white"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vantaxi">
                                                            <div class="benzema">
                                                                <div class="kens">
                                                                    <span class="kens-a">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos">
                                                                    <span class="leso-a">
                                                                        <div>0.03 VND</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="benzema-x">
                                                                <div class="kens-x">
                                                                    <span class="kens-a-x">
                                                                        <div>FLOOR</div>
                                                                    </span>
                                                                </div>
                                                                <div class="leos-x">
                                                                    <span class="leso-a-x">
                                                                        <div>0.03 VND</div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- ---- -->
                                ';
                            }                  
                        ?>
                        </div>
                    </div>
                    <button class="arr-st-3-right"><i class="bx bxs-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <!-- ==============================SECTION NINE================================== -->
    </div>
    </div>

</main>
