<?php $settings = get_settings(); ?>
<header id="header" class="tt-nav transparent-header">
  		<div class="header-sticky light-header">
  			<div class="container">
  				<div class="search-wrapper">
  					<div class="search-trigger pull-right">
  						<div class='search-btn'></div>
  						<i class="material-icons">&#xE8B6;</i>
  					</div>
  					<!-- Modal Search Form -->
  					<i class="search-close material-icons">&#xE5CD;</i>
  					<div class="search-form-wrapper">
  						<form action="#" class="white-form">
  							<div class="input-field">
  								<input type="text" name="search" id="search">
  								<label for="search" class="">Ara...</label>
  							</div>
  							<button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>
  						</form>
  					</div>
  				</div><!-- /.search-wrapper -->
  				<div id="materialize-menu" class="menuzord">
  					<!--logo start-->
  					<a href="<?php echo base_url(); ?>" class="logo-brand">
  						<img src="<?php echo get_picture("settings_v", $settings->logo, "212x50"); ?>" alt="<?php echo $settings->company_name; ?>" title="<?php echo $settings->company_name; ?>"/>
  					</a>
  					<!--logo end-->
  					<!--mega menu start-->
  					<ul class="menuzord-menu pull-right">
  						<li class="active"><a href="<?php echo base_url(); ?>">Anasayfa</a>
  						</li>
  						<li><a href="javascript:void(0)">Kurumsal</a>
  							<ul class="dropdown">
  								<li><a href="<?php echo base_url("hakkimizda"); ?>">Hakkımızda</a></li>
                  <li><a href="<?php echo base_url("misyon-vizyon"); ?>">Misyon & Vizyon</a></li>
  							</ul>
  						</li>
              <li><a href="javascript:void(0)">Hizmetlerimiz</a>
                <ul class="dropdown">
                  <?php foreach ($services as $service) { ?>
                    <li><a href="<?php echo base_url("hizmet/");echo $service->url; ?>"><?php echo $service->title; ?></a></li>
                  <?php } ?>
                  <li><a href="<?php echo base_url("hizmetlerimiz"); ?>">Tüm Hizmetlerimiz</a></li>
                </ul>
              </li>
  						<li><a href="<?php echo base_url("iletisim"); ?>">İletişim</a></li>
  					</ul>
  					<!--mega menu end-->
  				</div>
  			</div>
  		</div>
  	</header>