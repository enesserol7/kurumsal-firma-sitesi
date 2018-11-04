<?php $settings = get_settings(); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php if ($page == "") { ?>
		<title>Ana Sayfa | <?php echo $settings->company_name; ?></title>
	<?php }else{ ?>
		<title><?php echo $page->title; ?> | <?php echo $settings->company_name; ?></title>
	<?php } ?>
	<?php if ($page == "") { ?>
		<meta name="keywords" content="<?php echo $settings->site_keyw; ?>" />
		<meta name="description" content="<?php echo $settings->site_desc; ?>" />
	<?php }else{ ?>
		<meta name="keywords" content="<?php echo $page->keyw ?>" />
		<meta name="description" content="<?php echo $page->desc; ?>" />
	<?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--  favicon -->
	<?php if($settings->logo == "default") { $favicon_image = base_url("assets") . "/img/ico/favicon.png";
	} else { $favicon_image = get_picture("settings_v", $settings->favicon, "32x32"); }?>
	<link rel="shortcut icon" href="<?php echo $favicon_image; ?>">
	<!--  apple-touch-icon -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("assets/"); ?>img/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="a<?php echo base_url("assets/"); ?>mg/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("assets/"); ?>img/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url("assets/"); ?>img/ico/apple-touch-icon-57-precomposed.png">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
	<!-- FontAwesome CSS -->
	<link href="<?php echo base_url("assets/"); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Material Icons CSS -->
	<link href="<?php echo base_url("assets/"); ?>fonts/iconfont/material-icons.css" rel="stylesheet">
	<!-- magnific-popup -->
	<link href="<?php echo base_url("assets/"); ?>magnific-popup/magnific-popup.css" rel="stylesheet">
	<!-- owl.carousel -->
	<link href="<?php echo base_url("assets/"); ?>owl.carousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url("assets/"); ?>owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<!-- flexslider -->
	<link href="<?php echo base_url("assets/"); ?>flexSlider/flexslider.css" rel="stylesheet">
	<!-- materialize -->
	<link href="<?php echo base_url("assets/"); ?>materialize/css/materialize.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="<?php echo base_url("assets/"); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- shortcodes -->
	<link href="<?php echo base_url("assets/"); ?>css/shortcodes/shortcodesae52.css?v=5" rel="stylesheet">
	<!-- Style CSS -->
	<?php $this->load->view("includes/styleae52"); ?>
	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>revolution/css/settings.css">
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>revolution/css/navigation.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <?php echo $settings->analytics; ?>
	<?php echo $settings->metrica; ?>
	<!-- Live Support -->
	<?php echo $settings->live_support; ?>
  </head>