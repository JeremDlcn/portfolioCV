<?php
try
{
	$bdd = new PDO('pgsql:host=localhost;dbname=Portfolio', 'postgres', 'MpFleXoP', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$sth = $bdd->query('SELECT * FROM admin.presentation ORDER BY id DESC');
$sth2 = $bdd->query('SELECT * FROM admin.hobbies ORDER BY id DESC');
$sth3 = $bdd->query('SELECT * FROM admin.competences ORDER BY id_competences DESC');
$sth4 = $bdd->query('SELECT * FROM admin.parcours ORDER BY datedebut_parcours ASC');
$sth5 = $bdd->query('SELECT * FROM admin.realisations ORDER BY id DESC');
$sth6 = $bdd->query('SELECT * FROM admin.techno ORDER BY id DESC');

$row = $sth->fetch(PDO::FETCH_ASSOC);

$nom = $row['name_presentation'];
$nom = explode(" ", $nom);
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Ce site est mon Portfolio/CV il vous permet connaître mes compétences et mes projets réalisés.">
		<meta name="keywords" content="Portfolio, CV, Compétences, Informatique, Développement, Ynov, B1, première année, projets">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="image/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Portfolio</title>
	</head>
	<body>
		<!--Menu-->
 		<header>
			<nav class="menu">
				<div class="arrow">
					<img src="image/arrow.svg" alt="retour à l'accueil"/>
				</div>
				<ul>
					<a href="#"><li>Présentation</li></a>
					<a href="#passions"><li>Hobbies</li></a>
					<a href="#competences"><li>Compétences</li></a>
					<a href="#parcours"><li>Parcours</li></a>
					<a href="#realisations"><li>Réalisations</li></a>
				</ul>
			</nav>
			<div class="contact">
				<a href="contact.php"><img src="image/envelope.svg" alt="contact"></a>
			<p class="textcontact">Contact</p>
			</div>
			<div class="circle">
				<span class="button">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</span>
			</div>
		</header>


		<!-- Présentation-->
		 <section id="presentation">
			<img src="image/<?=$row['photochemin_presentation']?>" alt="Photo de profil">
			<p><span class="color"><?=$nom['0']?></span> <?=$nom['1']?></p>
		</section>
		<!-- Top -->
			<svg id="curveUpColor" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path d="M0 100 C 20 0 50 0 100 100 Z"/>
			</svg>
			<div class="colorsvg">

		<!-- Texte de présentation -->
		<section id="para">
			<p class="paragraphe"><?=$row['text_presentation']?></p>
		</section>
		<!--Passions-->
		<section id="passions">
			<h3 class="titre">Passions</h3>
			<div>
				<?php
					while ($row2 = $sth2->fetch(PDO::FETCH_ASSOC)):
					?>
				<p><?=$row2['title_hobbies']?></p>
				<?php
					endwhile;
				?>
			</div>
		</section>

		<!--Compétences-->
		<section id="competences">
			<h3 class="titre">Competences</h3>
			<div>
				<?php
					while ($row3 = $sth3->fetch(PDO::FETCH_ASSOC)):
				?>
					<p><?=$row3['title_competences']?></p>
				<?php
					endwhile;
				?>
			</div>
		</section>

		<!--Parcours-->
		<section id="parcours">
			<h3 class="titre">Parcours</h3>
				<div class="calendar">
								<div class="line"></div>
								<div class="timedots">
									<div class="dot"></div>
									<div class="dot"></div>
									<div class="dot"></div>
								</div>
					<div class="textparcours">						
							<?php
								while ($row4 = $sth4->fetch(PDO::FETCH_ASSOC)):
							?>
							<div>
								<p><?=$row4['datedebut_parcours']?> &nbsp -  &nbsp <?=$row4['datefin_parcours']?></p><p><?=$row4['name_parcours']?></p>
							</div>
							<?php
								endwhile;
							?>	
					</div>

				</div>
		</section>
		</div>
		<!-- Bottom -->
			<svg id="curveDownColor" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path d="M0 0 C 50 100 80 100 100 0 Z"/>
			</svg>

		<!--Réalisations-->
		<section id="realisations">
			<h3 class="titre2">Réalisations</h3>
			<h4 class="center">Sites Web/Concepts</h4>
			<div class="interface">
				<?php
					while ($row5 = $sth5->fetch(PDO::FETCH_ASSOC)):
				?>
					<a href="<?=$row5['lien_realisations']?>">
						<div class="projet">
							<div><img src="image/<?=$row5['imagechemin_realisations']?>" alt="" /></div>
							<div><i class="fas fa-sort-up"></i>
								<h4>Technologie Utilisés</h4>
								<?php
										while ($row6 = $sth6->fetch(PDO::FETCH_ASSOC)):
										?>
									<p><?=$row6['title_techno']?></p>
									<?php
										endwhile;
									?>	
								<div class="technos">

								</div>
							</div>
						</div><?=$row5['name_realisations']?>
					</a>
				<?php
					endwhile;
				?>						
			</div>
		</section>
		<script type="text/javascript" src="main.js"></script>
	</body>
</html>