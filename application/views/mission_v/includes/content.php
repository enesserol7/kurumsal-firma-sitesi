<?php $settings = get_settings(); ?>
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="font-30 text-medium mb-30">Misyonumuz</h2>
				<?php echo $settings->mission; ?>
			</div><!-- /.col-md-7 -->
			<div class="col-md-10 col-md-offset-1">
				<h2 class="font-30 text-medium mb-30">Vizyonumuz</h2>
				<?php echo $settings->vision; ?>
			</div><!-- /.col-md-7 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>