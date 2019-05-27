<?php
try
{
	$bdd = new PDO('pgsql:host=localhost;dbname=Portfolio', 'postgres', 'MpFleXoP', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$sth = $bdd->query('SELECT * FROM admin.message ORDER BY id DESC LIMIT 3');


if(isset($_POST['competences'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req = $bdd->prepare('INSERT INTO admin.competences(title_competences) VALUES(:competences)');

    $req->execute(array(
        'competences' => $_POST['competences']
    ));
}

if(isset($_POST['hobbies'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req1 = $bdd->prepare('INSERT INTO admin.hobbies(title_hobbies) VALUES(:hobbies)');

    $req1->execute(array(
        'hobbies' => $_POST['hobbies']
    ));
}

 if(isset($_POST['name_message']) && isset($_POST['mail_message']) && isset($_POST['text_message'])){

        // ajout d'entrée dans la table plante de la base de données plante.
    $req2 = $bdd->prepare('INSERT INTO admin.message(name_message, mail_message, text_message) VALUES(:name_message, :mail_message, :text_message)');

    $req2 -> execute(array(
        'name_message' => $_POST['name_message'],
        'mail_message' => $_POST['mail_message'],
        'text_message' => $_POST['text_message']
    ));
}


 if(isset($_POST['name_parcours']) && isset($_POST['datedebut_parcours']) && isset($_POST['datefin_parcours'])){

        // ajout d'entrée dans la table plante de la base de données plante.
    $req3 = $bdd->prepare('INSERT INTO admin.parcours(name_parcours, datedebut_parcours, datefin_parcours) VALUES(:name_parcours, :datedebut_parcours, :datefin_parcours)');

    $req3->execute(array(
        'name_parcours' => $_POST['name_parcours'],
        'datedebut_parcours' => $_POST['datedebut_parcours'],
        'datefin_parcours' => $_POST['datefin_parcours']
    ));
}

if(isset($_POST['name_presentation']) && isset($_POST['text_presentation']) && isset($_POST['photochemin_presentation'])){

        // ajout d'entrée dans la table plante de la base de données plante.
    $req4 = $bdd->prepare('INSERT INTO admin.presentation(name_presentation, text_presentation, photochemin_presentation) VALUES(:name_presentation, :text_presentation, :photochemin_presentation)');

    $req4->execute(array(
        'name_presentation' => $_POST['name_presentation'],
        'text_presentation' => $_POST['text_presentation'],
        'photochemin_presentation' => $_POST['photochemin_presentation']
    ));
}


 if(isset($_POST['name_realisations']) && isset($_POST['imagechemin_realisations']) && isset($_POST['lien_realisations'])){

        // ajout d'entrée dans la table plante de la base de données plante.
    $req5 = $bdd->prepare('INSERT INTO admin.realisations(name_realisations, imagechemin_realisations, lien_realisations) VALUES(:name_realisations, :imagechemin_realisations, :lien_realisations)');

    $req5->execute(array(
        'name_realisations' => $_POST['name_realisations'],
        'imagechemin_realisations' => $_POST['imagechemin_realisations'],
        'lien_realisations' => $_POST['lien_realisations']
    ));
}


if(isset($_POST['techno'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req6 = $bdd->prepare('INSERT INTO admin.techno(title_techno) VALUES(:techno)');

    $req6 ->execute(array(
        'techno' => $_POST['techno']
    ));
}



?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="image/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Admin</title>
	</head>
	<body class="admin">
 		<header>
 			<p>Administration</p>
		</header>

		<!-- Message -->
		<form class="regularform message">
			<h2>Messages</h2>
				<div class="exemple">
					<p>Nom</p>
					<p>Mail</p>
					<p>Message</p>
				</div>

				<?php
					while ($row = $sth->fetch(PDO::FETCH_ASSOC)):
					?>
				<div>
					<p><?=$row['name_message']?></p>
					<p><?=$row['mail_message']?></p>
					<p><?=$row['text_message']?></p>
				</div>
				<?php
						endwhile;
				?>
		</form>

		<!-- Présentation -->
		<form class="regularform" name="form1" method="post" action="admin.php">
			<p>Présentation</p>
			<div class="labelLeft">
				<label>Nom et Prénom</label>
				<input type="text" name="name_presentation" placeholder="Nom et Prénom">
			</div>
			<input type="file" name="photochemin_presentation" id="pp">
			<div class="alignLabel del">
				<span>Photo de profil</span><label for="pp">Choisir un fichier</label>
			</div>
			<label for="textarea">Paragraphe de présentation</label>
			<textarea name="text_presentation"></textarea>
			<input type="submit" value="Enregistrer">
		</form>

		<!-- Passions -->
		<form class="thinform" name="form2" method="post" action="admin.php">
			<p>Passions</p>
			<div class="formlik">
				<div>
					<label>Nom de l'activité</label>
				</div>
				<div>
					<input type="text" name="hobbies" placeholder="Activité">
				</div>
			</div>
			<input type="submit" value="Enregistrer">
		</form>

		<!-- Nom -->
		<form class="thinform" name="form3" method="post" action="admin.php">
			<p>Compétences</p>
			<div class="formskill">
				<div>
					<label>Nom de la compétence</label>
				</div>
				<div>
					<input type="text" name="competences" placeholder="Compétence">
				</div>
			</div>
			<input type="submit" value="Enregistrer">
		</form>

		<!-- Parcours -->
		<form class="mediumform" name="form4" method="post" action="admin.php">
			<p class="titleparcours">Parcours</p>
			<div class="formparcours">
				<div>
					<label>Date de Début/Fin</label>
					<input type="date" name="datedebut_parcours" placeholder="Date de Début">
					<input type="date" name="datefin_parcours" placeholder="Date de Fin">
				
				</div>
				<div>
					<label>Nom du dîplome/travail</label>
					<input type="text" name="name_parcours" placeholder="Diplôme/Travail">
				</div>
			</div>
			<input type="submit" value="Enregistrer">
		</form>

		<!-- Réalisations -->
		<form class="regularform" name="form5" method="post" action="admin.php">
			<p>Réalisations</p>

			<!-- Projet -->
			<div class="labelLeft labelPR">
				<label>Nom du projet</label>
				<input type="text" name="name_realisations" placeholder="Nom du projet">
			</div>
			<div class="labelLeft">
				<label>Lien vers le projet</label>
				<input type="text" name="lien_realisations" placeholder="Lien du projet">
			</div>
				<input type="file" name="imagechemin_realisations" id="img1">
				<div class="alignLabel">
					<span>Photo du projet</span><label for="img1">Choisir un fichier</label>
				</div>
			<div class="labelLeft">
				<label>Technologie Utilisé</label>
				<input type="text" name="techno" placeholder="Techno utilisé">
			</div>

			<input type="submit" value="Enregistrer">			
		</form>
	</body>
</html>