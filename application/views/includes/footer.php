<?php $settings = get_settings(); ?>
<footer class="footer footer-four">
	<div class="primary-footer brand-bg text-center">
		<div class="container">
			<a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light" data-section="#top">
				<i class="material-icons">&#xE316;</i>
			</a>
			<ul class="social-link tt-animate ltr mt-20">
				<?php if ($settings->facebook != "") { ?>
					<li><a href="https://facebook.com/<?php echo $settings->facebook; ?>" target="__blank"><i class="fa fa-facebook"></i></a></li>
				<?php } ?>
				<?php if ($settings->twitter != "") { ?>
					<li><a href="https://twitter.com/<?php echo $settings->twitter; ?>" target="__blank"><i class="fa fa-twitter"></i></a></li>
				<?php } ?>
				<?php if ($settings->linkedin != "") { ?>
					<li><a href="https://linkedin.com/in/<?php echo $settings->linkedin; ?>" target="__blank"><i class="fa fa-linkedin"></i></a></li>
				<?php } ?>
				<?php if ($settings->instagram != "") { ?>
					<li><a href="https://instagram.com/<?php echo $settings->instagram; ?>" target="__blank"><i class="fa fa-instagram"></i></a></li>
				<?php } ?>	
			</ul>
			<hr class="mt-15">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-logo">
						<img src="<?php echo get_picture("settings_v", $settings->logo, "212x50"); ?>" alt="<?php echo $settings->company_name; ?>" title="<?php echo $settings->company_name; ?>">
					</div>
					<span class="copy-text">Copyright &copy; 2018 <a href="<?php echo base_url(); ?>"><?php echo $settings->company_name; ?></a> &nbsp; | &nbsp;  Tüm Hakları Saklıdır &nbsp; | &nbsp;  Software By <a href="https://netbilisimhizmetleri.net" target="__blank">Net Bilişim Hizmetleri</a></span>
					<div class="footer-intro">
						<p><?php echo $settings->vision; ?></p>
					</div>
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.primary-footer -->

	<div class="secondary-footer brand-bg darken-2 text-center">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url(); ?>">Anasayfa</a></li>
				<li><a href="<?php echo base_url("hakkimizda"); ?>">Hakkımızda</a></li>
				<li><a href="<?php echo base_url("hizmetlerimiz"); ?>">Hizmetlerimiz</a></li>
				<li><a href="<?php echo base_url("iletisim"); ?>">İletişim</a></li>
			</ul>
		</div><!-- /.container -->
	</div><!-- /.secondary-footer -->
</footer>