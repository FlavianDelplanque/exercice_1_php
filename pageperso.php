<?php $title = "Page Perso";
session_start();
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['mdp'] = $_POST['mdp'];
if ($_POST['pseudo']==""||$_POST['mdp']=="") {
	header('Location: index.php');
}
elseif ($_POST['pseudo']=="Jordan"&&$_POST['mdp']=="Jordan") {
	$nombreTheme = 0;
}
elseif ($_POST['pseudo']=="Michel"&&$_POST['mdp']=="Michel") {
	$nombreTheme = 1;
}
elseif ($_POST['pseudo']=="Claude"&&$_POST['mdp']=="Claude") {
	$nombreTheme = 2;
}
else {
	header('Location: index.php');
}
$theme = array(
			array('photodecouverture1.jpg','photodeprofil1.jpg',"fondecran1.jpg"),
			array('photodecouverture2.jpg','photodeprofil2.jpg',"fondecran2.jpg"),
			array('photodecouverture3.jpg','photodeprofil3.jpg',"fondecran3.jpg"),
		);
include "header_footer/header.php"; 
?>

<header style="background-image: url(<?php echo "image/".$theme[$nombreTheme][0]; ?>);">
	<div style="background-image: url(<?php echo "image/".$theme[$nombreTheme][1] ?>);" id="imageDeProfil"></div>
	<h2 id="Nom"><?php echo $_SESSION['pseudo'] ?></h2>
</header>

<div id="divGlobal">
	<h2>Présentation</h2>
	<p id="pPresentation">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<form action="logout.php" method="POST">
	<input type="submit" id="submit" name="submit" value="Déco"/>
</form>

<?php include "header_footer/footer.php"; ?>