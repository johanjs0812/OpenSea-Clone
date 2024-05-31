<?php 
    include "../View/CSS/login/logincss.php";
?>
	<section class="ftco-section">
			<div class="container" style="min-height: 85vh">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Login Johan</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-10">
						<div class="wrap d-md-flex">
							<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
								<div class="text w-100">
									<h2>Welcome to login</h2>
									<p>Don't have an account?</p>
									<a style="margin-top: 50px;" href="index.php?act=signup" class="btn btn-white btn-outline-white">Sign Up</a>
								</div>
							</div>
							<div class="login-wrap p-4 p-lg-5">
								<div class="d-flex">
									<div class="w-100">
										<h3 class="mb-4" style="font-weight: bold;">Sign In</h3>
									</div>
									<div class="w-100">
										<p class="social-media d-flex justify-content-end">
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
										</p>
									</div>
								</div>

								<form action="" class="signin-form" id="Signin-222" method="POST">
									<div class="form-group mb-3">
										<label class="label" for="name">Username</label>
										<input type="text" class="form-control" name="Username222" placeholder="Username222" required>
									</div>
									<div class="form-group mb-3">
										<label class="label" for="password">Password</label>
										<input type="password" name="Password222" class="form-control" placeholder="Password222" required>
									</div>
									<div class="form-group">
										<input type="submit" name="Login222" class="form-control btn btn-primary submit px-3" value="Sign In">
									</div>
									<div class="form-group d-md-flex">
										<div class="w-50 text-left">
											<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
												<input name="renmember_login" type="checkbox">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="w-50 text-md-right">
											<a href="#">Forgot Password</a>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>