<section class="section-padding latest-news-card gray-bg">
	<div class="container">
		<div class="text-center mb-80">
			<h2 class="section-title text-uppercase">Blog</h2>

		</div>
		<div class="blog-carousel">
		<?php foreach ($news as $news) { ?>
			<article class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="<?php echo get_picture("news_v", $news->img_url, "600x400"); ?>" alt="<?php echo $news->title; ?>" title="<?php echo $news->title; ?>">
				</div>
				<div class="card-content">
					<h2 class="entry-title activator"><?php echo $news->title; ?></h2>
				</div>
				<div class="card-reveal overlay-blue">
					<span class="card-title close-button"><i class="fa fa-times"></i></span>
					<h2 class="entry-title"><a href="<?php echo base_url("blog/1"); ?>"><?php echo $news->title; ?></a></h2>
					<p><?php echo character_limiter(strip_tags($news->description),101); ?></p>
					<a href="<?php echo base_url("blog/");echo $news->url; ?>" class="readmore">Devamını Oku... <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</article><!-- /.card -->
		<?php } ?>
		</div>
	</div><!-- /.container -->
</section>