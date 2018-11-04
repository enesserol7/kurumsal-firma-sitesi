<section class="section-padding gray-bg">
	<div class="container">
		<div class="text-center mb-80">
			<h2 class="section-title text-uppercase">Hizmetlerimiz</h2>
		</div>
		<div class="row equal-height-row">
			<?php foreach ($all_services as $service) { ?>
				<div class="col-md-4 mb-30">
					<div class="featured-item border-box radius-4 hover brand-hover equal-height-column">

						<div class="desc">
							<a href="<?php echo base_url("hizmet/");echo $service->url; ?>"><h2><?php echo $service->title; ?></h2></a>
							<p><?php echo character_limiter(strip_tags($service->description),101); ?></p>
							<br>
							<a href="<?php echo base_url("hizmet/");echo $service->url; ?>" class="btn">İncele</a>
						</div>
					</div><!-- /.featured-item -->
				</div><!-- /.col-md-4 -->
			<?php } ?>-                                 
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>