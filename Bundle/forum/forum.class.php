<?php

class Forum
{
	private $listCat;
	private $listPost;
	private $listCom;

	public function getListCat(){
		return $this->listCat;
	}

	public function setListCat($listCat){
		if(is_array($listCat)){
			$this->listCat = $listCat;
		}
	}

	public function getListPost(){
		return $this->listPost;
	}

	public function setListPost($ListPost){
		$this->listPost = $ListPost;
	}

	public function getListCom(){
		return $this->listCom;
	}

	public function setListCom($ListCom){
		$this->listCom = $ListCom;
	}
}

?>