

<body>

	<div id="mainContainer" class="clearfix">

	
		<div class="container">

			<div class="row">
				
				<div class="span9">
					<div class="row">

						<div class="product-details clearfix">
							<div class="span5">
								
								<div class="product-img">
									<a class="fancybox" href="<?php echo base_url($det->gbr_produk); ?>"><img src="<?php echo base_url($det->gbr_produk); ?>" alt=""></a>
								</div><!--end product-img-->
								<div class="product-img-thumb">
									<a class="fancybox" href="<?php echo base_url(); ?>ecom/img/650x700.jpg"><img src="<?php echo base_url(); ?>ecom/img/68x60.jpg" alt=""></a>
									<a class="fancybox" href="<?php echo base_url(); ?>ecom/img/650x700.jpg"><img src="<?php echo base_url(); ?>ecom/img/68x60.jpg" alt=""></a>
									<a class="fancybox" href="<?php echo base_url(); ?>ecom/img/650x700.jpg"><img src="<?php echo base_url(); ?>ecom/img/68x60.jpg" alt=""></a>
									<a class="fancybox" href="<?php echo base_url(); ?>ecom/img/650x700.jpg"><img src="<?php echo base_url(); ?>ecom/img/68x60.jpg" alt=""></a>
								</div><!--end flexslider-thumb-->
							</div><!--end span5-->

							<div class="span4">
								<div class="product-set">
									<div class="product-title">
									<b><h3><?php echo $det->nama_produk; ?></h3></b>
									</div>
									<div class="product-price">
										<span>Rp <?php echo $det->harga_produk; ?></span>
									</div><!--end product-price-->
									<div class="product-rate clearfix">
										<ul class="rating">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<span>18 Review(s) <a href="#">Tulis Review</a></span>
									</div><!--end product-inputs-->
									<div class="product-info">
										<dl class="dl-horizontal">
										  <dt>Ketersediaan:</dt>
										  <?php if($det->stok >= 0){
										    echo "<dd>Stok Tersedia</dd>";
										  } ?>
										  <dt>Berat Produk:</dt>
										  <dd><?php echo $det->berat; ?> Kg</dd>

										 

										   <dt>Review Points:</dt>
										  <dd>25 Points</dd>
										</dl>
									</div><!--end product-info-->
									<div class="product-inputs">
										<!--<form method="post" action="http://ahmedsaeed.me/shopfine/page">
											<!--<div class="controls-row">
											<select class="span2" name="#">
												<option>-- Select Color --</option>
												<option value="">Red</option>
												<option value="">Blue</option>
												<option value="">Brown</option>
											</select>
											<select class="span2" name="#">
												<option>-- Select Size --</option>
												<option value="">Size 36</option>
												<option value="">Size 12</option>
												<option value="">Size 18</option>
											</select>
											</div>

											<div class="controls-row">
											<input type="text" class="span2" name="" value="" placeholder="input...">
											<input type="text" class="span2" name="" value="" placeholder="input...">
											</div>

											<div class="controls-row">
											<input type="text" class="span3" name="" value="" placeholder="input...">
											<input type="text" class="span1" name="" value="" placeholder="input...">
											</div>

											<textarea name="" class="span4" placeholder="textarea..."></textarea>-->

											<div class="input-append">
											<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/buy/<?php echo $det->id_produk; ?>">
											<button class="btn btn-primary"><i class="icon-shopping-cart"></i> Beli Produk</button></a>
											<br>
											<br>
											<button class="btn" data-toggle="tooltip" data-title="+To Wishlist"><i class="icon-heart"></i></button>
											<button class="btn" data-toggle="tooltip" data-title="+To Compare"><i class="icon-refresh"></i></button>
											</div>
											
										<!--</form>end form-->

									</div><!--end product-inputs-->
								</div><!--end product-set-->
							</div><!--end span4-->

						</div><!--end product-details-->

					</div><!--end row-->


					<div class="product-tab">
						<ul class="nav nav-tabs">
						  <li class="active">
						  	<a href="#descraption" data-toggle="tab">Deskripsi</a>
						  </li>
						 
						  <li>
						  	<a href="#return-info" data-toggle="tab">Return Info</a>
						  </li>
						  <li class="dropdown">
						  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reviews <i class="icon-caret-down"></i></a>
						  	<ul class="dropdown-menu">
						  		<li><a href="#read-review" data-toggle="tab">Read Reviews</a></li>
						  		<li><a href="#make-review" data-toggle="tab">Make Review</a></li>
						  	</ul>
						  </li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="descraption">
								<p>
									<?php echo $det->deskripsi; ?>
								</p>
								
							</div>
							
							<div class="tab-pane" id="return-info">
								<h4>Read our Returning info</h4><br>
								<p>
									Suspendisse potenti. In non nisl sem, eu rutrum augue. Donec eu dolor vel massa ornare cursus id eget erat. Mauris in ante magna. Curabitur eget risus mi, non interdum lacus. Duis magna leo, rhoncus eget malesuada quis, semper a quam. Morbi imperdiet imperdiet lectus ac pellentesque. Integer diam sem, vulputate in feugiat ut, porttitor eu libero. Integer non dolor ipsum. Cras condimentum mattis turpis quis vestibulum. Nulla a augue ipsum. Donec aliquam velit vel metus fermentum dictum sodales metus condimentum. Nullam id massa quis nulla molestie ultrices eget sed nulla. Cras feugiat odio at tellus euismod lacinia.
									
								</p>
							</div>

							<div class="tab-pane" id="read-review">
								<div class="single-review clearfix">
									<div class="review-header">
										<ul class="rating">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<h4>John Doe</h4>
										<small>26/11/2012</small>
									</div><!--end review-header-->

									<div class="review-body">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</div><!--end review-body-->
								</div><!--end single-review-->

								<div class="single-review clearfix">
									<div class="review-header">
										<ul class="rating">
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<h4>John Doe</h4>
										<small>26/11/2012</small>
									</div><!--end review-header-->

									<div class="review-body">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</div><!--end review-body-->
								</div><!--end single-review-->

								<div class="single-review clearfix">
									<div class="review-header">
										<ul class="rating">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<h4>John Doe</h4>
										<small>26/11/2012</small>
									</div><!--end review-header-->

									<div class="review-body">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</div><!--end review-body-->
								</div><!--end single-review-->
							</div>

							<div class="tab-pane" id="make-review">
								<form method="post" action="http://ahmedsaeed.me/shopfine/page" class="form-horizontal">
									<div class="control-group">
									    <label class="control-label" for="inputName">Your Name <span class="text-error">*</span></label>
									    <div class="controls">
									      <input type="text" name="#" id="inputName" placeholder="John Doe...">
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputReview">Your Review <span class="text-error">*</span></label>
									    <div class="controls">
									      <textarea name="#" id="inputReview" placeholder="Put your review here..."></textarea>
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputReview">Your Review <span class="text-error">*</span></label>
									    <div class="controls">
									       <div class="btn-group" data-toggle="buttons-radio">
											  <button type="button" class="btn" data-toggle="tooltip" data-title="1/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" data-toggle="tooltip" data-title="2/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" data-toggle="tooltip" data-title="3/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" data-toggle="tooltip" data-title="4/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" data-toggle="tooltip" data-title="5/5"><i class="icon-star"></i></button>
										   </div>
									    </div>
									</div>
									<div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary" name="submit">Add Review</button>
									    </div>
									</div>
								</form><!--end form-->
							</div>
						</div><!--end tab-content-->
					</div><!--end product-tab-->


					<div class="related-product">
						<div class="titleHeader clearfix">
							<h3>Produk Lainnya..</h3>
						</div><!--end titleHeader-->

						<div class="row">
						<ul class="hProductItems clearfix">
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" data-toggle="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" data-toggle="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio brochure
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>

									<div class="thumbButtons">
										<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" data-toggle="tooltip">
											<i class="icon-shopping-cart"></i>
										</button>
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" data-toggle="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>
								</div>
							</li>
						</ul>
						</div><!--end row-->
					</div><!--end related-product-->

				</div><!--end span9-->


				<aside class="span3">
				<div class="aside-inner" id="product-aside">
					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Informasi Penjual</h3>
						</div><!--end titleHeader-->

						<ul class="vProductItemsTiny">
							<li class="span7 clearfix">
								<div class="product-img-thumb">
									<a class="fancybox" href="<?php echo base_url(); ?>ecom/img/650x700.jpg"><img src="<?php echo base_url(); ?>ecom/img/68x60.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											<?php echo $det->nama_toko; ?>
										</a>
									</div>
									
									<div class="product-info">
										Lokasi : <?php echo $det->nama_kota; ?><br>
										Menerima pesanan sebanyak 8x pesanan
									</div>
									<div class="">
										<a href="<?php echo base_url();?>ecomerce/produk/lihat_toko/<?php echo $det->id_user; ?>" class="invarseColor">
											<button class="btn">Lihat Semua Barang</button>
										</a>
									</div>
								</div>
							</li>
							
						</ul>
					</div><!--end special-->



					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Featured</h3>
						</div><!--end titleHeader-->

						<ul class="vProductItemsTiny">
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the title here
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
								</div>
							</li>
						</ul>
					</div><!--end special-->

				</div><!--end aside-inner-->
				</aside><!--end span3-->

			</div><!--end row-->

		</div><!--end conatiner-->


		