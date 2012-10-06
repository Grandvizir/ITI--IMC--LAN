<?php

class Event
{
	private $id;
	private $name;
	private $create;
	private $contenu;
	private $userId;
	private $page;


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

	public function getCreate(){
		return $this->create;
	}

	public function setCreate($create){
		$this->create = $create;
	}

	public function getContenu(){
		return $this->contenu;
	}

	public function setContenu($contenu){
		$this->contenu = $contenu;
	}


	public function getUserId(){
		return $this->userId;
	}

	public function setUserId($userId){
		$this->userId = $userId;
	}

	public function getPage(){
		return $this->page;
	}

	public function setPage($page){
		$this->page = $page;
	}
}


?>