<?php


require_once('dao.php');

class UserRepository extends DAO
{

	public function flushNewUser(User $user){

		$bdd = UserRepository::getPdoConnexion();
		$req = $bdd->prepare('INSERT INTO user(name, lastName, mail, pwd, promo, ip, lastConnexion) VALUES(:name, :lastName, :mail, :pwd, :promo, :ip, :lastConnexion)');
		$req->execute(array(
						'name' => $user->getName(),
						'lastName' => $user->getLastName(),
						'mail' => $user->getMail(),
						'pwd' => $user->getPwd(),
						'promo' => $user->getPromo(),
						'ip' => $user->getIp(),
						'lastConnexion' => $user->getLastConnexion()
					));

	}

	public function getAllMembre(){
		$bdd = UserRepository::getPdoConnexion();
		$reponse = $bdd->query('SELECT * FROM user');
		$array = array();

		while($donnees = $reponse->fetch())
		{
			$user = New User($donnees['id'],  $donnees['name'], $donnees['lastName'], $donnees['mail'],
			$donnees['pwd'], $donnees['promo'], $donnees['ip'], $donnees['lastConnexion'], $donnees['role']);
			//more
			array_push($array, $user);
		}
		return $array;
	}

	public function getMembreById($id){
		if(is_numeric($id))
		{
			$bdd = UserRepository::getPdoConnexion();
			$reponse = $bdd->prepare('SELECT * FROM user where id=:id');
			$reponse->execute(array('id' => $id));
			$donnees = $reponse->fetch();
			if($donnees)
			{
				$user = New User($donnees['id'],  $donnees['name'], $donnees['lastName'], $donnees['mail'],
									$donnees['pwd'], $donnees['promo'], $donnees['ip'], $donnees['lastConnexion'], $donnees['role']);
				return $user;
			}
			else
			{
				return false;
			}
		}
		else
			return false;
	}

	public function checkUserConnexion($mail, $pwd)
	{
		if(!is_null($mail) && !is_null($pwd))
		{
			$bdd = UserRepository::getPdoConnexion();
			$reponse = $bdd->prepare('SELECT * FROM user where mail=:mail AND pwd=:pwd');
			$reponse->execute(array(
								'mail' => $mail,
								'pwd' => $pwd
								));
			$donnees = $reponse->fetch();
			if($donnees)
			{
				$user = New User($donnees['id'],  $donnees['name'], $donnees['lastName'], $donnees['mail'],
								$donnees['pwd'], $donnees['promo'], $donnees['ip'], $donnees['lastConnexion'], $donnees['role']);
				return $user;
			}
			else
			{
				return false;
			}
		}
	}

	public function setMembre(User $user){
		if(is_object($user))
		{
			$bdd = UserRepository::getPdoConnexion();
			$reponse = $bdd->prepare('UPDATE user SET name = :name, lastName = :lastName, mail = :mail, pwd = :pwd, promo = :promo where id=:id');
			$reponse->execute(array(
								'id' => $user->getId(),
								'name' => $user->getName(),
								'lastName' => $user->getLastName(),
								'mail' => $user->getMail(),
								'pwd' => $user->getPwd(),
								'promo' => $user->getPromo()
								));
		}
	}

	public function updateIpAndLastConnexion($id, $ip, $lastConnexion)
	{
		if(!is_null($ip) && !is_null($lastConnexion))
		{
			$bdd = UserRepository::getPdoConnexion();
			$reponse = $bdd->prepare('UPDATE user SET ip = :ip, lastConnexion = :lastConnexion where id=:id');
			$reponse->execute(array(
							'id' => $id,
							'ip' => $ip,
							'lastConnexion' => $lastConnexion
							));
		}
	}

	public function allMailInArray()
	{
		$bdd = UserRepository::getPdoConnexion();
		$reponse = $bdd->query('SELECT mail FROM user');
		$array = array();
		while($donnees = $reponse->fetch()){
			$array[] = $donnees['mail'];
		}
		return $array;
	}

}

?>