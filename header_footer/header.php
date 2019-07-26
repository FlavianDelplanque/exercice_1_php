<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title><?php if (empty($title)) { echo "Page défaut"; } else { echo $title; } ?></title>
	<style type="text/css">
		body {
			background-image: url(<?php echo "image/".$theme[$nombreTheme][2]; ?>);
		}
		* {
			<?php if ($title=="Page Perso") {
				echo "color:white;";
			} 
			else {
				echo "color:black;";
			}?>
		}
	</style>
</head>
<body>
<nav>
<!-- 	<a href="index.php">Accueil</a>
	<a href="pageperso.php">Page perso</a> -->
</nav>

