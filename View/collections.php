<!-- ===============================ROUNDING VND==================================== -->
<script src="../View/JS/Collections/RoudingtoVDN.js"></script>

<main class="main-user-collections-page">

    <!-- ==============================================START SECTION ONE======================================================= -->

    <section class="section-one-user-main-collections-page">

        <div class="information-user-main-collections-page" >
                
            <div class="background-user-umcp" style="height: 400px;">
                <img src="<?php echo $urlFOLDERImageCollec; ?><?php echo $getdataCollections['BannerImage']; ?>" alt="">
            </div>

            <div class="padding-32px" style="position: absolute; top: 260px;">
                <div class="avatar-umcp">
                    <img src="<?php echo $urlFOLDERImageCollec; ?><?php echo $getdataCollections['LogoImage']; ?>" alt="">
                </div>
            </div>

            <div class="reponsive-phabo-flex display-flex-user-umcp juscontent-space-beetween padding-32px" style="margin-top: 20px;">

                <div class="tranhoa-hathuong padding-top-40px width-62-phantram">

                    <div class="grid-rows-10px">

                        <div class="name-user-umcp" id="canhvanfpt">
                            <?php
                                echo $getdataCollections['Name'];
                            ?>
                        </div>

                        <div class="name-dap by-user-umcp width-100-phantram">
                            By <a href="#"><span class="font-weight-600">
                                    <?php
                                        echo $getdataCollections['username'];
                                    ?> 
                                </span> </a>
                        </div>

                        <div class="devide-elip-black-mini-and-test display-flex-user-umcp colmn-gap-15px width-100-phantram">

                            <div class="box-create">Items
                                <span class="font-weight-600">
                                    <?php
                                        $x = count($getNFTsfromeCollections);
                                        echo "{$x} NFTs";
                                    ?>
                                </span>
                            </div>
                            <div class="align-item-center-umcp"><div class="elip-mini-umcp"></div></div>
                            <div class="box-create">Created
                                <span class="font-weight-600">
                                    <?php echo $getdataCollections['CreatedAt']; ?>
                                </span>
                            </div>
                            <!-- <div class="align-item-center-umcp"><div class="elip-mini-umcp"></div></div> -->

                            <!-- <div class="box-create">Thu nhập<span class="font-weight-600">5%</span></div>
                            <div class="align-item-center-umcp"><div class="elip-mini-umcp"></div></div> -->

                            <!-- <div class="box-create">Chain <span class="font-weight-600">Polygon</span></div> -->

                        </div>

                        <div id="thanthoaihilapnhe">

                            <div class="describle-umcp-user width-100-phantram">
                            <?php 
                                if ($getdataCollections['Description'] == "") {
                                    echo "<a href='#'>{$getdataCollections['Name']}</a> Chưa cập nhật mô tả về bộ sưu tập này!";
                                }
                                else{
                                    echo $getdataCollections['Description'];
                                }
                            ?>
                            </div>
        
                            <div class="learn-more-umcp padding-top-10px-x2">
                                <a href="#">Tìm hiểu thêm về Avatar sưu tầm trên Reddit</a>.
                            </div>
        
                            <div class="padding-top-10px-x2">
                                <a href="#">Xem Điều khoản xem trước</a>.
                            </div> 

                        </div>
            

                    </div>

                    
                    <div id="doithienha" class="display-flex-user-umcp align-item-center-umcp">
<!-- 
                        <div id="doichu-olkp">Xem ít hơn</div>
                        
                        <div class="font-size-20px"> 
                            <i class='bx bx-chevron-up'></i>
                        </div> -->
                    </div>
                </div>

                <div class="that-1244 width-38-phantram display-flex-user-umcp flex-start juscontent-right">
                    <div class=" that-mini-1244 font-size-20px display-flex-user-umcp">
                        <i class='bx bxl-spotify'></i>
                        <div class="display-flex-user-umcp align-item-center-umcp"><div class="hr-1px-full-heigth"></div></div>
                        <i class='bx bx-star' ></i>
                        <i class='bx bx-share-alt' ></i>
                        <i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
    
            </div>

            <div class="this-2345 padding-32px display-flex-user-umcp colmn-gap-40px">

                <div class="width-this-mini">
                    <div class="x-tranha font-weight-600 font-size-20px">
                        <?php
                            if ($getdataCollections['Volume'] == 0){
                                echo "--"; 
                            }
                            else{
                                $formattedNumber = number_format($getdataCollections['Volume'], 0, ',', '.');
                                echo $formattedNumber . ' ₫';
                            }    
                        ?> 
                    </div>
                    <div class="y-tranha color-gray">
                        Total Volume
                    </div>
                </div>

                <div class="width-this-mini">
                    <div class="x-tranha font-weight-600 font-size-20px">
                        <?php                             
                            if ($getdataCollections['Floor'] == 0 || $getdataCollections['Floor'] == null){
                                echo "--"; 
                            }
                            else{
                                $formattedNumber = number_format($getdataCollections['Floor'], 0, ',', '.');
                                echo $formattedNumber . ' ₫';
                            }    
                        ?>
                    </div>
                    <div class="y-tranha color-gray">
                        Floor Price
                    </div>
                </div>

                <!-- <div class="width-this-mini">
                    <div class="x-tranha font-weight-600 font-size-20px">--</div>
                    <div class="y-tranha color-gray">
                        Best Offer
                    </div>
                </div> -->

                <!-- <div class="width-this-mini">
                    <div class="x-tranha font-weight-600 font-size-20px">2%</div>
                    <div class="y-tranha color-gray">
                        liệt kê</div>
                </div>

                <div class="width-this-mini">
                    <div class="x-tranha font-weight-600 font-size-20px">61.081</div>
                    <div class="y-tranha color-gray">
                        những chủ sở hữu</div>
                </div>

                <div class="width-this-mini">
                    <div class="x-tranha font-weight-600 font-size-20px">89%</div>
                    <div class="y-tranha color-gray">
                        chủ sở hữu duy nhất</div>
                </div> -->

            </div>
        

        </div>

    </section>

    <!-- ==============================================END SECTION ONE======================================================= -->

    <!-- ==============================================START SECTION TWO======================================================= -->

    <section class="section-two-user-main-collections-page">

        <div class="two-gamming padding-32px width-100-phantram">
            <div class="two-nav-shen font-weight-600 color-gray display-flex-user-umcp colmn-gap-40px">
                <div class="color-black">
                    Items
                </div>

                <div>
                    Ưu đãi
                </div>

                <div>
                    Phân tích
                </div>

                <div>
                    Hoạt động
                </div>
            </div>

            <div class="two-1444 position-relative height-1px background-color-gray width-100-phantram">
                <div class=" two-div-xd position-absolute height-2px background-color-black">

                </div>
            </div>
        </div>

        <!-- -------------------------------------------------- -->

        <div class="that-547-nav padding-32px">
            <div class="that-mini-547 display-flex-user-umcp width-100-phantram">

                <div class="fillter display-flex-user-umcp align-item-center-umcp border-radius-8px border-1px-solid-gray height-auto width-auto">
                    <i class='bx bx-filter font-size-30px padding-12px-18px '></i>
                    <div class="thanhoadanton color-black font-size-18px font-weight-600 padding-12px-18px">
                        Lọc
                    </div>
                </div>

                <div class="status-elip-on display-flex-user-umcp align-item-center-umcp height-auto">
                    <div class="display-flex-user-umcp align-item-center-umcp">
                        <div class="padding-12px-18px">
                            <div class="conghoa-green border-radius-50-phantram"></div>
                        </div>                      
                        <span class="text-green-conghoa color-black font-size-18px font-weight-600 "> Live</span>
                    </div>

                    <div class="wall-cach color-gray font-size-18px display-flex-user-umcp align-item-center-umcp"><span id="NFTresultkq"></span></div>
                </div>
                
                <div class="input-hoads display-flex-user-umcp align-item-center-umcp height-auto  border-radius-8px border-1px-solid-gray margin-left-12px">
                    <i class='bx bx-search-alt-2 padding-12px-18px font-size-20px color-gray'></i>
                    <input type="text" class="padding-12px-18px combo-input-none width-100-phantram" placeholder="Tìm kiểm sản phẩm">
                </div>

                <div class="by-order display-flex-user-umcp align-item-center-umcp height-auto border-radius-8px border-1px-solid-gray margin-left-12px">
                    <input aria-invalid="false" class="combo-input-none padding-12px-18px" value="Giá thấp đến cao" >
                    <div class="taoca-hdas display-flex-user-umcp juscontent-right">
                        <i class='bx bx-chevron-down padding-12px-18px font-size-30px'></i>
                    </div>                       
                </div>

                <div class="mode-view display-flex-user-umcp border-radius-8px border-1px-solid-gray color-gray margin-left-12px" >
                    <div class="display-flex-user-umcp align-item-center-umcp border-solid-right"><i class='bx bx-list-ul font-size-25px padding-12px-18px' ></i></div>
                    <div class="display-flex-user-umcp align-item-center-umcp border-solid-right"><i class='bx bx-grid font-size-25px padding-12px-18px' ></i></div>
                    <div class="display-flex-user-umcp align-item-center-umcp border-solid-right"><i class='bx bx-grid-alt font-size-25px padding-12px-18px' ></i></div>
                    <div class="display-flex-user-umcp align-item-center-umcp"><i class='bx bx-columns font-size-25px padding-12px-18px'></i></div>
                </div>

            </div>
        </div>


        <!-- ------------------------------------------- -->

        <div class="padding-32px display-flex-user-umcp">

            <!-- <div class="width-38-phantram" style="width: 21.5%;">

                <div>
                    <div class="display-flex-user-umcp juscontent-space-beetween">
                        <span class="font-weight-600">Status</span>
                        <i class='bx bx-chevron-up'></i>
                    </div>

                    <div>

                    </div>
                </div>

            </div> -->

            <div class="nam-tien-sg display-flex-user-umcp">
                <?php
                    $countx = count($getNFTsfromeCollections);
                    if ($countx > 0){
                        foreach($getNFTsfromeCollections as $k){      
                        extract($k, EXTR_PREFIX_ALL, 'NFTs');
                        if ($NFTs_ListedPrice == null || $NFTs_ListedPrice == 0) {
                            $NFTs_ListedPrice = "Chưa mở bán";
                        }
                        echo '<a href="index.php?act=NFTdetail&NFTIDdetails='.$NFTs_NFTID.'" style="color:black;">
                                <div id="AddToCartFromCollections" class="product-page-coll NFTofCollectionsShow">
                                    <div class="bachoa-hi-hi display-flex-user-umcp">
                                        <div class="overflow-hidden" style="height:150px;">
                                            <span>
                                                <img src="'.$urlFOLDERImageNFT.''.$NFTs_ImageURL.'" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="vutruvanvat" style="padding: 16px; display: flex; flex-direction: column; row-gap: 10px;"  >           
                                        <div class="lythanhoa-name font-weight-600 font-size-14px" style=" overflow: hidden;text-overflow: ellipsis;text-align: left;white-space: nowrap;">
                                            '.$NFTs_Name.'
                                        </div>
                                        <div class="lythuakien" style="display: flex; flex-direction: column; row-gap: 10px;" >
                                            <div class="cohoanhunam font-weight-600 font-size-14px notsell" >
                                                <span class="giatricuano ListedPrice-trueorflase">
                                                ' .$NFTs_ListedPrice.'
                                                </span>
                                                <span class="doinvicuano">    
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cohoanhunam color-gray font-size-14px" style:"display:none;">
                                        
                                        </div>
                                    </div>
                                    <div class="button-display-none-or-block">
                                        <div class="button-blue-x display-flex-user-umcp align-item-center-umcp">
                                            <div class="x-s-y" style="text-align:center">
                                                <input type="submit" style="color:white;font-weight:bold;" class="font-weight-600 combo-input-none buynow-procollec-29" value="Buy now">
                                            </div>
                                            <button type="submit" style="border:none;outline:none;background-color:rgb(0, 102, 255); border-left:1px solid white;" class="x-a-s main-cart-2247 addcart-collections-Ajax">
                                                <i class="bx bx-cart-alt font-size-30px cart-procoll-29"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="NFTImagex" value="'.$NFTs_ImageURL.'">
                                    <input type="hidden" name="NFTNamex" value="'.$NFTs_Name.'">
                                    <input type="hidden" name="NFTIDx" value="'.$NFTs_NFTID.'">
                                    <input type="hidden" name="NFTListedPricex" value="'.$NFTs_ListedPrice.'"
                                    </div>
                                </div>
                            </a>';
                        }
                    }
                    else{
                        echo "<div style='text-align: center;'><a href='#'>{$getdataCollections['username']}</a> Chưa thêm bất kỳ NFTs nào vào bộ sưu tập này!</div>";
                    }
                ?>
            </div> 
        </div>
    </section>
</main>