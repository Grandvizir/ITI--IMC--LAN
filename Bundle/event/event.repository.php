<?php

require_once("class.event.php");
require_once("DAO/dao.php");

class EventRepository extends DAO
{
	public function getAllEvent()
	{
		$bdd = EventRepository::getPdoConnexion();
		$reponse = $bdd->query('SELECT * FROM event');
		$array = array();
		if($reponse)
		{
			while($donnees = $reponse->fetch())
			{
				$event = New Event();

				$event->setId($donnees['id']);
				$event->setName($donnees['name']);
				$event->setCreate($donnees['create']);
				$event->setContenu($donnees['contenu']);
				$event->setUserId($donnees['userId']);

				array_push($array, $event);
			}
		}
		return $array;
	}

	public function flushNewEvent(Event $event)
	{
		$bdd = EventRepository::getPdoConnexion();
		$req = $bdd->prepare('INSERT INTO event(name, create, contenu, userId) VALUES(:name, :create, :contenu, :userId)');
		$req->execute(array(
					'name' => $event->getName(),
					'create' => $event->getCreate(),
					'contenu' => $event->getContenu(),
					'userId' => $event->getUserId()
				));
	}

	public function getEventById($id){

	}
}

?>