<?php
require_once("/DAO/dao.php");

class Contact extends DAO
{
  	private $id;
	private $name;
	private $lastName;
	private $mail;
	private $content;
	private $ip;
	private $sendTime;
	private $view;

	public function newContact(Contact $event)
	{
		$bdd = Contact::getPdoConnexion();
		$req = $bdd->prepare('INSERT INTO contact(name, lastName, mail, contenu, ip, sendTime) VALUES(:name, :lastName, :mail, :content, :ip, :sendTime)');
		$req->execute(array(
					'name' => $event->getName(),
					'lastName' => $event->getLastName(),
					'mail' => $event->getMail(),
					'content' => $event->getContent(),
					'ip' => $event->getIp(),
					'sendTime' => $event->getSendTime()
				));

	}

	public function getAllContact(){
		$bdd = Contact::getPdoConnexion();
		$reponse = $bdd->query('SELECT * FROM contact');
		$array = array();

		while($donnees = $reponse->fetch())
		{
			$cont = new Contact();
			$cont->setId($donnees['id']);
			$cont->setName($donnees['name']);
			$cont->setLastName($donnees['lastName']);
			$cont->setIp($donnees['ip']);
			$cont->setMail($donnees['mail']);
			$cont->setContent($donnees['contenu']);
			$cont->setSendTime($donnees['sendTime']);
			$cont->setView($donnees['view']);
			//more
			array_push($array, $cont);
		}
		return $array;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
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

	public function getContent(){
		return $this->content;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function getIp(){
		return $this->ip;
	}

	public function setIp($ip){
		$this->ip = $ip;
	}

	public function getSendTime(){
		return $this->sendTime;
	}

	public function setSendTime($sendTime){
		$this->sendTime = $sendTime;
	}

	public function getView(){
		return $this->view;
	}

	public function setView($view){
		$this->view = $view;
	}
}

?>