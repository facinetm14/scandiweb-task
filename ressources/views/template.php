<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<title><?= $title ?> </title>
</head>
<body>
	<?php include_once(PARTIALS . 'header.php'); ?>
	<main class="container">
		<?php include_once(PARTIALS . 'headline.php') ?>
		<hr/>
		<?= $body ?? '' ?>
	</main>
	<?php include_once(PARTIALS . 'footer.php'); ?>
</body>
</html>