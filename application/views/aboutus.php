<!--Start breadcrumbs area -->
<div class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single blog_top_area">
					<ul id="breadcrumbs">
						<li><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
						<li><span>Ι</span></li>
						<li>Página</li>
						<li><span>Ι</span></li>
						<li>Sobre Nosotros</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End breadcrumbs area -->
<!--Start about hope area -->
<div class="about_hope_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="about_hope_text">
					<h1><?= $about->titulo_text ?></h1>
					<?= $about->contenido_textarea ?>
					<div class="about_read_more">
						<a href="#" id="show-sections"><?= $about->texto_boton_text ?></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="about_hope_image">
					<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $about->imagen_file ?>" alt="Choonta - Sobre nosotros" />
				</div>
			</div>
		</div>
	</div>
</div>
<!--End about hope area -->

<!--Start skill area -->
<div class="about_skill_area hide">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="about_skills">
					<h2><?= $graphics->titulo_text ?></h2>
					<p><?= $graphics->subtitulo_text ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php $graficas = explode(',', $graphics->porcentajes_list) ?>

			<?php foreach ($graficas as $grafica) { ?>
				<?php $datos = explode('-', $grafica) ?>
				<!-- single-skill-about start --> 
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="single-skill-about">
						<div class="progress-circular">
							  <input type="text" class="knob" value="0" data-rel="<?= $datos[1] ?>" data-linecap="round" data-width="175" data-bgcolor="#F5F5F5" data-fgcolor="#ff343b" data-thickness=".04" data-readonly="true" disabled>
							  <h4 class="progress-h4"><?= $datos[0] ?></h4>					
						</div>						
					</div>						
				</div>
				<!-- single-skill-about end --> 
			<?php  } ?>
		</div>
	</div>
</div>
<!--End skill area -->


<!--Start Creative Member area -->
<div class="creative_member_area hide">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="creative_member_text">
					 <h2><?= $team->titulo_text ?></h2>
					 <p><?= $team->subtitulo_text ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($members as $member) { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="single_creative_member">
						<div class="creative_author">
							<img src="<?php echo base_url() ?>admin/uploads/files/<?php echo $member->imagen_file ?>" alt="Choonta" />
						</div>
						<div class="member_info">
							<span class="member_name"><?= $member->nombre_text ?></span>
							<span class="member_role"><?= $member->cargo_text ?></span>
						</div>
						<div class="member_icons">
							<?php if(!empty($member->facebook_text)){ ?>
								<a href="<?= $member->facebook_text ?>"><i class="fa fa-facebook"></i></a>
							<?php } ?>

							<?php if(!empty($member->twitter_text)){ ?>
								<a href="<?= $member->twitter_text ?>"><i class="fa fa-twitter"></i></a>
							<?php } ?>

							<?php if(!empty($member->google_text)){ ?>
								<a href="<?= $member->google_text ?>"><i class="fa fa-google-plus"></i></a>
							<?php } ?>

							<svg xml:space="preserve" enable-background="new 0 0 52 52" viewBox="0 0 52 52" height="52px" width="52px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M51.673,0H0v51.5c0.244-5.359,3.805-10.412,7.752-13.003l36.169-23.74c4.264-2.799,7.761-8.663,7.752-14.297V0L51.673,0z"/></svg>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		</div>
	</div>
</div>
<!--End Creative Member area -->


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