<?php

class User
{
	private $id;
	private $name;
	private $lastName;
	private $mail;
	private $pwd;
	private $promo;
	private $ip;
	private $lastConnexion;
	private $role;

	public function User($id, $name, $lastName, $mail, $pwd, $promo, $ip, $lastConnexion, $role){
		if(!is_null($id))
		{
			$this->id = $id;
		}
		$this->name = $name;
		$this->lastName = $lastName;
		$this->mail = $mail;
		$this->pwd = $pwd;
		$this->promo = $promo;
		$this->ip = $ip;
		$this->lastConnexion = $lastConnexion;
		$this->role = $role;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
			$this->name = $name;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getMail(){
		return $this->mail;
	}

	public function setMail($mail){
		$this->mail = $mail;
	}

	public function getPwd(){
		return $this->pwd;
	}

	public function setPwd($pwd){
		$this->pwd = $pwd;
	}

	public function getPromo(){
		return $this->promo;
	}

	public function setPromo($promo){
		$this->promo = $promo;
	}

	public function getIp(){
		return $this->ip;
	}

	public function setIp($ip){
		$this->ip = $ip;
	}

	public function getLastConnexion(){
		return $this->lastConnexion;
	}

	public function setLastConnexion($lastConnexion){
		$this->lastConnexion = $lastConnexion;
	}

	public function getRole(){
		return $this->role;
	}

	public function setRole($role){
		$this->role = $role;
	}
}

?>