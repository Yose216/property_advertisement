<?php

Class Annonce {
	
	private $id;
	private $title;
	private $type;
	private $street;
	private $town;
	private $zipCode;
	private $price
	private $description;

	public function getId () {
		$this->id = $id;
	}

	public function getTitle () {
		$this->title = $title;
	}

	public function getType () {
		$this->type = $type;
	}

	public function getStreet () {
		$this->street = $street;
	}

	public function getTown () {
		$this->town = $town;
	}

	public function getZipCode () {
		$this->zipCode = $zipCode;
	}

	public function getPrice () {
		$this->price = $price;
	}

	public function getDescription () {
		$this->description = $description;
	}



}