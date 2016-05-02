<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->

<body>

	<div id="mainContainer" class="clearfix">

		



		<div class="container">

			<div class="row">

				<div class="span9">
					<div class="account-list-outer">
						<div class="titleHeader clearfix">
							<h3>Konfirmasi Pembayaran</h3>
						</div><!--end titleHeader--><!--end checkout-header-->

						<div class="checkout-content">

							<form method="post" action="<?php echo base_url();?>ecomerce/konfirmasi_pembayaran/konfirm_pembayaran" class="form-horizontal">

								<div class="control-group ">
							    <label class="control-label" for="inputFirstName">Nomor Order : </label>
							    <div class="controls">
							      <input type="text" id="inputFirstName" name="id_transaksi" placeholder="25">
							      <!--<span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span>-->
							    </div>
							    
								</div><!--end control-group-->
								<div class="control-group ">
								    <label class="control-label" for="inputFirstName">Pilih Bank : <span class="text-error">*</span></label>
								    <div class="controls">
								    	<select class="form-control" name="selectbank" id="selectboxbank">
												<option value="">Pilih Bank</option>
								      			<?php foreach ($r as $rekening) { ?>
													<option value="<?php echo $rekening->id_rekening ?>"><?php echo $rekening->no_rekening.' a/n '.$rekening->nama_akun.' -- '.$rekening->nama_bank ?></option>
												<?php } ?>
												<option value="tambah">*Tambah No. Rekening</option>
										</select>
								    </div>
								</div><!--end control-group-->
								<div class="control-group tambah" style="display: none;">
								    <label class="control-label" for="inputFirstName">Nama Akun Bank : <span class="text-error">*</span></label>
								    <div class="controls">
								      <input type="text" id="inputFirstName" name="nama_akun" placeholder="Budi">
								      <!--<span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span>-->
								    </div>
								</div><!--end control-group-->
								<div class="control-group tambah" style="display: none;">
								    <label class="control-label" for="inputFirstName">Nama Bank : <span class="text-error">*</span></label>
								    <div class="controls">
								      <select class="form-control" name="nama_bank">
												<option value="">Pilih Bank</option>
												<option value="Bank Mandiri">Bank Mandiri</option>
												<option value="Bank Central Asia">Bank Central Asia</option>
												<option value="Bank Nasional Indonesia">Bank Nasional Indonesia</option>
												<option value="Bank Rakyat Indonesia">Bank Rakyat Indonesia</option>
											</select>
								    </div>
								</div>
								<div class="control-group tambah" style="display: none;">
								    <label class="control-label" for="inputFirstName">Nomor Rekening : <span class="text-error">*</span></label>
								    <div class="controls">
								      <input type="text" id="inputFirstName" name="no_rekening" placeholder="321234">
								      <!--<span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span>-->
								    </div>
								</div><!--end control-group-->
								
								<!--end control-group-->
								<div class="control-group" align="center">
							    <div class="controls">
								    <input type="submit" name="submit" class="btn btn-primary" value="Bayar">
							    </div>
								</div><!--end control-group-->

							</form>
						</div>
					</div>
				</div><!--end span9-->


				<div class="span3">
					<div class="titleHeader clearfix">
						<h3>Pesanan Saya</h3>
					</div><!--end titleHeader-->
					<ul class="unstyled my-account">
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi"><i class="icon-caret-right"></i> Status Pemesanan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi_pembayaran"><i class="icon-caret-right"></i> Konfirmasi Pembayaran</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi/konfirmasi_penerimaan"><i class="icon-caret-right"></i> Konfirmasi Penerimaan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi/histori_pemesanan"><i class="icon-caret-right"></i> Histori Pemesanan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>manage/return_dana"><i class="icon-caret-right"></i> Pengembalian Dana</a></li>
					</ul>
				</div>

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
    <!-- tambah bank-->
    <script type="text/javascript">
	$(document).ready(function(){
		$('#selectboxbank').change(function() {
		    if ($(this).val() === 'tambah') {
		        $('.tambah').css({'display': 'block'});
		    } else {
		    	$('.tambah').css({'display': 'none'});
		    }
		});
	});
</script>
</body>


<!-- Mirrored from ahmedsaeed.me/shopfine/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->
</html>