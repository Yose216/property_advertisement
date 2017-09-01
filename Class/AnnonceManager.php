<?php

class AnnonceManager {
    private $bdd; // Instance de PDO

    public function __construct($bdd) {
      $this->setbdd($bdd);
    }

    public function all_ann() {
        $q = $this->bdd->query('SELECT * FROM annonce order by id desc');

        $annonces = [];

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {

            $annonces[] = new Annonce($donnees);
        }
        
        return $annonces;

    }

    public function add(Annonce $annonce) {
        $q = $this->bdd->prepare('INSERT INTO annonce (id, title, type, surface, street, town, zip_code, price, description) VALUES(:id, :title, :type, :surface, :street, :town, :zip_code, :price, :description)');

        $q->bindValue(':id', $annonce->getId());
        $q->bindValue(':title', $annonce->getTitle());
        $q->bindValue(':type', $annonce->getType());
        $q->bindValue(':surface', $annonce->getSurface());
        $q->bindValue(':street', $annonce->getStreet());
        $q->bindValue(':town', $annonce->getTown());
        $q->bindValue(':zip_code', $annonce->getZip_code());
        $q->bindValue(':price', $annonce->getPrice());
        $q->bindValue(':description', $annonce->getDescription());

        $q->execute();
    }

    public function setbdd(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function update_ann(Annonce $annonce) {
        $q = $this->bdd->prepare('UPDATE annonce SET title = :title, type = :type, surface = :surface, street = :street, town = :town, zip_code = :zip_code, price = :price, description = :description WHERE id = :id');

        $q->bindValue(':id', $annonce->getId());
        $q->bindValue(':title', $annonce->getTitle());
        $q->bindValue(':type', $annonce->getType());
        $q->bindValue(':surface', $annonce->getSurface());
        $q->bindValue(':street', $annonce->getStreet());
        $q->bindValue(':town', $annonce->getTown());
        $q->bindValue(':zip_code', $annonce->getZip_code());
        $q->bindValue(':price', $annonce->getPrice());
        $q->bindValue(':description', $annonce->getDescription());

        $q->execute();

    }

    public function delete_ann (Annonce $annonce) {
        $q = $this->bdd->prepare('DELETE FROM annonce WHERE id = :id');

        $q->bindValue(':id', $annonce->getId());

        $q->execute();
    }
}

?>