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
					<h1>The 4th IIHA CONNECT 2020</h1>	
					<p>9 September 2020</p>
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

						</div>
					</div>
				</div>

				<?php 
				$sub_arr = [
								[
									'pict'=>'gallery-1.jpg',
									'names'=>'24 April 2019',
									'type'=>'0',
								],
								[
									'pict'=>'gallery-2.jpg',
									'names'=>'24 April 2019',
									'type'=>'1',
								],
								[
									'pict'=>'gallery-3.jpg',
									'names'=>'24 April 2019',
									'type'=>'0',
								],
								[
									'pict'=>'gallery-4.jpg',
									'names'=>'24 April 2019',
									'type'=>'1',
								],
								[
									'pict'=>'gallery-5.jpg',
									'names'=>'24 April 2019',
									'type'=>'0',
								],
								[
									'pict'=>'gallery-6.jpg',
									'names'=>'24 April 2019',
									'type'=>'0',
								],
								[
									'pict'=>'gallery-7.jpg',
									'names'=>'24 April 2019',
									'type'=>'0',
								],
								[
									'pict'=>'gallery-8.jpg',
									'names'=>'24 April 2019',
									'type'=>'0',
								],
								[
									'pict'=>'gallery-9.jpg',
									'names'=>'24 April 2019',
									'type'=>'1',
								],
								
							];
				?>
				<div class="list-data-gallery sub-data grid">
					<!-- <div class="grid-sizer"></div> -->
					<?php foreach ($sub_arr as $key => $value): ?>
						<div class="grid-item <?php if ($value['type'] == "1"): ?>grid-item--width2 grid-item--height2<?php endif ?>">
							<div class="picture prelatife mb-2">
								<img src="images/gallery/<?php echo $value['pict'] ?>" alt="" class="img img-fluid">
								<div class="show_info">
									<div class="inner-texts">
										<h3>24 April 2019</h3>
										<a href="#" class="btn btn_view white">view</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<script type="text/javascript">
		$(function(){

			$('.grid').isotope({
				layoutMode: 'fitRows',
				itemSelector: '.grid-item',
				percentPosition: true,
				fitRows: {
					gutter: 10
				}
			});

			$('.grid-item .picture').on('mouseenter', function(){
				$(this).find('.show_info').show();
			});
			$('.grid-item .picture').on('mouseleave', function(){
				$(this).find('.show_info').hide();
			});

		});
	</script>
</body>
</html>