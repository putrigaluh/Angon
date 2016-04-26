<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>ShopFine: Category Grid</title>
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

<body>
	<div id="mainContainer" class="clearfix">
		<div class="container">
		
		
		<div class="span7">
					<div class="cart-accordain" id="cart-acc">

						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#estimate">
									<i class="icon-caret-right"></i>Keluhan Pelanggan
								</a>
							</div>
							<div id="estimate" class="accordion-body collapse in">
								<div class="accordion-inner">
									<form class="form-horizontal" action="<?= $this->config->base_url(); ?>ecomerce/produk" method="post">
									  <div class="control-group">
									  <div class="control-group">
									    <label class="control-label" for="inputpostCode">
									    	<strong>Nama</strong>
									    </label>
									    <div class="controls">
									      <input type="text" id="inputpostCode" >
									    </div>
									  </div>
									
									  <div class="control-group">
									    <label class="control-label" for="inputpostCode">
									    	<strong>Nomor Order</strong>
									    </label>
									    <div class="controls">
									      <input type="text" id="inputpostCode">
									    </div>
									  </div>
									   
									    <div class="control-group">
									    <label class="control-label" for="inputpostCode">
									    	<strong>Isi Keluhan</strong>
									    </label>
									    <div class="controls">
									      <textarea></textarea>
									    </div>
									  </div>

									   <div class="control-group">
									    <label class="control-label" for="inputpostCode">
									    	<strong>Upload Gambar</strong>
									    </label>
									    <div class="controls">
									      <input type="hidden" class="form-control" name="id_user" readonly="" value='<?php echo $this->session->userdata('id_user');?>'>
									      <?php echo form_upload('pic');?>
													</div>
									    </div>
									  </div>
									  <div class="control-group">
									    <div class="controls">
									      <?php echo
												form_submit('submit', 'Save', 'class="btn btn-primary"')
												?>
									    </div>
									  </div><!--end control-group-->
									  </div><!--end control-group-->
									</form>
								</div>
							</div>
						</div><!--end accordion-group-->
						</div>
		</div>	
	</div>
</body>


<!-- Mirrored from ahmedsaeed.me/shopfine/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:24 GMT -->
</html>