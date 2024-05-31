$(document).ready(function(){
    $("#Signin-222").on("submit", function(e){
        e.preventDefault();
        
        let username222 = $('#Signin-222 input[name="Username222"]').val().trim();
        if (username222.length > 50){
            alert('Tên của bạn quá 50 ký tự!');
            return;
        } else if (username222.length === 0) {
            alert('Vui lòng nhập tên người dùng!');
            return;
        }

        let pass222xxx = $('#Signin-222 input[name="Password222"]').val().trim();
        if (pass222xxx.length > 100){
            alert('Mật khẩu của bạn quá 100 ký tự!');
            return;
        } else if (pass222xxx.length === 0) {
            alert('Vui lòng nhập mật khẩu!');
            return;
        }

        $.ajax({
            url: '../Model/login.php',
            type: 'POST', 
            data: $(this).serialize(),
            success: function(response){
                console.log(response);
                let condition = 'Đăng nhập thành công';
                let conditionWords = condition.split(' ');
                let allWordsMatch = true;
                for (let i = 0; i < conditionWords.length; i++) {
                    let word = conditionWords[i];
                    if (!response.includes(word)) {
                        allWordsMatch = false;
                        break;
                    }
                }
                if(allWordsMatch){
                    window.location.href = 'index.php?act=home';
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

    })
})