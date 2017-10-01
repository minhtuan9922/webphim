<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<link rel="icon" href="img/icon.png">
	<link href="<?php echo base_url(); ?>css/style.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>slide/themes/default/default.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>slide/themes/light/light.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>slide/themes/dark/dark.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>slide/nivo-slider.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>slide/style.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-3.0.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>slide/jquery.nivo.slider.js"></script>
<!--	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script> 
	<script type="text/javascript" src="js/jquery.form.js"></script> -->
	
<!--	<script src="jwplayer-7.10.1/jwplayer.js"></script>
	<script>jwplayer.key="JsryVjnFJeCi6TwzvGPxH4/rVf+1zJAhPQ4pcQ==";</script>-->
</head>

<body>
<div id="wrapper">
	<?php
		//include('admin/modules/config.php');
		//include('modules/header.php');
		//include('modules/content.php');
		//include('modules/footer.php');
		$this->load->view('layout/header');
		if(isset($slider))
		{
			$this->load->view($slider);
		}
		$this->load->view($content);
		$this->load->view('layout/footer');
	?>	
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '458308631171598',
		  xfbml      : true,
		  version    : 'v2.9'
		});
		FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/vi-VN/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	<body>

</div>	

</body>
</html>