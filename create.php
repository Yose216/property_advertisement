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

		<h1>Create Annonce</h1>

		<?php 
			$d = [
				'id' => 3,
				'title' => 'Test add',
				'type' => 'Appartement',
				'surface' => 110,
				'street' => '10 rue du test',
				'town' => 'Rennes',
				'zip_code' => 35700,
				'price' => 140000,
				'description' => 'lorem ipsum it dolor aem'
			];

			$annonce = new Annonce;
			$annonce->hydrate($d);

			$request = $bdd->prepare('SELECT id FROM annonce WHERE id = :id');
			$request->execute(array('id' => $d['id']));
			
			if($request->fetchColumn() ==  false) {
				// $create = new AnnonceManager($bdd);
				// $create->add($annonce);
				
			}
			else {
				echo 'Error: Duplicate entry ' . $d['id'] .' for key ID';
			}

		?>

	</body>
</html>