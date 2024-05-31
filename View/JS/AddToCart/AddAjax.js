$(document).ready(function(){

    function updateNumberCart(){
        let NumberAllNFT = $('.NumberAllNFT').length;
        if (NumberAllNFT == "" || NumberAllNFT == 0){
            $('#chisoindexcart').css('display', 'none');
            $('#countNFTinCart147').text('Chưa có NFT nào.');
            $('#clearall-pr').css('display', 'none');
        }
        if(NumberAllNFT != "" || NumberAllNFT > 0){
            $('#chisoindexcart').css('display', 'flex');
            $('#chisoindexcart').text(NumberAllNFT);
            $('#countNFTinCart147').text(NumberAllNFT + " " + 'Items');
            $('#clearall-pr').css('display', 'flex');
        }
        if (NumberAllNFT > 9){
            $('#chisoindexcart').text('9+');
        };
    }

    if (typeof window.RoudingtoVNDCart === 'function') {
        window.RoudingtoVNDCart();
    }
    
    $(".addcart-collections-Ajax").click(function(e){
        e.preventDefault();

        let NFTID = $(this).parent().parent().parent().find("input[name='NFTIDx']").val();
        let NFTName = $(this).parent().parent().parent().find("input[name='NFTNamex']").val();
        let NFTImage = $(this).parent().parent().parent().find("input[name='NFTImagex']").val();
        // let NFTPrice = $(this).parent().parent().parent().find("input[name='NFTPricex']").val();
        let NFTListedPrice = $(this).parent().parent().parent().find("input[name='NFTListedPricex']").val();
        console.log('gia niem yet', NFTListedPrice);

        $.ajax({
            url: '../Model/AddToCart.php',
            type: 'POST', 
            data: {
                NFTID: NFTID,
                NFTName: NFTName,
                NFTImage: NFTImage,
                NFTListedPrice : NFTListedPrice
            },
            success: function(response){
                alert(response);
                $.ajax({
                    url: '../Model/GetNFTinCart.php',
                    type: 'POST',
                    success: function(deldone){
                        $('#hopssss-add').html(deldone);
                        updateNumberCart();
                        if (typeof window.RoudingtoVNDCart === 'function'){
                            window.RoudingtoVNDCart();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        updateNumberCart();
                        if (typeof window.RoudingtoVNDCart === 'function'){
                            window.RoudingtoVNDCart();
                        }
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
                alert(textStatus, errorThrown);
                updateNumberCart();
                if (typeof window.RoudingtoVNDCart === 'function') {
                    window.RoudingtoVNDCart();
                }
            }
        });
    });
});
