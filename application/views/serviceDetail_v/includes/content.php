<section class="blog-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="posts-content single-post">
					<article class="post-wrapper">
						<header class="entry-header-wrapper clearfix">
							<div class="entry-header">
								<h2 class="entry-title"><?php echo $page->title; ?></h2>
							</div>
						</header><!-- /.entry-header-wrapper -->
						<div class="thumb-wrapper">
							<img src="<?php echo get_picture("services_v", $page->img_url, "738x301"); ?>" alt="<?php echo $page->title; ?>" title="<?php echo $page->title; ?>" >
						</div><!-- .post-thumb -->
						<div class="entry-content">
							<?php echo $page->description; ?>
						</div><!-- .entry-content -->
					</article><!-- /.post-wrapper -->
				</div><!-- /.posts-content -->
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>