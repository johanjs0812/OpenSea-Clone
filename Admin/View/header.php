<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Johan</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../View/css/bootstrap.min.css">
	<!----css3---->
	<link rel="stylesheet" href="../View/css/custom.css">
			
	<!--google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

	<!--google material icon-->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

	<!--=============== FAVICON ===============-->
	<link rel="shortcut icon" href="../../View/img/logo.jpg" type="image/x-icon">

	<!--=============== BOXICONS ===============-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

	<style>
		.top-navbar{
			background-color: rgb(24, 104, 183);
		}
		.navbar{
			background-color: rgb(24, 104, 183);
		}
		.breadcrumb .breadcrumb-item a {
			color: #dcdcdc;
		}
		.breadcrumb-item.active{
			color: #dcdcdc;
		}

		input[type="search"]{
			background-color: rgb(32, 129, 226);
		}

		.xp-searchbar .btn{
			background-color: rgb(32, 129, 226);
		}
		.form-control{
			color: black;
		}
		.xp-user-live{
			background-color: #00ff00;
		}
		.table-title{
			background-color: rgb(24, 104, 183);
		}
		.footer{
			background-color: rgb(24, 104, 183);
		}
		.btn-danger{
			background-color: red;
		}

		.form-control::placeholder{
			color: #dcdcdc;
		}

		.background-mer{
			background-color: rgba(255, 255, 255, 0.231);
		}

		.xp-menubar{
			background-color: rgba(255, 255, 255, 0.231);
		}
	</style>

	<script src="../View/js/jquery-3.3.1.slim.min.js"></script>
	<script src="../View/js/popper.min.js"></script>
	<script src="../View/js/bootstrap.min.js"></script>
	<script src="../View/js/jquery-3.3.1.min.js"></script>
	
	<!-- ========================CRUD USER============================= -->
	<script src="../View/js/UserFunction/createUser.js"></script>
	<script src="../View/js/UserFunction/UpdateUser.js"></script>
	<script src="../View/js/UserFunction/DeleteUser.js"></script>

	<!-- ======================CRUD COLLECTIONS================================ -->
	
  </head>

			
  <body>

<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <a href="admin.php"><h3 style="display: flex; align-items:center;"><img src="../View/img/logo.jpg" class="img-fluid" style="border-radius: 50%;"><span style="text-transform:none; font-weight:bolder; font-size:25px;">Johan</span></h3></a>
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  </li>
		  
		  <!-- <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">aspect_ratio</i>Layouts
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li><a href="#">layout 1</a></li>
			 <li><a href="#">layout 2</a></li>
			 <li><a href="#">layout 3</a></li>
		  </ul>
		  </li> -->
		  
		<!-- <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">apps</i>widgets
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="#">Apps 1</a></li>
			 <li><a href="#">Apps 2</a></li>
			 <li><a href="#">Apps 3</a></li>
		  </ul>
		</li> -->
		  
		<li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">equalizer</i>charts
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="#">Volume</a></li>
			 <li><a href="#">Interaction</a></li>
			 <!-- <li><a href="#">Pages 3</a></li> -->
		  </ul>
		</li>
		  
		  
		   <!-- <li class="dropdown">
		  <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">extension</i>UI Element
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu4">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li> -->
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">border_color</i>forms
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu5">
		     <li><a href="admin.php?actadmin=user_author">Users</a></li>
			 <li><a href="admin.php?actadmin=collections">Collections</a></li>
			 <li><a href="admin.php?actadmin=products">NFTs</a></li>
			 <li><a href="admin.php?actadmin=products">Comments</a></li>
			 <li><a href="admin.php?actadmin=products">Orders</a></li>
			 <li><a href="admin.php?actadmin=products">notifications</a></li>
			 <li><a href="admin.php?actadmin=products">SupportTickets</a></li>
			 <li><a href="admin.php?actadmin=products">Categories</a></li>
		  </ul>
		  </li>
		  
		  <!-- <li class="dropdown">
		  <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">grid_on</i>tables
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu6">
		     <li><a href="#">table 1</a></li>
			 <li><a href="#">table 2</a></li>
			 <li><a href="#">table 3</a></li>
		  </ul>
		  </li> -->
		  
		  
		  <!-- <li class="dropdown">
		  <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">content_copy</i>Pages
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu7">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li> -->
		  
		   
		  <li class="">
		  <a href="#" class=""><i class="material-icons">date_range</i>copy </a>
		  </li>
		  <li class="">
		  <a href="#" class=""><i class="material-icons">library_books</i>calender </a>
		  </li>
		
		</ul>
	 </div>
	 
   <!-------sidebar--design- close----------->

	     
         <!------top-navbar-start-----------> 
    <div id="content">
            
         <div class="top-navbar">
            <div class="xd-topbar">
                <div class="row">
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                       <div class="xp-menubar">
                           <span class="material-icons text-white">signal_cellular_alt</span>
                       </div>
                    </div>
                    
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                               <div class="input-group">
                                 <input type="search" class="form-control"
                                 placeholder="Search">
                                 <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon2">Go
                                    </button>
                                 </div>
                               </div>
                            </form>
                        </div>
                    </div>
                    
                    
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                           <nav class="navbar p-0">
                              <ul class="nav navbar-nav flex-row ml-auto">
                              <li class="dropdown nav-item active">
                                <a class="nav-link" href="#" data-toggle="dropdown">
                                 <span class="material-icons">notifications</span>
                                 <span class="notification">4</span>
                                </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                    <li><a href="#">You Have 4 New Messages</a></li>
                                 </ul>
                              </li>
                              
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span class="material-icons">question_answer</span>
                                </a>
                              </li>
                              
                              <li class="dropdown nav-item">
                                <a class="nav-link" href="#" data-toggle="dropdown">
									<?php
										if (isset($_SESSION['Role']) && $_SESSION['Role']!="") {
										echo '
												<img style="width:40px; border-radius:50%;" src="'.$urlFOLDERImageUser.''.$_SESSION['Logo'].'" alt="">
											';
										}
									?>
                                 <!-- <img src="../View/img/user.jpg" style="width:40px; border-radius:50%;"/> -->
                                 <span class="xp-user-live"></span>
                                </a>
                                 <ul class="dropdown-menu small-menu">
                                    <li><a href="#">
                                    <span class="material-icons">person_outline</span>
                                    Profile
                                    </a></li>
                                    <li><a href="#">
                                    <span class="material-icons">settings</span>
                                    Settings
                                    </a></li>
                                    <li><a href="#">
                                    <span class="material-icons">logout</span>
                                    Logout
                                    </a></li>
                                    
                                 </ul>
                              </li>
                              
                              
                              </ul>
                           </nav>
                        </div>
                    </div>
                    
                </div>
                
                <div class="xp-breadcrumbbar text-center">
                   <h4 class="page-title">Dashboard</h4>
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Vishweb</a></li>
                     <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
                   </ol>
                </div>
                
                
            </div>
         </div>

    <!------top-navbar-end-----------> 