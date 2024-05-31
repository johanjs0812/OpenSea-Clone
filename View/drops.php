<?php

$tongchieudaicuadata = count($databse);

$sotrang = ceil($tongchieudaicuadata / 10);

if (isset($_GET['pages'])) {
    $sobatdau = $_GET['pages'];
} else {
    $sobatdau = 1;
}
if ($sobatdau <= 0) {
    $sobatdau = $sotrang;
}
if ($sobatdau > $sotrang) {
    $sobatdau = 1;
}

?>

?>

<main id="main" class="main">

    <div class="main-trastion">
        <div class="main-grip-trastion-center">


            <!-- ============================SECTION ONE================================= -->
            <div id="main-section-one" class="main-section-one">
                <div class="drops-h1" style="margin:80px 0;">
                    <h1>
                        Drops
                    </h1>
                </div>
                <!-- ----------- -->

                <div class="banner-section-one" id="datlaiquabanner-drop">

                    <div class="trastion-js-banner" style="padding:0 30px; overflow:hidden;">

                        <div class="banner-container" style="border-radius: 24px;">
                            <span>
                                <img src="../View/img/<?php echo $result[0]['img'] ?>" alt="">
                            </span>


                            <div class="content-button-of-banner">
                                <div class="information-and-avt">
                                    <div class="avt-banner">
                                        <img src="../View/img/johan.jpg" alt="">
                                    </div>
                                    <div class="display-h1-banner">
                                        <h1><?php echo $result[0]['name'] ?></h1>
                                        <!-- <div class="svg">
                                        <svg>
                                            <path  fill="white" stroke="white" d="M13.474 2.80108C14.2729 1.85822 15.7271 1.85822 16.526 2.80108L17.4886 3.9373C17.9785 4.51548 18.753 4.76715 19.4892 4.58733L20.9358 4.23394C22.1363 3.94069 23.3128 4.79547 23.4049 6.0278L23.5158 7.51286C23.5723 8.26854 24.051 8.92742 24.7522 9.21463L26.1303 9.77906C27.2739 10.2474 27.7233 11.6305 27.0734 12.6816L26.2903 13.9482C25.8918 14.5928 25.8918 15.4072 26.2903 16.0518L27.0734 17.3184C27.7233 18.3695 27.2739 19.7526 26.1303 20.2209L24.7522 20.7854C24.051 21.0726 23.5723 21.7315 23.5158 22.4871L23.4049 23.9722C23.3128 25.2045 22.1363 26.0593 20.9358 25.7661L19.4892 25.4127C18.753 25.2328 17.9785 25.4845 17.4886 26.0627L16.526 27.1989C15.7271 28.1418 14.2729 28.1418 13.474 27.1989L12.5114 26.0627C12.0215 25.4845 11.247 25.2328 10.5108 25.4127L9.06418 25.7661C7.86371 26.0593 6.6872 25.2045 6.59513 23.9722L6.48419 22.4871C6.42773 21.7315 5.94903 21.0726 5.24777 20.7854L3.86969 20.2209C2.72612 19.7526 2.27673 18.3695 2.9266 17.3184L3.70973 16.0518C4.10824 15.4072 4.10824 14.5928 3.70973 13.9482L2.9266 12.6816C2.27673 11.6305 2.72612 10.2474 3.86969 9.77906L5.24777 9.21463C5.94903 8.92742 6.42773 8.26854 6.48419 7.51286L6.59513 6.0278C6.6872 4.79547 7.86371 3.94069 9.06418 4.23394L10.5108 4.58733C11.247 4.76715 12.0215 4.51548 12.5114 3.9373L13.474 2.80108Z" class="sc-9c65691d-1 jiZrqV"></path>
                                            <path d="M13.5 17.625L10.875 15L10 15.875L13.5 19.375L21 11.875L20.125 11L13.5 17.625Z" fill="black" stroke="black"></path>
                                        </svg>
                                    </div>    -->
                                    </div>

                                    <p class="po-588">By Johan FPT</p>
                                    <p class="po-366">Mức giá hiện tại: <?php echo $result[0]['price'] ?> <?php echo $result[0]['currency_unit'] ?></p>

                                    <div class="big-four-box-count-times">

                                        <div class="box-count-times">
                                            <p class="p-t1" id="day">
                                                4
                                            </p>
                                            <p class="p-b1">
                                                days
                                            </p>
                                        </div>

                                        <div class="box-count-times">
                                            <p class="p-t1" id="hour">
                                                4
                                            </p>
                                            <p class="p-b1">
                                                hour
                                            </p>
                                        </div>

                                        <div class="box-count-times">
                                            <p class="p-t1" id="minute">
                                                4
                                            </p>
                                            <p class="p-b1">
                                                mins
                                            </p>
                                        </div>

                                        <div class="box-count-times">
                                            <p class="p-t1" id="seconds">
                                                4
                                            </p>
                                            <p class="p-b1">
                                                secs
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="button-viewcourse">

                                    <button class="bell-box"><i class='bx bxs-bell'></i></button>

                                    <button>
                                        <p>Xem ra mắt</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- <button class="btn-left"><i class='bx bxs-chevron-left'></i></button>
                    <button class="btn-right"><i class='bx bxs-chevron-right' ></i></button> -->
                    </div>
                </div>
            </div>
            <!-- ============================SECTION ONE================================= -->
            <div class="main-section-two-drops">
                <div class="hatang-1">
                    <div class="bar-drops">
                        <div class="active">
                            Đang hoạt động & sắp tới
                        </div>

                        <div>
                            Đã qua
                        </div>
                    </div>

                    <div class="hr-bar-drops">
                        <div class="hr-hatang-1">
                            <div></div>
                        </div>
                    </div>

                    <div class="product-list">
                        <?php
                        foreach ($result as $pd) {
                            echo '
                                <div class="product-sp">
                                    <div class="imgss">
                                        <img src="../View/img/' . $pd['img'] . '" alt="">
                                    </div>
                                    <div class="show-in4-product-drops">
                                        <div class="name-product-drops">
                                            <div class="text-sddd">
                                                ' . $pd['name'] . '
                                            </div>
                                        </div>
                                        <div class="status-product-drops">
                                            <div class="xcnaodi">
                                                <div class="thanhhoa-s">
                                                    Minting
                                                </div>
                                                <div class="hoathan-ss5">
                                                    Now
                                                </div>
                                            </div>
                                            <div class="xcnaodi">
                                                <div class="thanhhoa-s">
                                                    Price
                                                </div>
                                                <div class="hoathan-ss5">
                                                    ' . $pd['price'] . ' ' . $pd['currency_unit'] . '
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        };

                        ?>
                        <!-- <div class="product-sp">
                        <div class="imgss">
                            <img src="../View/img/ad.avif" alt="">
                        </div>
                        <div class="show-in4-product-drops">
                            <div class="name-product-drops">
                                <div class="text-sddd">
                                    Louis-Auguste de France
                                </div>
                            </div>
                            <div class="status-product-drops">
                                <div class="xcnaodi">
                                    <div class="thanhhoa-s">
                                        Minting
                                    </div>
                                    <div class="hoathan-ss5">
                                        Now
                                    </div>
                                </div>
                                <div class="xcnaodi">
                                    <div class="thanhhoa-s">
                                        Price
                                    </div>
                                    <div class="hoathan-ss5">
                                        0.742 ETH
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                    <!-- --------------------------PAGITAION------------- -->
                    <style>
                        .pagination a {
                            color: black;
                            float: left;
                            padding: 8px 16px;
                            text-decoration: none;
                            transition: background-color .3s;
                        }

                        /* .pagination a.active {
                            background-color: dodgerblue;
                            color: white;
                            border-radius: 3px;
                        } */
                        .pagination a:hover {
                            background-color: #ddd;
                            border-radius: 3px;
                        }

                        a.bului {
                            font-size: 20px;
                        }
                    </style>
                    <div class="pagination" style="margin: 50px auto; width:max-content; display:flex; align-items:center;">
                        <a class="bului" href="index.php?act=drops&pages=<?php echo ($sobatdau - 1); ?>">&laquo;</a>
                        <?php
                        for ($i = 1; $i <= $sotrang; $i++) {
                        ?>
                            <a href="index.php?act=drops&pages=<?php echo $i ?>"><?php echo $i ?></a>
                        <?php
                        }
                        ?>
                        <a class="bului" href="index.php?act=drops&pages=<?php echo ($sobatdau + 1); ?>">&raquo;</a>
                    </div>

                    <!-- --------------------------PAGITAION------------- -->

                </div>
            </div>


        </div>
    </div>

</main>