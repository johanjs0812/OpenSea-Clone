$(document).ready(function(){
    function countCmtx(){
        let countcmt = $('li.cmt-sl-jquery-count').length;
        console.log('soluongcmt', countcmt);
        $('#Cmt-length').text(countcmt);
    };
    countCmtx();
    $(".btn-cmt-to-php-by-ajax").click(function(e){
        e.preventDefault();
        let contentCMT = $("input[name='contentCMT']").val();
        let NFTIDdetails = $("input[name='NFTIDdetails']").val();
        console.log('content', contentCMT);
        console.log('NFTIDdetails', NFTIDdetails);

        if (contentCMT == "") {
            alert('Bạn chưa nhập bình luận!');
            return;
        }

        $.ajax({
            url: '../Model/AddComment.php',
            type: 'POST', 
            data: {
                contentCMT:contentCMT,
                NFTIDdetails: NFTIDdetails
            },
            success: function(rescmt){
                countCmtx();
                console.log(rescmt);  
                if (rescmt == "Bạn chưa đăng nhập!") {
                    alert(rescmt);
                } 
                let NFTIDdetails = $("input[name='NFTIDdetails']").val();
                $.ajax({
                    url: '../Model/GetCMTinNFT.php',
                    type: 'POST',
                    data:{
                        NFTIDdetails: NFTIDdetails
                    },
                    success: function(rescmt){
                        $('#allCommentResAjax').html(rescmt);
                        countCmtx();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
                alert(textStatus, errorThrown);
            }
        });
    });

})