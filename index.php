<?php 
	include 'bdd.php'; //Connect to BDD
	include 'Class/Annonce.php';
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
			$request = $bdd->query('SELECT * FROM annonce order by id desc');
			    
			while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) {

			 	$annonces = new Annonce;
			 	$annonces->hydrate($donnees);
			 	//var_dump($annonces);
			        
			 	echo $annonces->getTitle(), '<br />', $annonces->getStreet(), ' ', $annonces->getTown(), ' ', $annonces->getZip_Code(), '<br />', $annonces->getDescription(), '<br /> <br/ >';
			}


		?>

	</body>
</html>