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

		<!--begain header-->
	
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span12">
					<table class="table">
						<thead>
							<tr>
								<th>Image</th>
								<th class="desc">Nama Produk</th>
								<th>Jumlah</th>
								<th>Harga</th>
								<th>Total Harga</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $i = 1; ?>
						<?php foreach ($this->cart->contents() as $items): ?>
						<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
							<tr>
								<td>
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</td>
								<td class="desc">
									<h4><a href="#" class="invarseColor">
										<?php echo $items['name']; ?>
										</a></h4>
									<ul class="rating clearfix">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
									<ul class="unstyled">
										<?php 

										echo "<li>Stok Tersedia</li>";
										echo "<li>Deskripsi</li>";
										?>
									</ul>
								</td>
								<td class="quantity">
									<div class="input-prepend input-append">
										<button class="btn"><i class="icon-chevron-left"></i></button>
										
										<?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
										<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
										<p>
											<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
											<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
										<?php endforeach; ?>
										<?php endif; ?>
										<button class="btn"><i class="icon-chevron-right"></i></button>
										</p>
									</div>
								</td>
								<td class="sub-price">
									<h2><?php echo $this->cart->format_number($items['price']); ?></h2>
								</td>
								<td class="total-price">
									<h2>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></h2>
									
								</td>
								<td>
									<button class="btn btn-small" type="submit" data-title="Refresh" data-placement="top" data-toggle="tooltip"><i class="icon-refresh"></i></button>
									<button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip"><i class="icon-pencil"></i></button>
									<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/delete/<?php echo $items['rowid'] ?>"><button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip"><i class="icon-trash"></i></button></a>
								</td>
							</tr>
							<?php $i++; ?>
							<?php endforeach; ?>

							
						</tbody>
					</table>
				</div><!--end span12-->


				<div class="span7">
					<div class="cart-accordain" id="cart-acc">

						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#estimate">
									<i class="icon-caret-right"></i>Estimasi Ongkos Pengiriman 
								</a>
							</div>
							<div id="estimate" class="accordion-body collapse in">
								<div class="accordion-inner">
									<form class="form-horizontal">
									  <div class="control-group">
									    <div class="control-label">
									    	<strong>Provinsi</strong>
									    </div>
									    <div class="controls">
									      <select name="">
									      	<option value="">-- Pilih Provinsi --</option>
									      	<option value="">Country1</option>
									      	<option value="">Country2</option>
									      	<option value="">Country3</option>
									      	<option value="">Country4</option>
									      	<option value="">Country5</option>
									      	<option value="">Country6</option>
									      </select>
									    </div>
									  </div><!--end control-group-->
									  <div class="control-group">
									    <div class="control-label">
									    	<strong>Kota</strong>
									    </div>
									    <div class="controls">
									       <select name="">
								      		<option value="">-- Pilih Kota --</option>
											<?php
												foreach ($daftar_kota as $k) {
												 	echo "<option value='".$k->id_kota."'>".$k->nama_kota."</option>";
												 } 
											?>
								      </select>
									    </div>
									  </div><!--end control-group-->
									  <div class="control-group">
									    <label class="control-label" for="inputpostCode">
									    	<strong>Kodepos</strong>
									    </label>
									    <div class="controls">
									      <input type="text" id="inputpostCode" placeholder="Post Code...">
									    </div>
									  </div><!--end control-group-->
									  <div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary">Hitung Ongkir</button>
									    </div>
									  </div><!--end control-group-->
									</form>
								</div>
							</div>
						</div><!--end accordion-group-->

						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#discount-code">
									<i class="icon-caret-right"></i> Apply Discount Code
								</a>
							</div>
							<div id="discount-code" class="accordion-body collapse">
								<div class="accordion-inner">
									<form class="form-horizontal">
									  <div class="control-group">
									    <label class="control-label" for="inputDiscount">
									    	<strong>Discount Code</strong>
									    	</label>
									    <div class="controls">
									      <input type="text" id="inputDiscount" placeholder="Inter Discount Code...">
									    </div>
									  </div><!--end control-group-->
									  <div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary">Apply Coupon</button>
									    </div>
									  </div><!--end control-group-->
									</form>
								</div>
							</div>
						</div><!--end accordion-group-->

						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#gift-voucher">
									<i class="icon-caret-right"></i> Use Gift Voucher
								</a>
							</div>
							<div id="gift-voucher" class="accordion-body collapse">
								<div class="accordion-inner">
									<form class="form-horizontal">
									  <div class="control-group">
									    <label class="control-label" for="inputVoucher">
									    	<strong>Voucher Code</strong>
									    	</label>
									    <div class="controls">
									      <input type="text" id="inputVoucher" placeholder="Inter Voucher Code...">
									    </div>
									  </div><!--end control-group-->
									  <div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary">Apply Voucher </button>
									    </div>
									  </div><!--end control-group-->
									</form>
								</div>
							</div>
						</div><!--end accordion-group-->

					</div><!--end cart-accordain-->
				</div><!--end span7-->


				<div class="span5">
					<div class="cart-receipt">
						<table class="table table-receipt">
							<tr>
								<td class="alignRight">Sub Total</td>
								<td class="alignLeft">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
							</tr>
							<tr>
								<td class="alignRight">Ongkos Kirim</td>
								<td class="alignLeft">Rp 0</td>
							</tr>
							<tr>
								<td class="alignRight"><h2>Total</h2></td>
								<td class="alignLeft"><h2>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></h2></td>
							</tr>
							<?php form_close(); ?>
							<tr>
								<td class="alignRight"><a href="<?php echo base_url();?>ecomerce/produk"><button class="btn">Lanjutkan Belanja</button></a></td>
								<td class="alignLeft"><a href="<?php echo base_url();?>ecomerce/checkout"><button class="btn btn-primary">Checkout</button></a>
								</td>
							</tr>
						</table>
					</div>
				</div><!--end span5-->


			</div><!--end row-->

		</div><!--end conatiner-->


		<!--begain footer-->
		
		<!--end footer-->

	</div><!--end mainContainer-->


	<!-- Sidebar Widget
	================================================== -->
	<div class="switcher">
		<h3>Site Switcher</h3>
		<a class="Widget-toggle-link">+</a>

		<div class="switcher-content clearfix">
			<div class="layout-switch">
				<h4>Layout Style</h4>
				<div class="btn-group">
					<a id="wide-style" class="btn">Wide</a>
	  				<a id="boxed-style" class="btn">Boxed</a>
				</div>
			</div><!--end layout-switch-->

			<div class="color-switch clearfix">
				<h4>Color Style</h4>
				<a id="orange-color" class="color-switch-link">orange</a>
				<a id="blue-color" class="color-switch-link">blue</a>
				<a id="green-color" class="color-switch-link">green</a>
				<a id="brown-color" class="color-switch-link">brown</a>
				<a id="red-color" class="color-switch-link">red</a>
			</div><!--end color-switch-->

			<div class="pattern-switch">
				<h4>BG Pattern</h4>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/retina_wood.png);">retina_wood</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/bgnoise_lg.png);">bgnoise_lg</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/purty_wood.png);">purty_wood</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/irongrip.png);">irongrip</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/low_contrast_linen.png);">low_contrast_linen</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/tex2res5.png);">tex2res5</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/wood_pattern.png);">wood_pattern</a>
			</div><!--end pattern-switch-->

		</div><!--end switcher-content-->
	</div>
	<!-- End Sidebar Widget-->


	<!-- JS
	================================================== -->
	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
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
    
</body>


<!-- Mirrored from ahmedsaeed.me/shopfine/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:24 GMT -->
</html>