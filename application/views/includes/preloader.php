<?php $settings = get_settings(); ?>
<div id="preloader">
	<div class="preloader-position"> 
		<img src="<?php echo get_picture("settings_v", $settings->logo, "212x50"); ?>" alt="<?php echo $settings->company_name; ?>" title="<?php echo $settings->company_name; ?>" >
		<div class="progress">
			<div class="indeterminate"></div>
		</div>
	</div>
</div>