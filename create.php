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

		<form action="" method="post">
 			<p>Titre : <input type="text" name="title" /></p>
 			<p>Type : <input type="text" name="type" required/></p>
 			<p>Surface : <input type="number" name="surface" required/></p>
 			<p>Street : <input type="text" name="street" required/></p>
 			<p>Town : <input type="text" name="town" required/></p>
 			<p>Zip code : <input type="number" name="zip_code" required/></p>
 			<p>Price : <input type="number" name="price" required/></p>
 			<p>Description : <textarea name="description" required></textarea></p>
 			<p><input type="submit" value="Submit"></p>
		</form>

		<?php 
			$donnees = [
				'title' => $_POST['title'],
				'type' => $_POST['type'],
				'surface' => $_POST['surface'],
				'street' => $_POST['street'],
				'town' => $_POST['town'],
				'zip_code' => $_POST['zip_code'],
				'price' => $_POST['price'],
				'description' => $_POST['description']
			];

			function trim_donnees(&$donnees) {
    			$donnees = trim($donnees);
			}
			
			if($_SERVER['REQUEST_METHOD'] === "POST") {
				array_walk($donnees, 'trim_donnees');

				if(!empty($donnees['title']) && !empty($donnees['type']) && !empty($donnees['surface']) &&  !empty($donnees['street']) && !empty($donnees['town']) && !empty($donnees['zip_code']) && !empty($donnees['price']) && !empty($donnees['description']) ) {
					$annonce = new Annonce($donnees);
					$create = new AnnonceManager($bdd);
					$create->add_ann($annonce);

					echo "Succes";
				}
				else {
					echo 'Please complete all input';
				}
			}

		?>

	</body>
</html>