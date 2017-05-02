<div class="home2_header_top_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<!--Start logo area -->
				<div class="logo logo_border"> 
					<a href="<?= base_url() ?>">
						<img src="<?= base_url() ?>/assets/img/Logo blanco.png" alt="Choonta" width="125"/>
					</a>
				</div>
				<!--End logo area -->
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="home2_contact_info">
					<div class="contact_info_text">
						<p>Contactanos: <?= $contact->telefono_text ?> - <?= $contact->email_text ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<!--Start Main menu area -->
						<div class="main_menu main_menu_tb">
							<ul id="nav_menu" class="active_cl nav_manu_lf">
								<li><a class="home2_size" href="<?= base_url() ?>aboutus"><span class="Home">Sobre Nosotros</span></a></li>
								<li><a class="home2_size" href="<?= base_url() ?>products"><span class="Footwear">Productos</span></a>
									<div class="home_mega_menu menu_home2_looktr">
										<?php foreach ($categories as $category) { ?>
										<a href="<?= base_url() ?>products/category/<?= url_encode($category->nombre_text) ?>"><i class="fa fa-angle-right"></i><?= $category->nombre_text ?></a>
										<?php  } ?>
										<a href="<?= base_url() ?>products"><i class="fa fa-angle-right"></i>Promociones</a>
									</div>
								</li>
								<li><a class="home2_size" href="<?= base_url() ?>contactus"><span class="Footwear">Contactanos</span></a></li>
							</ul>
						</div>
						<!--End Main menu area -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<!--Start Search area -->
						<div class="search_box_hopme2">
							<form action="<?= base_url() ?>products/search" name="myForm">
								<div class="search_box seach_box_home2_area">
									<input id="itp" class="input_text" type="text" name="word" placeholder="Buscar"/>
									<button type="submit" class="btn-search">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</form> 
						</div>
						<!--End Search area -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--start Mobile Menu area -->
	<div class="mobile-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="mobile-menu">
						<nav id="dropdown">
							<ul>
								<li><a href="<?= base_url() ?>aboutus">Sobre nosotros</a></li>
								<li><a href="<?= base_url() ?>products">Productos</a>
									<ul>
										<?php foreach ($categories as $category) { ?>
										<a href="<?= base_url() ?>products/category/<?= url_encode($category->nombre_text) ?>"><i class="fa fa-angle-right"></i><?= $category->nombre_text ?></a>
										<?php  } ?>
                    <a href="<?= base_url() ?>products"><i class="fa fa-angle-right"></i>Promociones</a>
									</ul>
								</li>
								<li><a href="<?= base_url() ?>contactus">Contactanos</a></li>
							</ul>
						</nav>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!--End Mobile Menu area -->
</div>