

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
