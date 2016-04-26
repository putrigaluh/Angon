

<body>

	<div id="mainContainer" class="clearfix">

		



		<div class="container">

			<div class="row">

				<div class="span12">
					<div class="account-list-outer">
							<div class="titleHeader clearfix">
							<h3>Ringkasan Pemesanan</h3>
							</div><!--end titleHeader--><!--end checkout-header-->

							<div class="checkout-content">
								<table class="table">
						
								<thead>
									<tr>
										<th>Image</th>
										<th class="desc">Nama Produk</th>
										<th>Jumlah</th>
										<th>Harga</th>
										<th>Total Harga</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
										</td>
										<td class="desc">
											<h4><a href="#" class="invarseColor">
												<?php echo $sum->id_transaksi; ?>
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
												
												
												<button class="btn"><i class="icon-chevron-right"></i></button>
												</p>
											</div>
										</td>
										<td class="sub-price">
											
										</td>
										<td class="total-price">
											
											
										</td>
									
									</tr>									
								</tbody>
							</table>
							</div>
					</div>
				</div><!--end span9-->

			</div><!--end row-->

		</div><!--end conatiner-->

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
