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
    <link rel="shortcut icon" href="<?php echo base_url(); ?><?php echo base_url(); ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url();?>ecomerce/produk">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>

				
			</div>
			<div><a class="btn btn-default check_out" href="<?php echo base_url();?>ecomerce/produk"><< Kembali Belanja</a></div>
			<br>
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
					
					
					

						<!--<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url(); ?>images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url(); ?>images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					-->
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Sub Total <span><?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
							<li>Ongkos Pengiriman <span>Free</span></li>
							<li>Total Pembayaran<span><?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
						</ul>
							<button class="btn btn-default update" type="submit"  >Update Keranjang Belanja</button>
							
							<?php form_close(); ?>
							<a class="btn btn-default check_out" href="<?php echo base_url();?>ecomerce/checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	
	

	<script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url(); ?>js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>