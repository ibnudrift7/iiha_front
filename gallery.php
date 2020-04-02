<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>
	
    <!-- Bootstrap core CSS -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="asset/css/gallery.css" rel="stylesheet">
</head>
<body>

	<!-- start gallery	 -->
	<section class="block-gallery loc-gallery py-5">
		<div class="prelatife container">
			<div class="inner">
				<div class="top-galery text-center pb-5">
					<h1>Photo Gallery</h1>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				
				<div class="filter-gallery pb-5">
					<div class="row">
						<div class="col-md-6">
							<div class="box-searchs">
								<form method="get" action="">
									<div class="form-group prelatife">
										<button class="btn btn_unvisible"><i class="fa fa-search"></i></button>
										<input type="text" class="form-control" placeholder="Search Photo">
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-filter-sort">
								<form action="" class="form-inline">
									<label>Sort By</label>
									<select name="" id="" class="form-control">
										<option value="">Latest to Oldest</option>
										<option value="">Oldest to Latest</option>
										<option value="">A to Z</option>
										<option value="">Z to A</option>
									</select>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="list-data-gallery text-center">
					<div class="row">
						<?php for ($i=0; $i < 4; $i++) { ?>
						<div class="col-md-3">
							<div class="items">
								<div class="photo"><img src="https://placehold.it/172x172" alt="" class="img img-fluid d-block mx-auto"></div>
								<div class="info">
									<h4>The 4th IIHA CONNECT 2020</h4>
									<span class="dates">9 September 2020</span>
									<a href="" class="btn btn-link btn_view">view</a>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		</div>
	</section>
	<!-- end gallery	 -->
	

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>