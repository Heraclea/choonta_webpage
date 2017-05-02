<!--Start clothing product area -->
<div class="clothing_product_area">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php if ($show_banner) { ?>	
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="catagory_banner">
							<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $category->imagen_file ?>" alt="Choonta" />
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="my_tabs">
					<ul class="tab_style">
						<li class="active"><a data-toggle="tab" href="#tab1"><span><i class="fa fa-th"></i></span></a></li>
						<li><a data-toggle="tab" href="#tab2"><span><i class="fa fa-th-list"></i></span></a></li>
					</ul>
					<div class="tab-content tab_content_style">
						<div id="tab1" class="tab-pane fade in active">
							<div class="row">
								<?php if (!$products) { ?>
									<h2>No hay productos en esta sección <br><br></h2>
								<?php } ?>
								<?php foreach ($products as $product) { ?>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="product_list">
											<div class="single_product repomsive_768">
											<a href="<?= base_url() ?>products/view/<?= url_encode($product->productName) ?>" target="main"><img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $product->imagen_principal_file ?>" alt="Choonta" /></a>
												<div class="product_details">
													<h2><?= $product->productName ?></h2>
													<p>
														<?php if($product->precio_en_promocion_text != 0){ ?>
														<span class="regular_price">$<?= number_format($product->precio_text) ?></span> 
														<?php } ?>

														<?php if($product->precio_en_promocion_text != 0){ ?>
														<span class="popular_price">$<?= number_format($product->precio_en_promocion_text) ?></span>
														<?php } ?>

														<?php if($product->precio_en_promocion_text == 0){ ?>
														<span class="popular_price" style="color:#898989;">$<?= number_format($product->precio_text) ?></span>
														<?php } ?>
													</p>
												</div>
												<?php if($product->precio_en_promocion_text != 0){ ?>
												<div class="sale_product">
													<h5>Sale</h5>
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div id="tab2" class="tab-pane fade">
							<?php foreach ($products as $product) { ?>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="product_blog_image">
										<div class="product_blog_image">
											<a href="<?= base_url() ?>products/view/<?= url_encode($product->productName) ?>"><img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $product->imagen_principal_file ?>" alt="Choonta" /></a>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="blog_product_details">
										<h2 class="blog_heading"><a href="<?= base_url() ?>products/view/<?= url_encode($product->productName) ?>"><?= $product->productName ?></a></h2>
										<div class="pricing_rate">
											<p class="rating_dollor">
												<?php if($product->precio_en_promocion_text != 0){ ?>
												<span class="rating_value_one">$<?= number_format($product->precio_text) ?></span> 
												<?php } ?>

												<?php if($product->precio_en_promocion_text != 0){ ?>
												<span class="rating_value_two">$<?= number_format($product->precio_en_promocion_text) ?></span>
												<?php } ?>

												<?php if($product->precio_en_promocion_text == 0){ ?>
												<span class="rating_value_two" style="color:#898989;">$<?= number_format($product->precio_text) ?></span>
												<?php } ?>
											</p>
											<p class="blog_texts"><?= utf8_encode($product->descripcion_textarea) ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End clothing product area -->
<!--Start Branding area -->
<div class="branding_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="carousel_branding">
					<?php foreach ($brands as $brand) { ?>
						<div class="single_branding">
							<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $brand->imagen_file ?>" alt="Choonta" />
						</div>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Branding area -->