$(document).ready(function(){

    $('a.JohaneditUser').each(function(){
        $(this).on('click', function() {
            let ParentX = $(this).parent().parent();
            let getName = ParentX.children('th').children('.tagdiv-usernameval').text().trim();
            let getPass = ParentX.children('th').children('.tagdiv-pass').text().trim();
            let getEmail = ParentX.children('th').children('.tagdiv-email').text().trim();
            let getBankName = ParentX.children('th').children('.tagdiv-bank').text().trim();
            let getBANum = ParentX.children('th').children('.tagdiv-banum').text().trim();
            let getAvt = ParentX.children('th').children('.tagdiv-avt').text().trim();
            let getCover = ParentX.children('th').children('.tagdiv-cv').text().trim();
            let getRole = ParentX.children('th').children('.tagdiv-role').text().trim();
            let getBio = ParentX.children('th').children('.tagdiv-bio').text().trim();
            let getID = ParentX.children('th').children('.tagdiv-id').text().trim();

            // console.log('get',getAvt, getBANum, getBankName, getBio, getName, getCover, getPass, getRole, getEmail, getID);

            $('form.JohanUpdateUser input.up').eq(0).val(getName);
            $('form.JohanUpdateUser input.up').eq(1).val(getEmail);
            $('form.JohanUpdateUser input.up').eq(2).val(getPass);
            $('form.JohanUpdateUser input.up').eq(3).val(getBio);
            $('form.JohanUpdateUser input.up').eq(4).val(getBankName);
            $('form.JohanUpdateUser input.up').eq(5).val(getBANum);

            if (getAvt == ""){
                $('form.JohanUpdateUser span.fileNameAvt').eq(0).text('Chưa có ảnh');
                $('form.JohanUpdateUser span.fileNameAvt').css('color', 'red');
            }
            else{
                $('form.JohanUpdateUser span.fileNameAvt').eq(0).text("Ảnh hiện tại: " + getAvt);
            }
            if (getCover == ""){
                $('form.JohanUpdateUser span.fileNameCover').eq(0).text('Chưa có ảnh');
                $('form.JohanUpdateUser span.fileNameCover').css('color', 'red');
            }
            else{
                $('form.JohanUpdateUser span.fileNameCover').eq(0).text("Ảnh hiện tại: " + getCover);
            }
           
            $('form.JohanUpdateUser input.up[type="radio"]').eq(0).val(getRole);
            $('form.JohanUpdateUser input.up[type="hidden"]').eq(0).val(getID);
    
            console.log('full', 
                $('form.JohanUpdateUser .up').eq(0).val(),
                $('form.JohanUpdateUser .up').eq(1).val(),
                $('form.JohanUpdateUser .up').eq(2).val(),
                $('form.JohanUpdateUser .up').eq(3).val(),
                $('form.JohanUpdateUser .up[type="file"]').eq(0).val(),
                $('form.JohanUpdateUser .up[type="file"]').eq(1).val(),
                $('form.JohanUpdateUser .up[type="radio"]').eq(0).val(),
                $('form.JohanUpdateUser input.up[type="hidden"]').eq(0).val()  
            )

        });
    });
    // =============================================================
    $(".JohanUpdateUser").on("submit", function(e){
        e.preventDefault();

        let UserName = $('input[name="Username012"]').val();
        console.log(UserName);
        if (UserName && UserName.length > 50){
            alert('Tên dài quá 50 ký tự!');
            return;
        }
        console.log('Name', UserName);

        let Email = $('input[name="Email0123"]').val();
        console.log('Mail', Email);
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

        let Bio = $('textarea[name="Bio0123"]').val();
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
            url: '../Model/UpdateUser.php',
            type: 'POST', 
            data: formData,
            processData: false,
            contentType: false, 
            success: function(result){
                console.log(result);
                let condition = 'Đã cập nhật thông tin thành công!';
                let conditionWords = condition.split(' ');
                let allWordsMatch = true;
                for (let i = 0; i < conditionWords.length; i++) {
                    let word = conditionWords[i];
                    if (!result.includes(word)) {
                        allWordsMatch = false;
                        console.log(result);
                        break;
                    }
                }
                alert(result);
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
                alert(textStatus, errorThrown);
            }
        });
    });
});