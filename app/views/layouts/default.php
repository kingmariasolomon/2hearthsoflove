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
	<body>
		<div class="wrapper">
			<?php include 'banner.php'; ?>
			<div class="site-content" style="min-height: cal(100% - 125px);">
				<?= Session::displayMsg(); ?>
				<?= $this->content('body'); ?>
			</div>
			<?php include 'footer.php'; ?>
		</div>
		<script src="<?=PROOT?>assets/js/jquery-3.2.1.min.js"></script>
		<script src="<?=PROOT?>assets/js/uikit/anime.min.js"></script>
		<script src="<?=PROOT?>assets/js/uikit/owl.carousel.min.js"></script>
		
		<script src="<?=PROOT?>assets/js/uikit/uikit.min.js"></script>
		<script src="<?=PROOT?>assets/js/uikit/uikit-icons.min.js"></script>
		<script src="<?=PROOT?>assets/js/app.js"></script>
		<?= $this->content('foot'); ?>
	</body>
</html>