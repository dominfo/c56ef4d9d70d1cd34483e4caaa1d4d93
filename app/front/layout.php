<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" href="<?php echo DS.'css'.DS.'style.css' ?>">
	<!-- Bootstrap CSS link -->
	<link rel="stylesheet" href="<?php echo DS.'css'.DS.'bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo DS.'css'.DS.'bootstrap-theme.min.css' ?>">

	<script type="text/javascript" src="<?php echo DS.'js'.DS.'script.js' ?>" ></script>
	<!-- Bootstrap java script -->
	<script type="text/javascript" src="<?php echo DS.'js'.DS.'bootstrap.js' ?>" ></script>
	<script type="text/javascript" src="<?php echo DS.'js'.DS.'bootstrap.min.js' ?>" ></script>
	<script type="text/javascript" src="<?php echo DS.'js'.DS.'npm.js' ?>" ></script>
</head>
<body>
	<header>
		<?php require_once(ROOT.DS.'app'.DS.'front'.DS.'header.php') ?>
	</header>
	<content>
		<?php require_once(ROOT.DS.'app'.DS.'front'.DS.'content.php') ?>
	</content>
	<footer>
		<?php require_once(ROOT.DS.'app'.DS.'front'.DS.'footer.php') ?>
	</footer>
</body>
</html>