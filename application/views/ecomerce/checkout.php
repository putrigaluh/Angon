<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:24 GMT -->


<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
		
		<!-- end header -->

		<div class="container">

			<div class="row">
				<div class="span12">
					<?php if($this->session->userdata('is_logged_in') == false) {
					echo
					"<div class='checkout-outer'>
						<div class='checkout-header'>
							<a href='#'' class='invarseColor pull-right' data-toggle='tooltip' data-placment='top' data-title='EDIT' style='margin-right:12px; color:#333; font-size:13px;'><i class='icon-pencil'></i></a>
							<h4><i class='icon-caret-down'></i> Checkout Options</h4>
						</div><!--end checkout-header-->

						<div class='checkout-content'>
							<div class='login'>
								<table>
									<tr>
										<td>
											<h3>New Customer</h3>
											<form method='post' action=''>
												<label class='radio'>
												  <input type='radio' name='optionsRadios' value='1' checked>
												  Registeration Account.
												</label>
												<label class='radio'>
												  <input type='radio' name='optionsRadios' value='0'>
												  Contuine as guest account.
												</label>
											</form><!--end form-->
											<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
											<a href='".base_url()."regis' class='btn'>Register</a>
										</td>

										<td>
											<h3>Login</h3>
											<form method='post' action='".base_url()."login'>
												<div class='controls'>
													<label>Masukkan Username: <span class='text-error'>*</span></label>
													<input type='text' name='username'value='' placeholder='budi'>
												</div>
												<div class='controls'>
													<label>Masukkan Password: <span class='text-error'>*</span></label>
													<input type='password' name='password' value='' placeholder='**************'>
												</div>
												<div class='controls'>
													
												    </label>
												    <button type='submit' class='btn btn-primary'>Login</button>
												</div>
											</form><!--end form-->
										</td>
									</tr>
								</table>
							</div><!--end login-->
						</div><!--end checkout-content-->
					</div><!--end checkout-outer-->";

					}?>
					<div class="checkout-outer">
						<div class="checkout-header">
							<a href="#" class="invarseColor pull-right" data-toggle="tooltip" data-placment="top" data-title="EDIT" style="margin-right:12px; color:#333; font-size:13px;"><i class="icon-pencil"></i></a>
							<h4><i class="icon-caret-down"></i> Informasi Pengiriman</h4>
						</div><!--end checkout-header-->

						<div class="checkout-content">
							<form method="post" action="" class="form-inline">
								<label class="radio inline">
								  <input type="radio" name="add" value="option1" id="radio_data_pribadi"> Gunakan data saya
								</label>&nbsp;&nbsp;
								<label class="radio inline">
								  <input type="radio" name="add" value="option2" id="radio_data_baru"> Saya ingin membuat informasi pengiriman lain
								</label>
							</form><!--end form-->

							<hr>

							<form method="post" action="<?php echo base_url();?>ecomerce/checkout/check" class="form-horizontal">

								<div class="control-group">
								    <label class="control-label" for="inputFirstName">Nama Lengkap: <span class="text-error">*</span></label>
								    <div class="controls">
								      <input type="text" id="inputFirstName" name="nama" placeholder="Budi">
								      <!--<span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span>-->
								    </div>
								</div><!--end control-group-->
								<?php if ($this->session->userdata('kategori_user') == 'Industri Ternak' || $this->session->userdata('kategori_user') == 'Peternak' ) {
								echo "<div class='control-group'>
								    <label class='control-label' for='inputCompany'>Nama Perusahaan / Nama Toko:</label>
								    <div class='controls'>
								      <input type='text' id='inputCompany' name='toko' placeholder='PT. Jaya Kusuma'>
								    </div>
								</div>";
								} ?>

								<div class="control-group">
								    <label class="control-label" for="inputFirstAdd">Alamat: <span class="text-error">*</span></label>
								    <div class="controls">
								      <textarea  id="inputFirstAdd" name="alamat" placeholder="jalan terusan ikan nus"></textarea>
								    </div>
								</div><!--end control-group-->

								<div class="control-group">
							    <label class="control-label" for="inputTele">Nomor Telepon: <span class="text-error">*</span></label>
							    <div class="controls">
							      <input type="text" id="inputTele" name="notelp" placeholder="085755141414">
							    </div>
								</div><!--end control-group-->
								

								

								<div class="control-group">
								    <div class="control-label">Provinsi: <span class="text-error">*</span></div>
								    <div class="controls">
								      <select name="provinsi">
								      	<option value="#">-- Pilih Provinsi --</option>
								      	<option value="#">Jawa Timur</option>
								      	<option value="#">Jawa Tengah</option>
								      	<option value="#">Jawa Barat</option>
								      	<option value="#">Jakarta</option>
								      </select>
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label" for="inputCity">Kota: <span class="text-error">*</span></label>
								    <div class="controls">
								      <select name="kota" id="kota">
								      	<option value="pilih">-- Pilih Kota --</option>
											<?php
												foreach ($daftar_kota as $k) {
												 	echo "<option value='".$k->id_kota."'>".$k->nama_kota."</option>";
												 } 
											?>
								      </select>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label" for="inputPostCode">Kodepos: <span class="text-error">*</span></label>
								    <div class="controls">
								      <input type="text" id="inputPostCode" name="kodepos" placeholder="66677">
								    </div>
								</div>

								

							<!--end form-->
						</div><!--end checkout-content-->
					</div><!--end checkout-outer-->


					


					<div class="checkout-outer">
						<div class="checkout-header">
							<a href="#" class="invarseColor pull-right" data-toggle="tooltip" data-placment="top" data-title="EDIT" style="margin-right:12px; color:#333; font-size:13px;"><i class="icon-pencil"></i></a>
							<h4><i class="icon-caret-right"></i> Metode Pengiriman</h4>
						</div><!--end checkout-header-->

						<div class="checkout-content">
							<!-- content here-->
							<div class="control-group">
								 <div class="control-label">Metode Pengiriman: <span class="text-error">*</span></div>
								    <div class="controls">
								      <select name="delivmethod">
								      	<option value="#">-- Pilih Metode --</option>
								      	<option value="Kurir">Kurir</option>
								      	<option value="Penjual">Penjual</option>
								      	
								      </select>
								    </div>
								</div>
						</div><!--end checkout-content-->
					</div><!--end checkout-outer-->


					<div class="checkout-outer">
						<div class="checkout-header">
							<a href="#" class="invarseColor pull-right" data-toggle="tooltip" data-placment="top" data-title="EDIT" style="margin-right:12px; color:#333; font-size:13px;"><i class="icon-pencil"></i></a>
							<h4><i class="icon-caret-right"></i> Metode Pembayaran</h4>
						</div><!--end checkout-header-->

						<div class="checkout-content">
							<!-- content here-->
							Metode pembayaran yang tersedia saat ini adalah transfer melalui rekening bersama Angon.
							 <div class="control-group">
								    <label class="control-label" for="inputPostCode">BCA A/n PT Angon Indonesia <span class="text-error">*</span></label>
								    <div class="controls">
								       <label class="control-label" for="inputPostCode">333-678-987 <span class="text-error">*</span></label>
								    </div>
								</div>
								<div class="control-group" align="center">
							    <div class="controls">
								    <input type="submit" name="submit" class="btn btn-primary" values="Checkout">
							    </div>
								</div><!--end control-group-->

						</div><!--end checkout-content-->
					</div><!--end checkout-outer-->

</form>
				</div><!--end span12-->
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

    <script>

    $("#radio_data_pribadi").click(function(){
    	$("#inputFirstName").val("<?php echo $data_pengirim->nama_user; ?>");
    	$("#inputCompany").val("<?php echo $data_pengirim->nama_toko; ?>");
    	$("#inputFirstAdd").val("<?php echo $data_pengirim->alamat_user; ?>");
    	$("#inputTele").val("<?php echo $data_pengirim->no_telp; ?>");
    	$("#kota").val("<?php echo $data_pengirim->id_kota; ?>");
    	$("#inputPostCode").val("<?php echo $data_pengirim->kodepos; ?>");
    });


   
	$("#radio_data_baru").click(function(){
    	$("#inputFirstName").val("");
    	$("#inputCompany").val("");
    	$("#inputFirstAdd").val("");
    	$("#inputTele").val("");
    	$("#kota").val("pilih");
    	$("#inputPostCode").val("");
    });

    </script>
    
</body>


<!-- Mirrored from ahmedsaeed.me/shopfine/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:24 GMT -->
</html>