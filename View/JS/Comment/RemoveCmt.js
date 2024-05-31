$(document).ready(function(){
    function countCmt (){
        let countcmt = $('li.cmt-sl-jquery-count').length;
        console.log('soluongcmt', countcmt);
        $('#Cmt-length').text(countcmt);
    };
    countCmt();
    $(document).on('click', 'button.deleteCMT-ajax', function(e) {
        e.preventDefault();
        let CmtID = $(this).find("input[name='CmtID']").val();
        $.ajax({
            url: '../Model/RemoveCmt.php',
            type: 'POST', 
            data: {
                CmtID:CmtID,
            },
            success: function(rescmt){
                countCmt();
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
                        countCmt();
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