<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
	<link rel="stylesheet" href="<?php echo DS.'css'.DS.'style.css' ?>">
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
<script type="text/javascript" src="<?php echo DS.'js'.DS.'script.js' ?>" ></script>
</body>
</html>