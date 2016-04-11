<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Angon</title>
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<!--<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Informasi Pembeli</p>
							<form>
								<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
								<input type="text" placeholder="Display Name" name='nama' value="<?php echo $this->session->userdata('nama_user'); ?>">
								<input type="text" placeholder="User Name">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm password">
							</form>
							<a class="btn btn-primary" href="">Get Quotes</a>
							<a class="btn btn-primary" href="">Continue</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Informasi Pengiriman</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Nama Penerima">
									<input type="text" placeholder="Alamat Pengiriman" name='alamat_pengiriman'>
									<input type="text" placeholder="Kodepos">
									<select>
										<option>Pilih Provinsi</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									
									<select name="kota">
										<option value="0">Pilih Kota</option>
										<?php
										foreach ($daftar_kota as $k) {
											echo "<option value='".$k->id_kota."'>".$k->nama_kota."</option>";
										} 
										?>
									</select>
									
									<input type="text" placeholder="Nomor Telepon" name='no_telp'>
								</form>
							</div>
							
						</div>
						<div class="bill-to">
							
							<div class="form-two">
								<form>
									<input type="text" placeholder="Nama Bank">
									<input type="text" placeholder="" name=''>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Pemesanan</p>
							<textarea name="message"  placeholder="Tulisankan tentang pemesanan yang anda inginkan" rows="16"></textarea>
							<label><input type="checkbox"> Shipping to bill address</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review Pemesanan</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<?php echo form_open(base_url().'ecomerce/shoppingcart/update'); ?>
					<thead>
						<tr class="cart_menu">
							<td class="image">Produk</td>
							<td class="description"></td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah Beli</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php $i = 1; ?>
					<?php foreach ($this->cart->contents() as $items): ?>
					<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url(); ?>images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">
								<?php echo $items['name']; ?>
								<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
								<p>
									<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
									<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

								<?php endforeach; ?>
								</p>

								<?php endif; ?>
								</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p><?php echo $this->cart->format_number($items['price']); ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
									<!--<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>-->
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url(); ?>ecomerce/shoppingcart/delete/<?php echo $items['rowid'] ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
					
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	


	<script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url(); ?>js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</body>
</html>