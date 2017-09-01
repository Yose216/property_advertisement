<?php 
	include 'bdd.php'; //Connect to BDD
	include 'Class/Annonce.php';
	include 'Class/AnnonceManager.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	
		<title>Test POO php</title>	
        <link rel="stylesheet" href="css/style.css" />
	</head>
	<body>

		<h1>Les annonces en ligne</h1>

		<?php

			$annonce = new AnnonceManager($bdd);
			
			$value = array();
			$value = $annonce->all_ann();

			foreach ($value as $annonce) {
				echo $annonce->getTitle(), '<br />', $annonce->getStreet(), ' ', $annonce->getTown(), ' ', $annonce->getZip_Code(), '<br />', $annonce->getDescription(), '<br /> <br/ >';
			}

		?>

	</body>
</html>