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
				<div>
					<p>Google</p>
					<p>contact@google.com</p>
					<p>Bonjour, nous avons vu votre portfolio</p>
				</div>
				<div>
					<p>Amazon</p>
					<p>contact@amazon.fr</p>
					<p>Votre profil nous intéresse</p>
				</div>
				<div>
					<p>SpaceW</p>
					<p>contact@spacex.fr</p>
					<p>Aidez nous à lancer nos fusées grâce à vos compétences</p>
				</div>
		</form>

		<!-- Présentation -->
		<form class="regularform">
			<p>Présentation</p>
			<div class="labelLeft">
				<label>Nom et Prénom</label>
				<input type="text" name="adminname" placeholder="Nom et Prénom">
			</div>
			<input type="file" name="photoprofil" id="pp">
			<div class="alignLabel del">
				<span>Photo du projet</span><label for="pp">Choisir un fichier</label>
			</div>
			<label for="textarea">Paragraphe de présentation</label>
			<textarea></textarea>
		</form>

		<!-- Passions -->
		<form class="regularform">
			<p>Passions</p>
			<div class="formlik">
				<div>
					<label>Nom de l'activité</label>
					<label>Nom de l'activité</label>
					<label>Nom de l'activité</label>
				</div>
				<div>
					<input type="text" name="activity1" placeholder="Nom Activité">
					<input type="text" name="activity2" placeholder="Nom Activité">
					<input type="text" name="activity3" placeholder="Nom Activité">
				</div>
				<div>
					<label>Nom de l'activité</label>
					<label>Nom de l'activité</label>
					<label>Nom de l'activité</label>
				</div>
				<div>
					<input type="text" name="activity4" placeholder="Nom Activité">
					<input type="text" name="activity5" placeholder="Nom Activité">
					<input type="text" name="activity6" placeholder="Nom Activité">
				</div>
		</div>
		</form>

		<!-- Competences -->
		<form class="regularform">
			<p>Compétences</p>
			<div class="formskill">
				<div>
					<label>Nom de la compétence</label>
					<label>Nom de la compétence</label>
					<label>Nom de la compétence</label>
					<label>Nom de la compétence</label>
				</div>
				<div>
					<input type="text" name="skill1" placeholder="Nom compétence">
					<input type="text" name="skill2" placeholder="Nom compétence">
					<input type="text" name="skill3" placeholder="Nom compétence">
					<input type="text" name="skill4" placeholder="Nom compétence">
				</div>
				<div>
					<label>Nom de la compétence</label>
					<label>Nom de la compétence</label>
					<label>Nom de la compétence</label>
					<label>Nom de la compétence</label>
				</div>
				<div>
					<input type="text" name="skill5" placeholder="Nom compétence">
					<input type="text" name="skill6" placeholder="Nom compétence">
					<input type="text" name="skill7" placeholder="Nom compétence">
					<input type="text" name="skill8" placeholder="Nom compétence">
				</div>
			</div>
		</form>

		<!-- Parcours -->
		<form class="regularform">
			<p>Parcours</p>
			<div class="formparcours">
				<div>
					<label>Date de Début/Fin</label>
					<label>Date de Début/Fin</label>
					<label>Date de Début/Fin</label>
				</div>
				<div>
					<input type="text" name="date1" placeholder="Date">
					<input type="text" name="date2" placeholder="Date">
					<input type="text" name="date3" placeholder="Date">
				</div>
				<div>
					<label>Nom du dîplome/travail</label>
					<label>Nom du dîplome/travail</label>
					<label>Nom du dîplome/travail</label>
				</div>
				<div>
					<input type="text" name="study1" placeholder="Diplôme/Travail">
					<input type="text" name="study2" placeholder="Diplôme/Travail">
					<input type="text" name="study3" placeholder="Diplôme/Travail">
				</div>
			</div>
		</form>

		<!-- Réalisations -->
		<form class="largeform">
			<p>Réalisations</p>

			<!-- Projet -->
			<div class="labelLeft labelPR">
				<label>Nom du projet</label>
				<input type="text" name="projectname1" placeholder="Nom du projet">
			</div>
			<div class="labelLeft">
				<label>Lien vers le projet</label>
			<input type="text" name="link1" placeholder="Lien du projet">
			</div>
			<input type="file" name="image1" id="img1">
			<div class="alignLabel">
				<span>Photo du projet</span><label for="img1">Choisir un fichier</label>
			</div>
			

			<!-- Projet -->
			<div class="labelLeft labelPR">
				<label>Nom du projet</label>
				<input type="text" name="projectname2" placeholder="Nom du projet">
			</div>
			<div class="labelLeft">
				<label>Lien vers le projet</label>
				<input type="text" name="link2" placeholder="Lien du projet">
			</div>
			<input type="file" name="image2" id="img2">
			<div class="alignLabel">
				<span>Photo du projet</span><label for="img1">Choisir un fichier</label>
			</div>
			

			<!-- Projet -->
			<div class="labelLeft labelPR">
				<label>Nom du projet</label>
				<input type="text" name="projectname3" placeholder="Nom du projet">
			</div>
			<div class="labelLeft">
				<label>Lien vers le projet</label>
				<input type="text" name="link3" placeholder="Lien du projet">
			</div>
			<input type="file" name="image3" id="img3">
			<div class="alignLabel">
				<span>Photo du projet</span><label for="img1">Choisir un fichier</label>
			</div>
			

			<!-- Projet -->
			<div class="labelLeft labelPR">
				<label>Nom du projet</label>
				<input type="text" name="projectname4" placeholder="Nom du projet">
			</div>
			<div class="labelLeft">
				<label>Lien vers le projet</label>
				<input type="text" name="link4" placeholder="Lien du projet">
			</div>
			<input type="file" name="image4" id="img4">
			<div class="alignLabel">
				<span>Photo du projet</span><label for="img1">Choisir un fichier</label>
			</div>
			

			<!-- Projet -->
			<div class="labelLeft labelPR">
				<label>Nom du projet</label>
				<input type="text" name="projectname5" placeholder="Nom du projet">
			</div>
			<div class="labelLeft">
				<label>Lien vers le projet</label>
				<input type="text" name="link5" placeholder="Lien du projet">
			</div>
			<input type="file" name="image5" id="img5">
			<div class="alignLabel">
				<span>Photo du projet</span><label for="img1">Choisir un fichier</label>
			</div>


			
			<!-- Projet -->
			<div class="labelLeft labelPR">
				<label>Nom du projet</label>
				<input type="text" name="projectname6" placeholder="Nom du projet">
			</div>
			<div class="labelLeft">
				<label>Lien vers le projet</label>
				<input type="text" name="link6" placeholder="Lien du projet">
			</div>
			<input type="file" name="image6" id="img6">
			<div class="alignLabel">
				<span>Photo du projet</span><label for="img1">Choisir un fichier</label>
			</div>
			
		</form>
	</body>
</html>