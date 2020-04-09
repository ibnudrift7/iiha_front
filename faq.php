<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FAQ</title>
	
    <!-- Bootstrap core CSS -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="asset/css/newsletter.css" rel="stylesheet">
    <link href="asset/css/faq.css" rel="stylesheet">
</head>
<body>

	<!-- start Faq -->
	<section class="block-privacy outer-block-faq py-5">
		<div class="prelatife container">
			<div class="inners">			
				<div class="inside mx-auto">

					<div class="tops text-center">
						<h1>FAQ</h1>
						<div class="py-1"></div>
						<p>How can we help you? Leave a message</p>
						<div class="py-1"></div>
					</div>
					<div class="py-3"></div>
					
					<div class="middle-contents py-4">
						
						<div class="row in-boxed-faq">
							<div class="col-md-3">
								<div class="left-contennts">
									<ul class="list-unstyled">
										<li><a href="#">Faq Category 1 <i class="fa fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">Sub Category 1</a></li>
												<li><a href="#">Sub Category 1</a></li>
											</ul>
										</li>
										<li><a href="#">Faq Category 2 <i class="fa fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">Sub Category 1</a></li>
												<li><a href="#">Sub Category 1</a></li>
											</ul>
										</li>
										<li><a href="#">Faq Category 3 <i class="fa fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">Sub Category 1</a></li>
												<li><a href="#">Sub Category 1</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-9">
								
								<div class="rights_content">
									<div id="accordion">
									 <?php for ($i=1; $i < 5; $i++) { ?>
									  <div class="card">
									    <div class="card-header" id="heading_<?php echo $i ?>">
									      <h5 class="mb-0">
									      	<i class="fa n_plus fa-plus" aria-hidden="true"></i>
									        <button class="btn btn-link check_faq_list" data-toggle="collapse" data-target="#collapse_<?php echo $i ?>" aria-expanded="true" aria-controls="collapse_<?php echo $i ?>">
									          Who can join AIHA <?php echo $i ?>?
									        </button>
									      </h5>
									    </div>

									    <div id="collapse_<?php echo $i ?>" class="collapse" aria-labelledby="heading_<?php echo $i ?>" data-parent="#accordion">
									      <div class="card-body">
									        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias quos eum vel necessitatibus, consequuntur obcaecati, ad distinctio quisquam id veritatis illum tenetur laborum qui consequatur nostrum doloremque ipsum sequi facilis.</p>
									        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eligendi facere dolorem, commodi, nihil similique eveniet officiis ullam aliquam, aliquid nostrum? At, aperiam similique inventore, sapiente magnam veritatis obcaecati. Suscipit!</p>
									      </div>
									    </div>
									  </div>
									  <?php } ?>
									</div>
								</div>
								<!-- end right -->

							</div>
						</div>

						<div class="clear"></div>
					</div>

					<div class="clearfix"></div>
				</div>


				<div class="clear"></div>
			</div>
		</div>
	</section>
	<!-- end Faq -->
	

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(function(){

			$('.left-contennts ul.list-unstyled > li').on('click', function(){
				$('.left-contennts ul.list-unstyled > li > ul').hide();
				$('.left-contennts ul.list-unstyled > li > a').find('i.fa').removeClass('fa-chevron-up').addClass('fa-chevron-down');

				var ncheck_lefts = $(this).children().find('i.fa');
				if ($(ncheck_lefts).hasClass('fa-chevron-down')) {
					$(ncheck_lefts).removeClass('fa-chevron-down').addClass('fa-chevron-up');
				}else{
					$(ncheck_lefts).removeClass('fa-chevron-up').addClass('fa-chevron-down');
				}

				$(this).find('ul').show();
			});


			$('button.check_faq_list').on('click', function(){
				$('.card > .card-header').find('i.fa.fa-minus').removeClass('fa-minus').addClass('fa-plus');

				var ncheck_simbol = $(this).parent().find('i.fa.n_plus');
				if ($(ncheck_simbol).hasClass('fa-plus')) {
					$(ncheck_simbol).removeClass('fa-plus').addClass('fa-minus');
				}
			});


		});
	</script>
</body>
</html>

