<div class="footer_area">
	<div class="container">
		<div class="row">
			<div class="footer_menu_area">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="help_support">
						<a href="<?= base_url() ?>products"><h2>PRODUCTOS</h2></a>
						<ul class="footer_menu">
							<?php foreach ($categories as $category) { ?>
								<li><a href="<?= base_url() ?>products/category/<?= url_encode($category->nombre_text) ?>"><?= $category->nombre_text ?></a></li>
							<?php  } ?>
							<li><a href="<?= base_url() ?>products/category/promociones">Promociones</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="help_support help_border">
						<a href="<?= base_url() ?>aboutus"><h2>SOBRE NOSOTROS</h2></a>
						<a href="<?= base_url() ?>contactus"><h2>CONTACTANOS</h2></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="help_support help_border">
						<a href="<?= $home->facebook_text ?>" target="_blank"><h2>FACEBOOK</h2></a>
						<a href="<?= $home->instagram_text ?>" target="_blank"><h2>INSTAGRAM</h2></a>
						<a href="<?= $home->pinterest_text ?>" target="_blank"><h2>PINTEREST</h2></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="help_support help_border">
						<?php foreach ($branches as $branch) { ?>
							<h2><?= $branch->ciudad_text ?></h2>
							<p>Dirección: <span><?= $branch->direccion_text ?></span></p>
						<?php } ?>
						<br>
						<p>Teléfono: <span><?= $contact->telefono_text ?></span></p>
						<p>Horario: <span><?= $contact->horario_text ?></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="footer_bottom_area">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="copy_visa">
						<div class="copy_right">
							<h2>Copyright © 2016 Choonta. Todos los derechos reservados.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>