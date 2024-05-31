<!------main-content-start-----------> 
	
<?php

    $gk = count($count);
    $van = count($fptpolytechnic);

    $tongsovip = ceil($gk / pageindex);

    if (isset($_GET['pages_collections'])) {
        $sobatdauofcollections = $_GET['pages_collections'];
    }
    else{
        $sobatdauofcollections = 1;
    }
    if ($sobatdauofcollections <= 0){
        $sobatdauofcollections = $tongsovip;
    }
    if ($sobatdauofcollections > $tongsovip){
        $sobatdauofcollections = 1;
    }

?>

<div class="main-content">

<div class="row">
   <div class="col-md-12">
      <div class="table-wrapper">
        
      <div class="table-title">
           <div class="row">
               <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                   <h2 class="ml-lg-2">Manage Collections</h2>
               </div>
               <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
               <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
               <i class="material-icons">&#xE147;</i>
               <span>Add New Collections</span>
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
               <th><span class="custom-checkbox">
               <input type="checkbox" id="selectAll">
               <label for="selectAll"></label></th>
                
                <div>
                    <th>Name</th>
                    <th>Floor</th>
                    <th>Volume</th>
                    <th>Author</th>
                    <th>Featured Image</th>
                    <th>Banner Image</th>
                    <th>Logo Image</th>
                    <th>Views</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </div>

                <th>Action</th>
            </tr>
         </thead>
         
<tbody>

         <?php

               foreach($fptpolytechnic as $b){
                   echo '        
                       <tr>

                           <th><span class="custom-checkbox">
                           <input type="checkbox" id="checkbox1" name="option[]" value="1">
                           <label for="checkbox1"></label></th>

                           <div>
                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['name'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:50px;">
                                        '.$b['Floor_Price'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:50px;">
                                        '.$b['Volume'].'
                                    </div>
                                </th>

                                
                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['aname'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['img_avt'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['img_bia'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['img_logo'].'
                                    </div>
                                </th>

                           </div>

                           <th>
                               <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
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
      <div class="hint-text">showing <b> <?php echo pageindex;?></b> out of <b><?php $bann = count($fptpolytechnic); echo $bann; ?></b></div>
        <ul class="pagination">
               
           <li class="page-item disabled"><a href="admin.php?actadmin=collections&pages_collections=<?php echo ($sobatdauofcollections - 1); ?>">Previous</a></li>
            <?php
                for ($i=1; $i <= $tongsovip; $i++){
                ?>
                   <li class="page-item "><a href="admin.php?actadmin=collections&pages_collections=<?php echo $i; ?>" class="page-link"> <?php echo $i; ?> </a></li>
                <?php 
                }  
                ?>
           <li class="page-item "><a href="admin.php?actadmin=collections&pages_collections=<?php echo ($sobatdauofcollections + 1); ?>" class="page-link">Next</a></li>
           
        </ul>
      </div>
      </div>
   </div>
           
<!----add-modal start--------->
<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Add Collections</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Floor Price</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <br>
                    <input type="radio" id="vehicle1" name="vehicle" value="Art">
                    <label for="vehicle1">Art</label><br>
                    <input type="radio" id="vehicle2" name="vehicle" value="Gamming">
                    <label for="vehicle2">Gamming</label><br>
                    <input type="radio" id="vehicle3" name="vehicle" value="PFPs">
                    <label for="vehicle3">PFPs</label><br>
                    <input type="radio" id="vehicle4" name="vehicle" value="Photography">
                    <label for="vehicle3">Photography</label>
                    <br>
                </div>
                <div class="form-group">
                    <label>Image Avatar</label>
                    <input type="file" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image Cover</label>
                    <input type="file" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image Logo</label>
                    <input type="file" class="form-control" required>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Add</button>
            </div>

        </div>
    </div>
</div>

      <!----edit-modal end--------->

  <!----edit-modal start--------->
<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Collections</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Floor Price</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <br>
                    <input type="radio" id="vehicle1" name="vehicle" value="Art">
                    <label for="vehicle1">Art</label><br>
                    <input type="radio" id="vehicle2" name="vehicle" value="Gamming">
                    <label for="vehicle2">Gamming</label><br>
                    <input type="radio" id="vehicle3" name="vehicle" value="PFPs">
                    <label for="vehicle3">PFPs</label><br>
                    <input type="radio" id="vehicle4" name="vehicle" value="Photography">
                    <label for="vehicle3">Photography</label>
                    <br>
                </div>
                <div class="form-group">
                    <label>Image Avatar</label>
                    <input type="file" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image Cover</label>
                    <input type="file" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image Logo</label>
                    <input type="file" class="form-control" required>
                </div>
            </div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-success">Save</button>
</div>
</div>
</div>
</div>

<!----edit-modal end--------->	   		   
<!----delete-modal start--------->

<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Delete Collections</h5>
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
<button type="button" class="btn btn-success">Delete</button>
</div>
</div>
</div>
</div>

      <!----edit-modal end--------->   
      
   
   

</div>
</div>

<!------main-content-end-----------> 