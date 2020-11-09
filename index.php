<?php
// start the database connection
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Raghav Bansal | Résumé</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900,900i|Raleway:300,400,700'>
	<!-- <?php $css_version = filemtime('./dist/style.css'); ?> -->
	<link rel="stylesheet" href="dist/style.css?ver=<?php echo $css_version; ?>">
</head>

<body style="color:black">
	<p>
		<div position=50 style="background-image: url('https://cdn.statically.io/gh/braghav968/Melanoma-Classification-Kaggle/ca54f57b/cool-background%20(2).png'); background-repeat:no-repeat;background-size: cover;">

		<div class="container resume">
			<?php include 'modules/sidebar.php'; ?>
			<div class="main">
				<?php
				include 'modules/education.php';
				include 'modules/experience.php';
				include 'modules/skills.php';
				include 'modules/soft-skills.php';
				include 'modules/links.php';
				?>
			</div>

		</div>
	</p>
</body>

</html>
