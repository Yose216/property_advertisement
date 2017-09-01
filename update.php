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

		<h1>Update Annonce</h1>

		<?php 
			$donnees = [
				'id' => $_GET['id'],
				'title' => 'Test ',
				'type' => 'Appartement',
				'surface' => 110,
				'street' => '10 rue du test',
				'town' => 'Rennes',
				'zip_code' => 35700,
				'price' => 140000,
				'description' => 'lorem ipsum it dolor aem'
			];

			$annonce = new Annonce($donnees);

			$request = $bdd->prepare('SELECT id FROM annonce WHERE id = :id');
			$request->execute(array('id' => $donnees['id']));
			
			
			if($request->fetchColumn() ==  $_GET['id']) {
				$update = new AnnonceManager($bdd);
				$update->update_ann($annonce);

				echo "succes";
				
			}
			else {
				echo 'Error: nothing entry ' . $donnees['id'] .' for key ID';
			}

		?>

	</body>
</html>