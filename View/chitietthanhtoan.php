<?php ?>

<?php

    if (isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)) {
        $getorderInf = getorderInf($_SESSION['iddh']);
        if (count($getorderInf)>0){
?>

    <div class="phongnha">
        <div  class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body ">
                        <div style="font-size: 30px;" class="text-right"><i class='bx bx-x'></i></div>
                        
                        <div class="px-4 py-5" >

                            <h5 style="font-size:25px; font-weight:600;" class="text-uppercase"><?= $getorderInf[0]['fullname_user'] ?></h5>

                            <h4 class="mt-5 theme-color mb-5">Thanks for your order</h4>

                            <p style="margin-top:50px;" class="theme-color">Payment Summary</p>

                            <div class="mb-3">
                                <hr class="new1">
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Mã đơn hàng</span>
                                <span class="text-muted"><?= $getorderInf[0]['code_order'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Name product</span>
                                <span class="text-muted"><?= $getorderInf[0]['code_order'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Customer</span>
                               
                                <?php 
                                 
                                    $vanvanhuy = showJ($_SESSION['iddh']);

                                    if ((isset($_SESSION['cartcollections']))&&(count($_SESSION['cartcollections']))) {
                                        foreach ($vanvanhuy as $item){
                                            echo '
                                                <span class="text-muted">'.$item['ten'].'</span>
                                            ';
                                        }
                                    }
                                ?>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Email</span>
                                <span class="text-muted"><?= $getorderInf[0]['email'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Address</span>
                                <span class="text-muted"><?= $getorderInf[0]['address'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">State</span>
                                <span class="text-muted"><?= $getorderInf[0]['state'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Zip code</span>
                                <span class="text-muted"><?= $getorderInf[0]['zip_code'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Name on cart</span>
                                <span class="text-muted"><?= $getorderInf[0]['name_on_cart'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">cart number</span>
                                <span class="text-muted"><?= $getorderInf[0]['cart_number'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Exp month</span>
                                <span class="text-muted"><?= $getorderInf[0]['exp_month'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Exp year</span>
                                <span class="text-muted"><?= $getorderInf[0]['exp_year'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Cvv</span>
                                <span class="text-muted"><?= $getorderInf[0]['CVV'] ?></span>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span class="font-weight-bold todam">Ether Chair</span>
                                <span class="text-muted">$1750.00</span>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-3">
                                <span class="font-weight-bold todam">Total</span>
                                <span class="font-weight-bold theme-color">$2125.00</span>
                            </div>

                            <div class="text-center mt-5" style="margin-top: 20px;">
                                <button class="btn btn-primary ">I understand</button>
                            </div>                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

}

    }
    else{
        echo 'Giỏ hàng rỗng!';
    }

?>

<style>

    
    .text-right{
        text-align: right;
    }

    .todam{
        font-weight: bold;
    }

    .text-center{
        text-align: center;
    }

    .d-flex{
        display: flex;
        margin: 10px 0;
    }

    .justify-content-between{
        justify-content: space-between;
    }

    .phongnha{
        /* background-color: #5165ff; */
        margin-top: 80px;
        margin-bottom: 80px;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .modal-body {
        min-width: 500px;
        padding: 30px;
        background-color: #fff;
        border-color: #fff;
    }


    .close {
        color: #000;
        cursor: pointer;
    }

    .close:hover {
        color: #000;
    }

    .theme-color{

        color: #004cb9;
    }
    hr.new1 {
        border-top: 2px dashed black;
        margin: 0.4rem 0;
    }


    .btn-primary {
        width: 100%;
        color: #fff;
        background-color: #004cb9;
        border-color: #004cb9;
        padding: 12px;
        padding-right: 30px;
        padding-left: 30px;
        border-radius: 1px;
        font-size: 17px;
    }


    .btn-primary:hover {
        color: #fff;
        background-color: #004cb9;
        border-color: #004cb9;
        padding: 12px;
        padding-right: 30px;
        padding-left: 30px;
        border-radius: 1px;
        font-size: 17px;
    }
</style>