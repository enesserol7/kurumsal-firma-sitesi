<?php $settings = get_settings(); ?>
<div class="top-bar light-blue visible-md visible-lg">
	<div class="container">
		<div class="row">
			<!-- Social Icon -->
			<div class="col-md-6">
				<!-- Social Icon -->
				<ul class="list-inline social-top tt-animate btt">
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
			</div>
			<div class="col-md-6 text-right">
				<ul class="topbar-cta no-margin">
					<li class="mr-20">
						<a><i class="material-icons mr-10">&#xE0B9;</i><?php echo $settings->email; ?></a>
					</li>
					<li>
						<a><i class="material-icons mr-10">&#xE0CD;</i> <?php echo $settings->phone_1; ?></a>
					</li>
				</ul>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div>