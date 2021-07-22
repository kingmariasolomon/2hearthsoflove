<?php
use Core\Session;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?= $this->siteTitle('Two Hearts Of Love Delivarance Ministry, Enugu Nigeria'); ?></title>
		<link rel="icon" href="<?=ABS_PATH?>assets/logo/logo1.jpg" type="image/jpg">

		<!-- UIKIT -->
		<link href="<?=PROOT?>assets/css/uikit/uikit.min.css" rel="stylesheet">
		<link href="<?=PROOT?>assets/css/uikit/owl.carousel.min.css" rel="stylesheet">
		<link href="<?=PROOT?>assets/fonts/fontawesome/css/all.min.css" rel="stylesheet">
		<link href="<?=PROOT?>assets/css/custom.css" rel="stylesheet">

		<?= $this->content('head'); ?>
	</head>
	<body onLoad="">
		<div class="wrapper margin_left240 bg_light">
			<?php include 'admintemplates/header.php'; ?>
			<?php include 'admintemplates/sidenav.php'; ?>
			<div class="site-content" style="min-height: 100vh;">
				<?= Session::displayMsg(); ?>
				<?= $this->content('body'); ?>
			</div>
			<?php include 'admintemplates/footer.php'; ?>
		</div>
		<script src="<?=PROOT?>assets/js/jquery-3.2.1.min.js"></script>
		<script src="<?=PROOT?>assets/js/uikit/anime.min.js"></script>
		<script src="<?=PROOT?>assets/js/uikit/owl.carousel.min.js"></script>
		
		<script src="<?=PROOT?>assets/js/uikit/uikit.min.js"></script>
		<script src="<?=PROOT?>assets/js/uikit/uikit-icons.min.js"></script>
		<script src="<?=PROOT?>assets/fonts/fontawesome/js/all.min.js"></script>
		<script src="<?=PROOT?>assets/js/admin.js"></script>
		<script>
			$(document).ready(function(){
				$('.menu_icon').click(function () {
					$(".sidenav").toggleClass("width30")
					// $("body").toggleClass("side-menu-wrapper-container")
					// $("html").toggleClass("side-menu-wrapper-page")
					// $("#admin_side_menu").toggleClass("side-open").css({'display': 'block'})
					// $("#admin_side_menu").toggleClass("side-open uk-display-block")
					$('.wrapper').toggleClass("margin_left240 margin_left70");
				})
				// $('.nav-item').click(function () {
				// 	$(this).find(".uk-nav-sub").first().toggleClass("uk-hidden");
				// })
			}); 
		</script>
		<?= $this->content('foot'); ?>
	</body>
</html>