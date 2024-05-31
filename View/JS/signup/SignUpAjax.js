$(document).ready(function(){
    $("#Registration123").on("submit", function(e){
        e.preventDefault();

        let username123 = $('input[name="Username123"]').val();
        if (username123.length > 50){
            alert('Tên của bạn quá 50 ký tự!');
            return;
        }
        let emailxxx = $('input[name="Email123"]').val();
        if (emailxxx.length > 255){
            alert('Email của bạn quá 255 ký tự!');
            return;
        }
        let email123 = $('input[name="Email123"]').val();
        const emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
        if (!emailRegex.test(email123)){
            alert('Email không hợp lệ!')
            return;
        }
        let passwordxxx = $('input[name="Password123"]').val();
        if (passwordxxx.length > 100){
            alert('Mật khẩu của bạn quá 100 ký tự!');
            return;
        }
        if (!$('.policyx123 input[type="checkbox"]').is(':checked')) {
            alert('Vui lòng chấp nhận tất cả các điều khoản và điều kiện.');
            return;
        }
        if ($('input[name="Password123"]').val() !== $('input[name="CFPassword123"]').val()) {
            alert('Mật khẩu nhập lại không khớp. Vui lòng thử lại.');
            return;
        }

        $.ajax({
            url: '../Model/signup.php',
            type: 'POST', 
            data: $(this).serialize(),
            success: function(response){
                console.log(response);
                let condition = 'Đăng ký thành công';
                let conditionWords = condition.split(' ');
                let allWordsMatch = true;
                for (let i = 0; i < conditionWords.length; i++) {
                    let word = conditionWords[i];
                    if (!response.includes(word)) {
                        allWordsMatch = false;
                        console.log(response);
                        break;
                    }
                }
                if(allWordsMatch){
                    window.location.href = 'index.php?act=login';
                    alert(response);
                }
                else{
                    alert(response);
                }              
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
                alert(textStatus, errorThrown);
            }
        });
    });
});