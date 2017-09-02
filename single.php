<?php 
	include 'bdd.php'; //Connect to BDD
	include 'Class/Annonce.php';
	include 'Class/AnnonceManager.php';

	$get_annonce = New AnnonceManager($bdd);

	$id = $_GET['id'];
	
	$annonce = $get_annonce->one_ann($id);
	
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

		<h1><?php echo $annonce->getTitle(); ?></h1>
		<p><?php echo $annonce->getPrice(), '€ ', $annonce->getSurface(), 'm² ', $annonce->getStreet(), ' ', $annonce->getTown(), ' ', $annonce->getZip_Code(); ?></p>
		<p><?php echo $annonce->getDescription(); ?></p>

	</body>
</html>