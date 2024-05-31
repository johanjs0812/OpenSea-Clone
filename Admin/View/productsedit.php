<!------main-content-start-----------> 
	
<?php

    $gk = count($count);
    $van = count($fptpolytechnic);

    $tongsovip = ceil($gk / pageindex);

    if (isset($_GET['pages_products'])) {
        $sobatdauofproducts = $_GET['pages_products'];
    }
    else{
        $sobatdauofproducts = 1;
    }
    if ($sobatdauofproducts <= 0){
        $sobatdauofproducts = $tongsovip;
    }
    if ($sobatdauofproducts > $tongsovip){
        $sobatdauofproducts = 1;
    }
    
?>

<div class="main-content">

<div class="row">
   <div class="col-md-12">
      <div class="table-wrapper">
        
      <div class="table-title">
           <div class="row">
               <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                   <h2 class="ml-lg-2">Manage Products</h2>
               </div>
               <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
               <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
               <i class="material-icons">&#xE147;</i>
               <span>Add New Products</span>
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
                
                <div >
                    <th>Name</th>
                    <th>Price</th>
                    <th>Floor</th>
                    <th>Describle</th>
                    <th>Collections</th>
                    <th>Img</th>
                    <th>Link</th>
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
                                        '.$b['price'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:50px;">
                                        '.$b['floor'].'
                                    </div>
                                </th>

                                
                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['mota'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['cname'].'
                                    </div>
                                </th>   

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['img'].'
                                    </div>
                                </th>

                                <th>
                                    <div style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    text-align: left;
                                    white-space: nowrap;
                                    width:100px;">
                                        '.$b['link'].'
                                    </div>
                                </th>

                           </div>

                           <th class="editandremove">
                               <a href="#editEmployeeModal" johan="'.$b['id'].'" value="'.$b['id'].'" class="edit products" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                </a>
                                <a href="#deleteEmployeeModal" value="'.$b['id'].'" class="delete products" data-toggle="modal">
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
        <div class="hint-text">showing <b><?php $index = count($fptpolytechnic); echo $index; ?>
            </b> out of <b><?php $index = count($count); echo $index; ?></b>
        </div>
        <ul class="pagination">
               
           <li class="page-item disabled"><a href="admin.php?actadmin=products&pages_products=<?php echo ($sobatdauofproducts - 1); ?>">Previous</a></li>
            <?php
                for ($i=1; $i <= $tongsovip; $i++){
                ?>
                   <li class="page-item "><a href="admin.php?actadmin=products&pages_products=<?php echo $i; ?>" class="page-link"> <?php echo $i; ?> </a></li>
                <?php 
                }  
                ?>
           <li class="page-item "><a href="admin.php?actadmin=products&pages_products=<?php echo ($sobatdauofproducts + 1); ?>" class="page-link">Next</a></li>
           
        </ul>
      </div>
      </div>
   </div>
           
<!----add-modal start--------->
<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
   <h5 class="modal-title">Add Products</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
</div>      
        <form method="POST" action="admin.php?actadmin=products_add" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input name="NameProduct" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input name="PriceProduct" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Floor</label>
                    <input name="FloorProduct" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Currency Unit</label>
                    <br>
                    <input type="radio" id="vehicle1" name="CurrencyUnit" value="ETH">
                    <label for="vehicle1">ETH</label><br>
                    <input type="radio" id="vehicle2" name="CurrencyUnit" value="MATIC">
                    <label for="vehicle2">MATIC</label><br>
                    <br>
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <textarea name="describle" class="form-control" required></textarea>
                </div>
                    <div class="form-group">
                    <label>Link</label>
                    <input name="Link" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Collections</label>
                    <input name="collections" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input name="Images" type="file" class="form-control" required>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <input type="submit" name="addproducts" class="btn btn-success" value="Add">
            </div>
        </form>
</div>
</div>
</div>

      <!----edit-modal end--------->

  <!----edit-modal start--------->
<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="admin.php?actadmin=products_edit" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group" id="dinhdanhphpproducts">
                        <label>Định danh</label>
                        <input type="idProducts" id="idProducts" name="idProducts" class="form-control" readOnly>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="editNameProducts" name="editNameProducts" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="editPriceProducts" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Floor</label>
                        <input type="text" name="editFloorProducts" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Currency Unit</label>
                        <br>
                        <input type="radio" id="vehicle1" name="editcurrencyUnitProducts" value="ETH">
                        <label for="vehicle1">ETH</label><br>
                        <input type="radio" id="vehicle2" name="editcurrencyUnitProducts" value="MATIC">
                        <label for="vehicle2">MATIC</label><br>
                        <br>
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea class="form-control" name="editBioProducts" required></textarea>
                    </div>
                        <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="editLinkProducts" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Collections</label>
                        <input type="number" name="editCollectionsProducts" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input name="editImages" type="file" class="form-control" required>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="editproducts" id="saveeditproducts" value="Save" class="btn btn-success">
                </div>

            </form>

        </div>

    </div>
</div>

<!----edit-modal end--------->	   		   
<!----delete-modal start--------->

        <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Products</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Records</p>
                        <p class="text-warning"><small>this action Cannot be Undone,</small></p>
                    </div>

                    <form method="POST" action="admin.php?actadmin=products_delete" enctype="multipart/form-data">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="text" name="valuedeleteProducts" id="valuedeleteProducts" style="display:none;">
                            <input type="submit" name="deleteProducts" id="deleteProducts" value="Delete" class="btn btn-success">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!----edit-modal end--------->   

    </div>
</div>

<!-- <script>


        let checkValue = document.querySelectorAll('th.editandremove a.edit.products');
        let inner = document.getElementById('dinhdanhphpproducts');

        checkValue.forEach(function(e,i){

            e.addEventListener('click', function(){

                const love = e.parentElement;
                const checktuthan = love.children[0].getAttribute('johan');

                inner.innerHTML =
                `<label>Định danh</label>
                <input type="idProducts" id="idProducts" name="idProducts" class="form-control" value="${checktuthan}" disabled>`;

            });
        });


</script> -->

<!------main-content-end-----------> 