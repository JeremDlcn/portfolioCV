<?php
try
{
	$bdd = new PDO('pgsql:host=localhost;dbname=Portfolio', 'postgres', 'MpFleXoP', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
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


?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Cette page permet de me contacter, pour avoir plus d'informations sur un sujet">
		<meta name="keywords" content="Portfolio, CV, Compétences, Informatique, Développement, Ynov, B1, première année, projets,Contact">
		<link rel="icon" type="image/png" href="image/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Contact</title>
	</head>
	<body class="bodycontact">
		<!--bouton de retour-->
		<a href="index.html">
			<div class="arrowcontact">
				<img src="image/arrow.svg" alt="retour à l'accueil"/>
			</div>
		</a>

		<p>Contact</p>

		<!-- Formulaire -->
		<form method="post" action="contact.php">
			<span>
				<input type="text" name="name_message" placeholder="Nom" /><!-- Champ d'entrée du nom -->
				<input type="email" name="mail_message" placeholder="Adresse mail" required /><!-- Champ d'entrée du mail -->
			</span>
			<textarea name="text_message" placeholder="Saisissez votre message"></textarea><!-- Champ d'entrée du message -->
			<button type="submit" name="Envoyer">Envoyer</button><!--bouton d'envoi du formulaire-->
		</form>


		<!-- Background SVG -->

		<svg class="svgFill2" viewBox="18663.594 3402.031 248.771 240.362">
			<path id="svgFill2" d="M 18663.59375 3402.256591796875 L 18912.365234375 3402.031494140625 C 18912.365234375 3402.031494140625 18910.072265625 3545.266845703125 18823.2578125 3603.892333984375 C 18736.44140625 3662.517578125 18663.59375 3636.757568359375 18663.59375 3636.757568359375 C 18663.59375 3636.757568359375 18663.59375 3402.256591796875 18663.59375 3402.256591796875 Z">
			</path>
		</svg>
	</body>
</html>