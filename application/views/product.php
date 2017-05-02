<!-- breadcrumbs area -->
<div class="breadcrumbs_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single breadcrumb_top">
					<ul id="breadcrumbs">
						<li><a href=""><i class="fa fa-home"></i>Home</a></li>
						<li><span>I</span></li>
						<li>Productos</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End breadcrumbs area -->
<!-- Start preview Product details area -->
<div class="blog_single_view_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="my_tabs">
					<div class="tab-content tab_content_style">
						<div id="tab1" class="tab-pane fade in active">
							<div class="blog_tabs">
								<a class="fancybox" href="<?php echo base_url() ?>admin/uploads/files/<?php echo $product->imagen_principal_file ?>" data-fancybox-group="gallery"><img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $product->imagen_principal_file ?>" /></a>
							</div>
						</div>
						<?php $gallery = get_images_gallery($product->galeria_de_imagenes_gallery) ?>
						<?php $i=2; foreach ($gallery as $image) { ?>
							<div id="tab<?= $i ?>" class="tab-pane fade">
								<div class="blog_tabs">
									<a class="fancybox" href="<?php echo base_url() ?>admin/uploads/<?php echo $image->folder ?>/<?php echo $image->file ?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?= base_url() ?>assets/img/product/blog-big-2.jpg" alt="" /></a>
								</div>
							</div>
						<?php $i++; } ?>
						

					</div>
					<div class="blog_view_list">
						<ul class="tab_style tab_bottom">
							
							<li class="active">
								<div class="blog_single_carousel">
								<a data-toggle="tab" href="#tab1"><img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $product->imagen_principal_file ?>" alt="" /></a>
								</div>
							</li>
							
							<?php $i=2; foreach ($gallery as $image) { ?>
								<li>
									<div class="blog_single_carousel">
									<a data-toggle="tab" href="#tab1"><img src="<?php echo base_url() ?>admin/uploads/<?php echo $image->folder ?>/<?php echo $image->file ?>" /></a>
									</div>
								</li>
							<?php $i++; } ?>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="blog_product_details">
					<h2 class="blog_heading"><a href=""><?= $product->nombre_text ?></a></h2>
					<div class="pricing_rate">

						<p class="rating_dollor rating_margin">
							<?php if($product->precio_en_promocion_text != 0){ ?>
							<span class="rating_value_one dollor_size">$<?= number_format($product->precio_text) ?></span> 
							<?php } ?>

							<?php if($product->precio_en_promocion_text != 0){ ?>
							<span class="rating_value_two">$<?= number_format($product->precio_en_promocion_text) ?></span>
							<?php } ?>

							<?php if($product->precio_en_promocion_text == 0){ ?>
							<span class="rating_value_one dollor_size" style="color:#898989;">$<?= number_format($product->precio_text) ?></span>
							<?php } ?>
						</p>
						<p class="blog_texts"><?= utf8_encode($product->descripcion_textarea) ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End preview Product details area -->

<!-- Start Related products area -->
<div class="related_products_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature_text feature_upsell">
					<h4>Productos Relacionados</h4>
				</div>
				<div class="row">
					<div class="upsell_product_list">
						<?php foreach ($related as $product) { ?>
							<div class="col-lg-3">
								<div class="single_upsell">
									<a href="<?= base_url() ?>products/view/<?= url_encode($product->nombre_text) ?>"><img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $product->imagen_principal_file ?>" alt="Choonta" /></a>
									<div class="upsell_details">
										<h2><a href="<?= base_url() ?>products/view/<?= url_encode($product->nombre_text) ?>"><?= $product->nombre_text ?></a></h2>
										<?php if($product->precio_en_promocion_text != 0){ ?>
										<p>$<?= number_format($product->precio_en_promocion_text) ?></p>
										<?php } ?>

										<?php if($product->precio_en_promocion_text == 0){ ?>
										<p>$<?= number_format($product->precio_text) ?></p>
										<?php } ?>
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
<!-- End Related products area -->
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