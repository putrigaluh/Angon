<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
	
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span12">
					<table class="table">
						<?php echo form_open(base_url().'ecomerce/shoppingcart/update'); ?>
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
								<li class="span3 clearfix">
									<a href="#"><img src="<?php echo base_url($items['image']);?>" alt=""></a>
								</li>
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

										echo "<li>".$items['stok']."</li>";
										echo "<li>".$items['deskripsi']."</li>";
										?>
									</ul>
								</td>
								<td class="quantity">
									<div class="input-prepend input-append">
										
										
										<?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
										<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
										<p>
											<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
											<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
										<?php endforeach; ?>
										<?php endif; ?>
										
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
									<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/delete/<?php echo $items['rowid'] ?>" class="btn btn-small" data-title="Remove"><i class="icon-trash"></i></a>
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
									<form class="form-horizontal" method="post" >
										<input type="text" name="from" id="from">
										<input type="text" name="to" id="to">
										<input type="text" name="weight" id="weight" />
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

						<!--<div class="accordion-group">
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
									  </div>end control-group
									  <div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary">Apply Coupon</button>
									    </div>
									  </div><!--end control-group
									</form>
								</div>
							</div>
						</div><!--end accordion-group

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
									  </div>end control-group
									  <div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary">Apply Voucher </button>
									    </div>
									  </div><!--end control-group
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

 $(function() {

//autocomplete untuk mencari kota asal

 $("#from").autocomplete({

 minLength: 3,

 delay: 3,

 source: function(request, response) {

 $.ajax({

 url: "data.php?type=origin",

 dataType: "json",

 data: {

 term : request.term,

 from: $('#from').val(),

 },

 success: function(data) {

 response( $.map( data, function( item )

 {

 return{

 label: item.nama_kota,

 value: item.nama_kota,

 }

 }));



 }

 });

 },

 });



//autocomplete untuk mencari kota tujuan

$("#to").autocomplete({

 minLength: 3,

 delay: 3,

 source: function(request, response) {

 $.ajax({

 url: "data.php?type=destination",

 dataType: "json",

 data: {

 term : request.term,

 to: $('#to').val(),

 },

 success: function(data) {

 response( $.map( data, function( item )

 {

 return{

 label: item.nama_kota,

 value: item.nama_kota,

 }

 }));


 }

 });

 },

 })

 });
</script>
 
    
</body>
