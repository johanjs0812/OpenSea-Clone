// ================= START SHOW OR HIDE THE CART==========================/
$(document).ready(function(){

    const clickcart = $('div#checked-cart-header');
    const clicknotcart = $('#andi-x');
    const backdoor = $('div.backdoor');
    const body = $('#body');

    let hoatuongdiep = $('#uuphiencongai');
    hoatuongdiep.hide();

    let showgio = $('#hienlistmua');

    showgio.click(function() {
        hoatuongdiep.show();
        $('#andi-x').click(function(){
            hoatuongdiep.hide();
        });
    });

    // =================== END SHOW AND HIDE THE CART =================================

    clickcart.click(function() {
        $('div#uuphiencongai').show();
        backdoor.show();
        body.css('overflow', 'hidden');
    });

    clicknotcart.click(function() {
        $('div#uuphiencongai').hide();
        backdoor.hide();
        body.css('overflow', 'visible');
    });

    // ========================= START HIDE BUTTON CART OF NFT ==========================================
    // $('span.ListedPrice-trueorflase').each(function() {

    //     let checkListed = $(this).text().trim();
    //     let hidecart = $(this).parent().parent().parent().parent().find(".button-display-none-or-block").find(".button-blue-x.display-flex-user-umcp.align-item-center-umcp");
    //     console.log('xx', checkListed);
    //     if (checkListed && checkListed != ""){
    //         let newVal = checkListed + " " + "VND";
    //         $(this).text(newVal);
    //     }
    //     if (checkListed === "0 ₫"){
    //         $('.cohoanhunam').css('display', 'block');
    //         let falseP = "Chưa mở bán";
    //         $(this).text(falseP);
    //         $(this).css('color', 'red');
    //         hidecart.remove();  
    //     }

    // });
    
    // ========================= END HIDE BUTTON CART OF NFT ==========================================

    // ===============================COUNT NFT IN RESULT THE FILTER FUNCTION OF COLLECTIONS ==========================
    let rs =  $('.NFTofCollectionsShow').length;
    let news = rs + " " + "Kết quả";
    $('#NFTresultkq').text(news);

    // ===================COUNT NFT IN CART=======================

    let NumberAllNFT = $('.NumberAllNFT').length;
    if (NumberAllNFT == "" || NumberAllNFT == 0){
        $('#chisoindexcart').css('display', 'none');
        $('#countNFTinCart147').text('Chưa có NFT nào.');
        $('#clearall-pr').css('display', 'none');
    }
    if(NumberAllNFT != "" || NumberAllNFT > 0){
        $('#chisoindexcart').css('display', 'flex');
        $('#chisoindexcart').text(NumberAllNFT);
        $('#countNFTinCart147').text(NumberAllNFT + ' ' + 'Items');
        $('#clearall-pr').css('display', 'flex');
    }
    if (NumberAllNFT > 9){
        $('#chisoindexcart').text('9+');
    };

    // ================================ROUDING TO VND===================================

    $('.tatcagiatien').each(function(){
        let text = $(this).text();
        if (!isNaN(text)) {
            let number = Number(text);
            let formattedNumber = number.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});
            $(this).text(formattedNumber);
        }
    });

});
