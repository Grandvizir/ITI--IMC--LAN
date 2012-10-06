<?php

class Post
{
	private $id;
	private $name;
	private $contenu;
	private $categorie;
	private $userId;
	private $created;
	private $lastModify;


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}


	public function getContenu(){
		return $this->contenu;
	}

	public function setContenu($contenu){
		$this->contenu = $contenu;
	}


	public function getCategorie(){
		return $this->categorie;
	}

	public function setCategorie($cat){
		$this->categorie = $cat;
	}

	public function getUserId(){
		return $this->userId;
	}

	public function setUserId($userId){
		$this->userId = $userId;
	}

	public function getCreated(){
		return $this->created;
	}

	public function setCreated($created){
		$this->created = $created;
	}

	public function getLastModify(){
		return $this->lastModify;
	}

	public function setLastModify($lastModify){
		$this->lastModify = $lastModify;
	}
}

?>