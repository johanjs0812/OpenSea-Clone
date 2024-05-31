<?php

    include "../View/cartadd.php";
    
        if (isset($_SESSION['cartcollections'])&&(is_array($_SESSION['cartcollections']))) {

            for ($i=0; $i < sizeof($_SESSION['cartcollections']); $i++) { 
            echo '
            <div id="'.$_SESSION['cartcollections'][$i][4].'" style="display:flex; align-items:center; margin-bottom:10px;">
                <div id="sethovervip" class="boxanh-ss" style="height: 50px; width:50px; overflow:hidden; border-radius:5px; margin-right:10px;">
                    <img src="'.$_SESSION['cartcollections'][$i][0].'" alt="" style="width:100%; height:100%;">
                </div>
                <div class="in4-sd">
                    <p class="x47">'.$_SESSION['cartcollections'][$i][1].'</p>
                    <p class="x45"></p>
                    <p class="x43">creator earning: <span>10</span>%</p>
                </div>
                <div class="pridsd">
                    <div class="xsss58">
                        <span class="tatcagiatien">'.$_SESSION['cartcollections'][$i][2].'</span>
                        <span>'.$_SESSION['cartcollections'][$i][3].'</span>
                        <div class="the-i" style="text-align: right;">
                            <a href="" data="'.$_SESSION['cartcollections'][$i][4].'"><i class="thungrac bx bx-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            ';
            }
        }    

?>