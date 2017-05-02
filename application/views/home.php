<!-- slider-area start -->
<section class="slider-area">
	<!-- slider start -->
	<div class="slider home2_slider">
		<div id="mainSlider" class="nivoSlider nevo-slider">
			<?php $i=0; foreach ($banners as $banner) { ?>
				<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $banner->imagen_file ?>" title="#htmlcaption<?= $i ?>"/>
			<?php $i++; } ?>
		</div>	
		<?php $i=0; foreach ($banners as $banner) { ?>
			<div id="htmlcaption0" class="nivo-html-caption slider-caption">
				<div class="slider-progress"></div>
				<div class="slider-text">
					<div class="middle-text">
						<div class="width-cap">
							<h3 class="slider2-tiile-top home2_slider2-tiile-top top-ani-2"><span><?= $banner->texto_1_text ?></span></h3>
							<h2 class="slider2-tiile-middle home2_slider2-tiile-middle middle-ani-2"><span><?= $banner->texto_2_text ?></span></h2>
							<?php if(!empty($banner->texto_boton_1_text)){ ?>
							<div class="slider2-readmore slider2-readmore_home2">
								<a href="<?= $banner->link_boton_1_text ?>"><?= $banner->texto_boton_1_text ?></a>
							</div>	
							<?php } ?>
							<?php if(!empty($banner->texto_boton_2_text)){ ?>
							<div class="slider2-shop slider2-shop_home2">
								<a href="<?= $banner->link_boton_2_text ?>"><?= $banner->texto_boton_2_text ?></a>
							</div>		
							<?php } ?>						
						</div>
					</div>
				</div>					
			</div>
		<?php $i++; } ?>
	</div>
	<!-- slider end -->
</section>

<!-- slider-area end -->
<!--start home-2 banner area -->
<div class="home2_banner_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="shopping_world">
					<p><?= $home->copy_text ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-md-offset-2">
				<div class="home2_banner_single">
					<div class="home2_banner_one">
						<a href="<?= $home->link_boton_1_text ?>">
							<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $home->imagen_boton_1_file ?>" alt="banner" />
						</a>
					</div>
					<div class="home2_banner_text">
						<h4><?= $home->titulo_boton_1_text ?></h4>
						<h3>-<?= $home->subtitulo_boton_1_text ?></h3>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="home2_banner_single">
					<div class="home2_banner_one">
						<a href="<?= $home->link_boton_2_text ?>">
							<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $home->imagen_boton_2_file ?>" alt="banner" />
						</a>
					</div>
					<div class="home2_banner_text">
						<h4><?= $home->titulo_boton_2_text ?></h4>
						<h3>-<?= $home->subtitulo_boton_2_text ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End home-2 banner area -->


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


<!--Start Feature area -->
<div class="feature_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="feature_text">
					<h4>Productos Destacados</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($features as $feature) { ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="product_list">
					<div class="single_product">
						<a href="<?= base_url() ?>products/view/<?= url_encode($feature->productName) ?>" target="main"><img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $feature->imagen_principal_file ?>" alt="Choonta" /></a>
						<div class="product_details">
							<h2><?= $feature->productName ?></h2>
							<p>
								<?php if($feature->precio_en_promocion_text != 0){ ?>
								<span class="regular_price">$<?= number_format($feature->precio_text) ?></span> 
								<?php } ?>

								<?php if($feature->precio_en_promocion_text != 0){ ?>
								<span class="popular_price">$<?= number_format($feature->precio_en_promocion_text) ?></span>
								<?php } ?>

								<?php if($feature->precio_en_promocion_text == 0){ ?>
								<span class="popular_price" style="color:#898989;">$<?= number_format($feature->precio_text) ?></span>
								<?php } ?>
							</p>
						</div>
						<?php if($feature->precio_en_promocion_text != 0){ ?>
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
</div>
<!--End Feature area -->
<!--Start Contact info area -->
<div class="service_info_area home2_service_info">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="service_list">
					<h2><i class="fa fa-envelope-o"></i> <?= $home->email_text ?></h2>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="service_list">
					<h3><i class="fa fa-phone"></i> <?= $home->telefono_text ?></h3>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="Social_list">
					<h2>Conectate: </h2>
					<div class="social_icon my-class uk-scrollspy-init-inview uk-invisible">
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Like 6k" class="red-tooltip" href="<?= $home->facebook_text ?>"><i class="fa fa-facebook"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 16k" class="red-tooltip" href="<?= $home->instagram_text ?>"><i class="fa fa-instagram"></i></a>
						<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 10k" class="red-tooltip" href="<?= $home->pinterest_text ?>"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Contact info area -->
<!--Start Blog area -->
<div class="blog_post_area home2_blog_bt">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature_text">
					<h4>Instagram</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="carousel_blog_list">
				<?php foreach ($posts as $image) { ?>
					<div class="col-lg-3">
						<div class="single_blog">
							<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $image->imagen_file ?>" />
							<div class="blog_details">
								<?= $image->titulo_text ?></a>
								<p><?= $image->descripcion_text ?></p>
								<h3><?= $image->fecha_text ?></h3>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!--End blog area -->