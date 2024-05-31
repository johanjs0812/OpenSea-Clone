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

    $(document).on('click', 'button.RemoveNFTCart', function(e) {
        e.preventDefault();

        let ParentX = $(this).closest('.parentClass-17-10');
        console.log(ParentX);
        let getIDNFT = ParentX.find('input[name="IDNFTd"]').val();
        let getIDCart = ParentX.find('input[name="IDCartd"]').val();

        console.log('idNandC', getIDNFT, getIDCart);

        $.ajax({
            url: '../Model/DeleteCart.php',
            type: 'POST', 
            data: {
                getIDNFT: getIDNFT,
                getIDCart : getIDCart
            },
            success: function(deldone){
                alert(deldone);
                $.ajax({
                    url: '../Model/GetNFTinCart.php',
                    type: 'POST',
                    success: function(deldone) {
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
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
            

    });

})
