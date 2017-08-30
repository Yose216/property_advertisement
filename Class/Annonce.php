<?php

Class Annonce {

	public function hydrate(array $donnees) {
  
  		foreach ($donnees as $key => $value) {
    		// On récupère le nom du setter correspondant à l'attribut.
    		$method = 'set'.ucfirst($key);
        
    		// Si le setter correspondant existe.
    		if (method_exists($this, $method)) {
      			// On appelle le setter.
      			$this->$method($value);
      			
    		}
  		}
	}
	
	private $id;
	private $title;
	private $type;
	private $surface;
	private $street;
	private $town;
	private $zipCode;
	private $price;
	private $description;

	public function getId() {
		return $this->id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getType() {
		return $this->type;
	}

	public function getSurface() {
		return $this->surface;
	}

	public function getStreet() {
		return $this->street;
	}

	public function getTown() {
		return $this->town;
	}

	public function getZipCode() {
		return $this->zipCode;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setId($id) {
    
    	$id = (int) $id;
    
	    if ($id > 0) {
	      $this->_id = $id;
	    }
  	}

	public function setTitle($title) {
	    if (is_string($title)) {
	     	$this->title = $title;
    	}
  	}

  	public function setType($type) {
	    if (is_string($type)) {
	     	$this->type = $type;
    	}
  	}

  	public function setSurface($surface) {
    
    	$surface = (int) $surface;
    
	    if ($surface > 0) {
	      $this->surface = $surface;
	    }
  	}

  	public function setStreet($street) {
	    if (is_string($street)) {
	     	$this->street = $street;
    	}
  	}

  	public function setTown($town) {
	    if (is_string($town)) {
	     	$this->town = $town;
    	}
  	}

  	public function setZipCode($zipCode) {
    
    	$zipCode = (int) $zipCode;
    
	    if ($zipCode > 0) {
	      $this->zipCode = $zipCode;
	    }
  	}

  	public function setPrice($price) {
    
    	$price = (int) $price;
    
	    if ($price > 0) {
	      $this->price = $price;
	    }
  	}

  	public function setDescription($description) {
	    if (is_string($description)) {
	     	$this->description = $description;
    	}
  	}


}

?>