$(document).ready(function() {
    $('.ListedPrice-trueorflase').each(function() {
        let hidecart = $(this).parent().parent().parent().parent().find(".button-display-none-or-block").find(".button-blue-x.display-flex-user-umcp.align-item-center-umcp");
        let text = $(this).text();
        let johan = text.trim();
        console.log('x',johan);
        if (johan === "Chưa mở bán"){
            $('.cohoanhunam').css('display', 'block');
            let falseP = "Chưa mở bán";
            $(this).text(falseP);
            $(this).css('color', 'red');
            hidecart.remove();
        }
        else{
            let number = Number(johan);
            let formattedNumber = number.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});        
            $(this).text(formattedNumber);
        }

    });
});
