<!------main-content-start----------->
<?php
    $countUserdata = count($countAllUser);
    $van = count($fptpolytechnic);

    $tongsovip = ceil($countUserdata / pageindex);

    if (isset($_GET['pages_user'])) {
        $sobatdauofuser = $_GET['pages_user'];
    }
    else{
        $sobatdauofuser = 1;
    }
    if ($sobatdauofuser <= 0){
        $sobatdauofuser = $tongsovip;
    }
    if ($sobatdauofuser > $tongsovip){
        $sobatdauofuser = 1;
    }
?>

<style>
    input[type='radio'] {
        transform: scale(0.4);
        width: 30px;
        margin-right: 50px;
    }
    .rolev{
        display: flex;
        align-items: center;
        justify-content: left;
    }
    .rolev p{
        display: flex;
        align-items: center;
        margin: 0;
        font-size: 16px;
    }


    .fileNameCover{
        display: inline-block;
        padding: 5px;
        border-radius: 5px;
        background-color: #f8f9fa;
        color: #333;
        font-size: 14px;
        line-height: 1.5;
        margin-top: 10px;
        color: blue;
        color: blue;
    }

    .fileNameAvt{
        display: inline-block;
        padding: 5px;
        border-radius: 5px;
        background-color: #f8f9fa;
        color: #333;
        font-size: 14px;
        line-height: 1.5;
        margin-top: 10px;
        color: blue;
    }

    input[type="file"].up {
       height: auto;
    }
</style>

<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title">
                <div class="row">
                    <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                        <h2 class="ml-lg-2">Manage User</h2>
                    </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Add New User</span>
                            </a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                                <i class="material-icons">&#xE15C;</i>
                                <span>Delete</span>
                            </a>
                        </div>
                    </div>
                </div>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </th>
                            <div>
                                <th>Name</th>
                                <th>PassWord</th>
                                <th>Email</th>
                                <th>Bank Name</th>
                                <th>Bank Account Number</th>
                                <th>Avata Image</th>
                                <th>Cover Image</th>
                                <th>Role</th>
                                <th>Bio</th>
                                <th>ID</th>
                            </div>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="UserList">
                    <?php
                        foreach($fptpolytechnic as $b){
                            extract($b, EXTR_PREFIX_ALL, 'Users');
                            echo '
                                <tr class="AllUserShow">
                                    <th><span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                    <label for="checkbox1"></label></th>

                                    <div class="maintainval">
                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-usernameval">
                                                '.$Users_username.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-pass">
                                                '.$Users_Password.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-email">
                                                '.$Users_Email.'
                                            </div>
                                        </th>

                                        
                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-bank">
                                                '.$Users_BankName.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-banum">
                                                '.$Users_BankAccountNumber.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-avt">
                                                '.$Users_AvatarImage.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-cv">
                                                '.$Users_CoverImage.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:100px;" class="tagdiv-role">
                                                '.$Users_Role.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:200px;" class="tagdiv-bio">
                                                '.$Users_Bio.'
                                            </div>
                                        </th>

                                        <th>
                                            <div style="overflow: hidden;
                                            text-overflow: ellipsis;
                                            text-align: left;
                                            white-space: nowrap;
                                            width:50px;" class="tagdiv-id">
                                                '.$Users_UserID.'
                                            </div>
                                        </th>
                                    </div>

                                    <th>
                                        <a href="#editEmployeeModal" class="edit JohaneditUser" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                        </a>
                                        <a href="#deleteEmployeeModal" class="delete JohandelUser" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                        </a>
                                    </th>
                                </tr>
                            '; 
                        };
                    ?>
                </tbody>             
            </table>
            
            <div class="clearfix">
                <div class="hint-text">showing <b class="NumberAllUserShowing"></b> out of <b><?php echo $countUserdata; ?></b></div>

                <ul class="pagination">
                    
                <li class="page-item disabled"><a href="admin.php?actadmin=user_author&pages_user=<?php echo ($sobatdauofuser - 1); ?>">Previous</a></li>
                    <?php
                        for ($i=1; $i <= $tongsovip; $i++){
                        ?>
                        <li class="page-item "><a href="admin.php?actadmin=user_author&pages_user=<?php echo $i; ?>" class="page-link"> <?php echo $i; ?> </a></li>
                        <?php 
                        }  
                        ?>
                <li class="page-item "><a href="admin.php?actadmin=user_author&pages_user=<?php echo ($sobatdauofuser + 1); ?>" class="page-link">Next</a></li>
                
                </ul>
            </div>
            </div>
        </div>              
        <!----add-modal start--------->
        <form method="POST" class="modal fade JohanaddUser" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="UserName012" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="emil" class="form-control" name="Email012" required>
                        </div>
                        <div class="form-group">
                            <label>PassWord</label>
                            <input type="password" class="form-control" name="Password012" required>
                        </div>
                        <div class="form-group">
                            <label>Bio</label>
                            <textarea class="form-control" name="Bio012"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Bank Name</label>
                            <input type="text" class="form-control" name="BankName012">
                        </div>
                        <div class="form-group">
                            <label>Bank Account Number</label>
                            <input type="number" class="form-control" name="BankAccNum012">
                        </div>
                        <div class="form-group">
                            <label>Avatar Image </label>
                            <input type="file" class="form-control" name="AvatarImg012">
                        </div>
                        <div class="form-group">
                            <label>Cover Image</label>
                            <input type="file" class="form-control" name="CoverImg012">
                        </div>
                        <div class="form-group rolev" id="Role" >
                            <p>User</p>
                            <input type="radio" class="form-control UserRadio" id="UserRadio" name="Role012" value="User">
                            <p>Admin</p>
                            <input type="radio" class="form-control AdminRadio" name="Role012" value="Admin">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" value="Cancel" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-success" id="NFTAddUser" name="submit012" value="Add">
                    </div>
                </div>
            </div>
        </form>
        <!----add-modal end--------->
        <!----edit-modal start---------> 
        <form class="modal fade JohanUpdateUser" tabindex="-1" id="editEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control up" name="Username012" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control up" name="Email0123" required>
                        </div>
                        <div class="form-group">
                            <label>PassWord</label>
                            <input type="password" class="form-control up" name="Password012" required>
                        </div>
                        <div class="form-group">
                            <label>Bio</label>
                            <textarea class="form-control up" name="Bio0123"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Bank Name</label>
                            <input type="text" class="form-control up" name="BankName012">
                        </div>
                        <div class="form-group">
                            <label>Bank Account Number</label>
                            <input type="number" class="form-control up" name="BankAccNum012">
                        </div>
                        <div class="form-group">
                            <label>Avatar Image </label>
                            <input type="file" class="form-control up" name="AvatarImg012">
                            <span class="fileNameAvt"></span>
                        </div>
                        <div class="form-group">
                            <label>Cover Image</label>
                            <input type="file" class="form-control up" name="CoverImg012">
                            <span class="fileNameCover"></span> 
                        </div>
                        <div class="form-group rolev" id="Role" >
                            <p>User</p>
                            <input type="radio" class="form-control UserRadio up" id="UserRadio" name="Role012" value="User">
                            <p>Admin</p>
                            <input type="radio" class="form-control AdminRadio up" name="Role012" value="Admin">
                        </div>
                        <input type="hidden" class="form-control up" name="UserID012" >
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" value="Cancel" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-success" id="NFTAddUser" name="submit012" value="Done">
                    </div>

                </div>
            </div>
        </form>
        <!----edit-modal end--------->	   		   
        <!----delete-modal start--------->
        <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Records</p>
                        <p class="text-warning"><small>this action Cannot be Undone,</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" id="JohanDelUser" class="btn btn-success">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!----edit-modal end--------->   
    </div>
</div>

<!------main-content-end-----------> 