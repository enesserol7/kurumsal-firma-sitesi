<section class="padding-top-110 padding-bottom-70 brand-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="quote-carousel text-center">
				<?php foreach ($testimonials as $testimonial) { ?>
					<div class="carousel-item">
						<div class="content">

							<h2 class="white-text line-height-40">"<?php echo $testimonial->title; ?>"</h2>
							<h2 class="white-text line-height-40">"<?php echo $testimonial->description; ?>"</h2>

							<div class="testimonial-meta font-20 text-extrabold white-text">
								<?php echo $testimonial->full_name; ?> | <?php echo $testimonial->company; ?>
							</div>
						</div><!-- /.content -->
					</div><!-- /.carousel-item -->
				<?php } ?>
				</div>
			</div><!-- /.col-md-8 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>