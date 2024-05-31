$(document).ready(function(){

    $('a.JohandelUser').each(function(){
        $(this).on('click', function() {
            let ParentX = $(this).parent().parent();
            let getID = ParentX.children('th').children('.tagdiv-id').text().trim();

            console.log('id', getID);
            
            $('#JohanDelUser').off('click').on('click', function(e){
                e.preventDefault();
        
                $.ajax({
                    url: '../Model/DeleteUser.php',
                    type: 'POST', 
                    data: {
                        ID: getID
                    },
                    success: function(done){
                        console.log(done);
                        alert(done);

                        $.ajax({
                            url: '../Model/GetUsers.php',
                            type: 'POST',
                            success: function(newUsers) {
                                $('#UserList').html(newUsers);
                                $('b.NumberAllUserShowing').text($('.AllUserShow').length);
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }
                        });

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
                
            });
        });
    });
});
