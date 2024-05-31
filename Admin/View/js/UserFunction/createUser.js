$(document).ready(function(){

    $("input[type='radio']#UserRadio").prop('checked', true);

    $(".JohanaddUser").on("submit", function(e){
        e.preventDefault();

        let UserName = $('input[name="Username123"]').val();
        console.log(UserName);
        if (UserName && UserName.length > 50){
            alert('Tên dài quá 50 ký tự!');
            return;
        }

        let Email = $('input[name="Email012"]').val();
        console.log(Email);
        if (Email && Email.length > 255){
            alert('Email quá 255 ký tự!');
            return;
        }
        const emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
        if (!emailRegex.test(Email)){
            alert('Email không hợp lệ!')
            return;
        }

        let PassWord = $('input[name="Password012"]').val();
        console.log(PassWord);
        if (PassWord && PassWord.length > 100){
            alert('Mật khẩu quá 100 ký tự!');
            return;
        }

        let Bio = $('input[name="Bio012"]').val();
        console.log(Bio);
        if (Bio && Bio.length > 100){
            alert('Tiểu sử dài quá 100 ký tự!');
            return;
        }

        let BankName = $('input[name="BankName012"]').val();
        console.log(BankName);
        if (BankName && BankName.length > 50){
            alert('Tên dài quá 50 ký tự!');
            return;
        }

        let BankAccNum = $('input[name="BankAccNum012"]').val();
        console.log(BankAccNum);
        if (BankAccNum && BankAccNum.length > 20){
            alert('Số tài khoản dài quá 20 ký tự!');
            return;
        }
        else{
            BankAccNum = null;
        }
        const decimal = /^[-+]?[0-9]+\.[0-9]+$/;
        if (BankAccNum && BankAccNum.match(decimal)) {
            alert('Không nhập số thập phân!');
            return;
        }

        let formData = new FormData(this);

        $.ajax({
            url: '../Model/CreateUser.php',
            type: 'POST', 
            data: formData,
            processData: false,
            contentType: false, 
            success: function(response){
                console.log(response);
                let condition = 'Đã thêm người dùng thành công';
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
                alert(response);
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
                alert(textStatus, errorThrown);
            }
        });
    });
});