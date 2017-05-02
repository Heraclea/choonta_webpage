<!--Start Header Top area -->
<div class="header_area_top"> 
<div class="container">
	<div class="row">
		
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sm-offset-4">
			<!--Start Logo area -->
			<div class="logo"> 
				<a href="<?= base_url() ?>">
					<img src="<?= base_url() ?>assets/img/Logo Negro.png" alt="Choonta" width="125" />
				</a>
			</div> 
			<!--End Logo area -->
		</div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<!--Start Search area -->
			<form action="<?= base_url() ?>products/search" name="myForm" class="pull-right"> 
				<div class="search_box">
					<input id="itp" class="input_text" type="text" name="word" placeholder="Buscar"/>
					<button type="submit" class="btn-search">
						<span><i class="fa fa-search"></i></span>
					</button>
				</div>
			</form> 
			<!--End Search area -->
		</div>

	</div>
</div>
</div> 
<!--End Header Top area -->
<!--Start Main Menu area -->
<nav class="header_botttom_area">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="main_menu">
				<ul id="nav_menu" class="active_cl">
					<li><a href="<?= base_url() ?>aboutus"><span class="Home">Sobre Nosotros</span></a></li>
					<li><a href="<?= base_url() ?>products"><span class="Home">Productos</span></a>
						<div class="home_mega_menu">
							<?php foreach ($categories as $category) { ?>
							<a href="<?= base_url() ?>products/category/<?= url_encode($category->nombre_text) ?>"><i class="fa fa-angle-right"></i><?= $category->nombre_text ?></a>
							<?php  } ?>
							<a href="<?= base_url() ?>products/category/promociones">Promociones</a>
						</div>
					</li>
					<li><a href="<?= base_url() ?>contactus"><span class="Home">Contactanos</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</nav>
<!--End Main Menu area -->
<!--start Mobile Menu area -->
<div class="mobile-menu-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="mobile-menu">
					<nav id="dropdown">
						<ul>
							<li><a href="<?= base_url() ?>aboutus">Sobre Nosotros</a></li>
							<li><a href="index-1.html">Productos</a>
								<ul>
									<?php foreach ($categories as $category) { ?>
										<a href="<?= base_url() ?>products/category/<?= url_encode($category->nombre_text) ?>"><?= $category->nombre_text ?></a>
										<?php  } ?>
									<a href="<?= base_url() ?>products/category/promociones">Promociones</a>
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