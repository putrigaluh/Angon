<html>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>ANGON</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/bootstrap.min.css" media="screen">
	<!-- jquery ui css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/jquery-ui-1.10.1.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/customize.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/style.css">
	<!-- flexslider css-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/flexslider.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/js/fancybox/jquery.fancybox.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/font-awesome-ie7.css">
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>ecom/images/favicon.html">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon.html">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon-72x72.html">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon-114x114.html">
</head>
<header>
			<div class="upperHeader">
				<div class="container">
					<ul class="pull-right inline">
						<li><a class="invarseColor" href="#">My Account</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">My Wish List (5)</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">Shoping Cart</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">Checkout</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="<?php echo base_url(); ?>ecomerce/produk/input_keluhan">Customer Care</a></li>
					</ul>
					<p>
					
					<?php if($this->session->userdata('is_logged_in') == true){ 
						echo "Selamat datang di ANGON, ". $this->session->userdata('username');
									echo "<h4><a href='". base_url()."logout'><i class='fa fa-lock'></i> Logout</a></h4>";
								}else{
									echo "<h4><a href='". base_url()."login'><i class='fa fa-lock'></i> Login</a></h4> Atau <a href='". base_url()."regis'><i class='fa fa-lock'></i> Buat Akun Baru</a>";
								}
								?> 
					</p>
				</div><!--end container-->
			</div><!--end upperHeader-->

			<div class="middleHeader">
				<div class="container">

					<div class="middleContainer clearfix">

					<div class="siteLogo pull-left">
						<h1><a href="<?php echo base_url();?>">Angon</a></h1>
					</div>

					<div class="pull-right">
						<form method="get" action="http://ahmedsaeed.me/shopfine/page" class="siteSearch">
							<div class="input-append">
								<input type="text" class="span2" id="appendedInputButton" placeholder="Search...">
								<button class="btn btn-primary" type="submit" name=""><i class="icon-search"></i></button>
							</div>
						</form>
					</div>

					<div class="pull-right">
						
						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    <i class="icon-shopping-cart"></i> 3 Items
							    <span class="caret"></span>
							</a>
							<div class="dropdown-menu cart-content pull-right">
								<table class="table-cart">
									<tbody>
									<tr>
										<td class="cart-product-info">
											<a href="#"><img src="<?php echo base_url(); ?>ecom/img/72x72.jpg" alt="product image"></a>
											<div class="cart-product-desc">
												<p><a class="invarseColor" href="#">Foliomania the designer portfolio brochure</a></p>
												<ul class="unstyled">
													<li>Available: Yes</li>
													<li>Color: Black</li>
												</ul>
											</div>
										</td>
										<td class="cart-product-setting">
											<p><strong>1x-$500.00</strong></p>
											<a href="#" class="remove-pro" data-toggle="tooltip" data-title="Delete"><i class="icon-trash"></i></a>
										</td>
									</tr>
									<tr>
										<td class="cart-product-info">
											<a href="#"><img src="<?php echo base_url(); ?>ecom/img/72x72.jpg" alt="product image"></a>
											<div class="cart-product-desc">
												<p><a class="invarseColor" href="#">Foliomania the designer portfolio brochure</a></p>
												<ul class="unstyled">
													<li>Available: Yes</li>
													<li>Color: Black</li>
												</ul>
											</div>
										</td>
										<td class="cart-product-setting">
											<p><strong>2x-$450.00</strong></p>
											<a href="#" class="remove-pro" data-toggle="tooltip" data-title="Delete"><i class="icon-trash"></i></a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td class="cart-product-info">
											<a href="#" class="btn btn-small">Vew cart</a>
											<a href="#" class="btn btn-small btn-primary">Checkout</a>
										</td>
										<td>
											<h3>TOTAL<br>$1,598.30</h3>
										</td>
									</tr>
								</tfoot>
								</table>
							</div>
						</div>
					</div><!--end pull-right-->

					</div><!--end middleCoontainer-->

				</div><!--end container-->
			</div><!--end middleHeader-->

			<div class="mainNav">
				<div class="container">
					<div class="navbar">
					      	
				      	<ul class="nav">
				      		<li class="active"><a href="#"><i class="icon-home"></i></a></li>
				      		<?php  foreach($kat as $row) { 
								 	
              						echo '<li><a href="#">'.
              								$row->kategori_produk.
              								'</a></li>';
					            }
					            ?>
				      		<!--
				      		<li>
				      			<a href="#">Pages &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="index-2.html"> <span>-</span> index1</a></li>
					      				<li><a href="index2.html"> <span>-</span> index2</a></li>
					      				<li><a href="account.html"> <span>-</span> account</a></li>
					      				<li><a href="login.html"> <span>-</span> login</a></li>
					      				<li><a href="register.html"> <span>-</span> register</a></li>
					      				<li><a href="cart.html"> <span>-</span> Cart</a></li>
					      				<li><a href="wishlist.html"> <span>-</span> wishlist</a></li>
					      				<li><a href="checkout.html"> <span>-</span> Checkout</a></li>
					      				<li><a href="compare.html"> <span>-</span> Compare</a></li>
					      				<li><a href="contact.html"> <span>-</span> Contact</a></li>
					      				<li><a href="search.html"> <span>-</span> Search</a></li>
					      				<li><a href="blog.html"> <span>-</span> blog</a></li>
					      				<li><a href="post.html"> <span>-</span> post</a></li>
					      				<li><a href="category_grid.html"> <span>-</span> category grid</a></li>
					      				<li><a href="category_list.html"> <span>-</span> category list</a></li>
					      				<li><a href="product_details.html"> <span>-</span> product details1</a></li>
					      				<li><a href="product_details2.html"> <span>-</span> product details2</a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li>
				      			<a href="#">Women &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"> <span>-</span> Dresses (2)</a></li>
					      				<li><a href="#"> <span>-</span> Jackets &amp; Coats (4)</a></li>
					      				<li>
					      					<a href="#"> <span>-</span> Skirts (0) <i class="icon-caret-right pull-right"></i></a>
					      					<div>
								      			<ul>
								      				<li><a href="#"> <span>-</span> Dresses (2)</a></li>
								      				<li><a href="#"> <span>-</span> Jackets &amp; Coats (4)</a></li>
								      				<li><a href="#"> <span>-</span> Skirts (0)</a></li>
								      				<li><a href="#"> <span>-</span> Suits &amp; Tailoring (82)</a></li>
								      				<li><a href="#"> <span>-</span> Tops (58)</a></li>
								      				<li><a href="#"> <span>-</span> Shoes (15)</a></li>
								      				<li><a href="#"> <span>-</span> Shorts (54) </a></li>
								      			</ul>
								      		</div>
					      				</li>
					      				<li><a href="#"> <span>-</span> Suits &amp; Tailoring (82)</a></li>
					      				<li><a href="#"> <span>-</span> Tops (58)</a></li>
					      				<li><a href="#"> <span>-</span> Shoes (15)</a></li>
					      				<li><a href="#"> <span>-</span> Shorts (54) </a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li>
				      			<a href="#">Men &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"> <span>-</span> Dresses (2)</a></li>
					      				<li><a href="#"> <span>-</span> Jackets &amp; Coats (4)</a></li>
					      				<li><a href="#"> <span>-</span> Skirts (0)</a></li>
					      				<li><a href="#"> <span>-</span> Suits &amp; Tailoring (82)</a></li>
					      				<li><a href="#"> <span>-</span> Tops (58)</a></li>
					      				<li><a href="#"> <span>-</span> Shoes (15)</a></li>
					      				<li><a href="#"> <span>-</span> Shorts (54) </a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li><a href="#">Children</a></li>
				      		<li><a href="#">FootWear</a></li>
				      		<li>
				      			<a href="#">Accessories &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"> <span>-</span> Dresses (2)</a></li>
					      				<li><a href="#"> <span>-</span> Jackets &amp; Coats (4)</a></li>
					      				<li><a href="#"> <span>-</span> Skirts (0)</a></li>
					      				<li><a href="#"> <span>-</span> Suits &amp; Tailoring (82)</a></li>
					      				<li><a href="#"> <span>-</span> Tops (58)</a></li>
					      				<li><a href="#"> <span>-</span> Shoes (15)</a></li>
					      				<li><a href="#"> <span>-</span> Shorts (54) </a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li><a href="#">OutLet</a></li>
				      		<li><a href="#">Designers</a></li>-->
				      	</ul><!--end nav-->

					</div>
				</div><!--end container-->
			</div><!--end mainNav-->
			
		</header>
		<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../../ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
    <!-- jQuery.Cookie -->
	<script src="<?php echo base_url(); ?>ecom/js/jquery.cookie.js"></script>
	<!-- bootstrap -->
    <script src="<?php echo base_url(); ?>ecom/js/bootstrap.min.js"></script>
    <!-- flexslider -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.flexslider-min.js"></script>
    <!-- cycle2 -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url(); ?>ecom/js/jquery.cycle2.carousel.min.js"></script>
    <!-- tweets -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.tweet.js"></script>
    <!-- fancybox -->
    <script src="<?php echo base_url(); ?>ecom/js/fancybox/jquery.fancybox.js"></script>
    <!-- custom function-->
    <script src="<?php echo base_url(); ?>ecom/js/custom.js"></script>
    </html>