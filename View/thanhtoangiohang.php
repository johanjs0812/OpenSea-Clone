
<div class="container">

    <form action="index.php?act=chitietdonhang" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input name="fn_thanhtoan" type="text" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input name="email_thanhtoan" type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input name="address_thanhtoan" type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input class="city_thanhtoan" type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input class="state_thanhtoan" type="text" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input class="zipcode_thanhtoan" type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../View/img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input class="namecard_thanhtoan" type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input class="numbercard_thanhtoan" type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input class="exp_month" type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input class="exp_year" type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input class="cvv" type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="xacnhanthanhtoan" value="proceed to checkout" class="submit-btn">

    </form>

</div> 


<!-- ----------------------------------------------------------------XNN---------------------------------- -->
<div>
    <div></div>
    <div></div>
    <div></div>
</div>