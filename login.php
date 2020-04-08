<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
	
    <!-- Bootstrap core CSS -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="asset/css/gallery.css" rel="stylesheet">
    <link href="asset/css/login.css" rel="stylesheet">
</head>
<body>

	<!-- start Login	 -->
	<div class="py-5"></div>
	<div class="prelatife container login-wrapper">
		
		<section class="outer-block-login-section back-white">
			<div class="inner-wrapper">
				<div class="row no-gutters">
					<div class="col-md-6 my-auto">
						<div class="full-banner"><img src="https://i.ibb.co/MCnV0nz/Rectangle-102.jpg" alt="" class="img-fluid w-100"></div>
					</div>
					<div class="col-md-6 prelatife">
						<div class="right-form px-3">
							<div class="tn_box_close"><a href="#"><img src="https://i.ibb.co/mB9xRyL/close-vector.png" alt="" class="img img-fluid"></a></div>

							<div class="block-inner-top py-5 p-3">
								<div class="tops_text mx-4">
									<h3>Login</h3>
									<p>Login with your IIHA Account to continue accessing our website</p>
								</div>
								<div class="card mx-4">
									<article class="card-body">
										<form method="post" action="#">
										    <div class="form-group">
										    	<label>Username</label>
										        <input name="" class="form-control" type="email" required="required">
										    </div> <!-- form-group// -->
										    <div class="form-group">
										    	<a class="float-right forgot" href="#">forgot password?</a>
										    	<label>Password</label>
										        <input class="form-control" type="password" required="required">
										        <?php if (isset($_GET['error']) && $_GET['error']): ?>
										        <div class="alert alert-danger mt-2" role="alert">
												  <small>Password or Username is incorrect</small>
												</div>
										        <?php endif ?>
										    </div> <!-- form-group// --> 
										    <div class="form-group mb-0">
										        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
										    </div> <!-- form-group// -->                                                           
										</form>
									</article>
								</div>
							</div>
							<div class="clear clearfix"></div>

							<?php if (!isset($_GET['error'])): ?>
							<div class="lines-grey-login my-3 mb-4">
							<?php else: ?>
							<div class="lines-grey-login my-2">
							<?php endif ?>
								<div class="n-lines"></div>								
								<div class="middles-text">
									<span>Or</span>
								</div>
							</div>
							<!-- <div class="py-2"></div> -->
							<div class="text-center texts-link-member">
								<a href="#" class="btn btn-link to_member">Become a Member</a>
							</div>

							<?php if (!isset($_GET['error'])): ?>
							<div class="py-2"></div>
							<?php endif ?>

							<div class="text-center texts-bottoms">
								<p>&copy; 2020 IHHA. All rights reserved. <br>
									By signing up, I agree to our <a href="#">Term of Service</a></p>
							</div>


							<div class="clear"></div>
						</div>
					</div>
				</div>		
			</div>
		</section>

	</div>
	<!-- end Login	 -->
	

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

