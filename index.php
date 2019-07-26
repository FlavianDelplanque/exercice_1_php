<?php $title = "Accueil";
session_start();
include "header_footer/header.php"; ?>

	<div id="divGlobalLogin">
		<form action="pageperso.php" method="POST">
			<label>Pseudo :</label><input type="text" name="pseudo" value="<?php if (isset($_SESSION['pseudo'])) {echo $_SESSION['pseudo'];}?>">
			<label>Mdp :</label><input type="text" name="mdp" value="<?php if (isset($_SESSION['mdp'])) {echo $_SESSION['mdp'];}?>">
			<input type="submit" id="submit" name="submit" value="Connexion"/>
		</form>
		<?php if (isset($_SESSION['pseudo'])&&isset($_SESSION['mdp'])){
		if ($_SESSION['pseudo']==""||$_SESSION['mdp']=="") { 
			echo "<p>Veuillez entrer des informations</p>";
		}
		else {
			echo "<p>Mauvais identifiant</p>";
		}
		}
		?>
	</div>

<?php include "header_footer/footer.php"; ?>