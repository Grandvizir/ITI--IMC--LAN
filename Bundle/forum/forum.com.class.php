<?php

class Commentaire
{
	private $id;
	private $userId;
	private $contenu;
	private $created;
	private $power;
	private $postId;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUserId(){
		return $this->userId;
	}

	public function setUserId($userId){
		$this->userId = $userId;
	}

	public function getContenu(){
		return $this->contenu;
	}

	public function setContenu($contenu){
		$this->contenu = $contenu;
	}

	public function getCreated(){
		return $this->created;
	}

	public function setCreated($created){
		$this->created = $created;
	}

	public function getPower(){
		return $this->power;
	}

	public function setPower($power){
		$this->power = $power;
	}

	public function getPostId(){
		return $this->postId;
	}

	public function setPostId($postId){
		$this->postId = $postId;
	}

}
?>