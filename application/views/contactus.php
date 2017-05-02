<!--End Main Menu area -->
<div class="breadcrumbs-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb-single blog_top_area">
					<ul id="breadcrumbs">
						<li><a href=""><i class="fa fa-home"></i>Home</a></li>
						<li><span>Ι</span></li>
						<li>Contactanos</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Start google map area -->
<div class="google_map_area">
	<div class="container">
		<div class="row">
			<?php $i=0; foreach ($branches as $branch) { ?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="company_right_area">
						<h6><?= $branch->ciudad_text ?></h6>
					</div>
					<div id="googleMap<?= $i ?>" style="width:100%;height:433px;"></div>
				</div>

				<script type="text/javascript">
	        function initialize() {
	          var mapOptions = {
	            zoom: 15,
	            scrollwheel: false,
	            center: new google.maps.LatLng(<?= $branch->ubicacion_map ?>)
	          };

	          var map<?= $i ?> = new google.maps.Map(document.getElementById('googleMap<?= $i ?>'),
	              mapOptions);
	          var marker = new google.maps.Marker({
	            position: map<?= $i ?>.getCenter(),
	            icon: '<?= base_url() ?>assets/img/map.png',
	            map: map<?= $i ?>
	          });
	        }
	        google.maps.event.addDomListener(window, 'load', initialize);
	    	</script>
			<?php $i++; } ?>			
		</div>
	</div>
</div>
<!--End google map area -->
<!--Start company details area -->
<div class="company_contact_details">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="get_touch">
					 <h2><?= $contact->titulo_text ?></h2>
					 <p><?= $contact->subtitulo_text ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="contact_us_info">
					<form id="contact-form">
						<input type="hidden" id="base_url" value="<?= base_url() ?>">
						<input type="text" placeholder="Nombre *" name="Nombre" class="input-send" data-validation-engine="validate[required]">
						<input type="text" placeholder="Email *" name="Email" class="input-send" data-validation-engine="validate[required, custom[email]]">
						<input type="text" placeholder="Asunto" name="Asunto" class="input-send">
						<textarea placeholder="Mensaje *" rows="10" cols="30" name="Mensaje" class="input-send" data-validation-engine="validate[required]"></textarea>
						<div class="controls">
							<input type="submit" class="btn btn-large btn-primary submit" id="submit-contact" value="Enviar">
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="company_right_area">
					<h6>INFORMACIÓN</h6>
					<div class="contact_addon_content">
						<?php foreach ($branches as $branch) { ?>
							<p><span><i class="fa fa-map-marker"></i></span> <?= $branch->direccion_text ?></p>
						<?php } ?>
						<p><span><i class="fa fa-envelope"></i></span> <?= $contact->email_text ?></p>
						<p><span><i class="fa fa-phone"></i></span> <?= $contact->telefono_text ?></p>
					</div>
        </div>
				<div class="company_right_hour">
					<h6>HORARIO</h6>
				   <p><?= $contact->horario_text ?></p>
				   <div class="single_icons_contact">
						<ul id="social_contact_icon">
							<li><a href="<?= $home->facebook_text ?>" target="_blank" class="black-tooltip s-1" title="" data-placement="top" data-toggle="tooltip" data-original-title="Siguenos en Facebook"><i class="fa fa-facebook"></i> </a></li>
							<li><a href="<?= $home->instagram_text ?>" target="_blank" class="black-tooltip s-2" title="" data-placement="top" data-toggle="tooltip" data-original-title="Siguenos en Instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="<?= $home->pinterest_text ?>" target="_blank" class="black-tooltip s-4" title="" data-placement="top" data-toggle="tooltip" data-original-title="Siguenos en Pinterest"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End company details area -->
<!--Start Footer Banner area -->
<div class="blog_banner_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="single_banner">
					<div class="banner_home_inner">
						<a href="#">
							<img alt="" src="<?php echo base_url() ?>admin/uploads/files/<?php echo $contact->imagen_file ?>">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Start Footer Banner area -->


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