$(document).ready(function(){

    $('.floorinChart1810').each(function() {
        let text = $(this).text();
        if (!isNaN(text)) {
            let number = Number(text);
            let formattedNumber = number.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});
            $(this).text(formattedNumber); 
        }
    });

    $('.volumeinChart1810').each(function() {
        let text = $(this).text();
        if (!isNaN(text)) {
            let number = Number(text);
            let formattedNumber = number.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});
            $(this).text(formattedNumber); 
        }
    });
// ===============================
    $('.RoundingtoVNDx14').each(function() {
        let text = $(this).text();
        if (!isNaN(text)) {
            let number = Number(text);
            let formattedNumber = number.toLocaleString('vi-VN', {style: 'currency', currency: 'VND'});
            $(this).text(formattedNumber);
            console.log(formattedNumber);
        }
    });

});
