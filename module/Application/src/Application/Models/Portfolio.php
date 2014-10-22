<?php

namespace Application\Models;

class Portfolio {
	private $owner;
	private $pieces;
	private $medium;
	private $favoriteArtist;

	public function __construct() {
		// this is called a constructor. It gets executed as soon as create a new portfolio
		$this->favoriteArtist = "Andy Warhol";
	}

	public function getOwner() {
		return $this->owner;
	}

	public function setOwner($theNewOwner) {
		$this->owner = $theNewOwner;
	}

	public function getPieces() {
		return $this->pieces;
	}

	public function setPieces($theNewNumberOfPieces) {
		$this->pieces = $theNewNumberOfPieces;
	}
	public function getMedium() {
		return $this->medium;
	}
	public function setMedium ($stevesnads){
		$this->medium = $stevesnads;
	}

	public function setFavoriteArtist($newFavoriteArtist) {
		$this->favoriteArtist = $newFavoriteArtist;
	}

	public function getFavoriteArtist() {
		return $this->favoriteArtist;
	}
}