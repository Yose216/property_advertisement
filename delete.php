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

		<h1>Delete Annonce</h1>

		<?php 
						
			$request = $bdd->prepare('SELECT * FROM annonce WHERE id = :id');
			$request->execute(array('id' => $_GET['id']));

			$donnees = $request->fetch(PDO::FETCH_ASSOC);
			
			if(!empty($donnees)) {
				$annonce = new Annonce($donnees);
				
				$delete = new AnnonceManager($bdd);
				$delete->delete_ann($annonce);

				echo "Succes";
			}
			else {
				echo 'Error: nothing entry ' . $_GET['id'] .' for key ID';
			}

		?>

	</body>
</html>