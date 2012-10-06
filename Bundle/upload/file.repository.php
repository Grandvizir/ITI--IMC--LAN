<?php

require_once("file.class.php");
require_once("DAO/dao.php");

class FileRepository extends DAO
{


	public function flushUpload(Upload $file){

		$bdd = FileRepository::getPdoConnexion();

		$req = $bdd->prepare('INSERT INTO file(name, path, pathMin, timeUpload, userId) VALUES(:name, :path, :pathMin, :timeUpload, :userId)');
		$req->execute(array(
						'name' => $file->getName(),
						'path' => $file->getPath(),
						'pathMin' => $file->getPathMin(),
						'timeUpload' => $file->getTimeUpload(),
						'userId' => $file->getUserID()
					));
	}

	public function getAllMinInArray(){
		$bdd = FileRepository::getPdoConnexion();


		$reponse = $bdd->query('SELECT * FROM file');
		$array = array();
		if($reponse)
		{
			while($donnees = $reponse->fetch())
			{
				$file = New Upload();



				$file->setId($donnees['id']);
				$file->setName($donnees['name']);

				$file->setPathMin($donnees['pathMin']);

				$file->setPath($donnees['path']);
				$file->setTimeUpload($donnees['timeUpload']);
				$file->setUserID($donnees['userId']);

				array_push($array, $file);
			}
			return $array;
		}

	}

	public function getImgById($id){
		$bdd = FileRepository::getPdoConnexion();
		$reponse = $bdd->prepare('SELECT * FROM file where id=:id');
		$reponse->execute(array('id' => $id));
		$donnees = $reponse->fetch();
		if($donnees)
		{
			$file = New Upload();
			$file->setName($donnees['name']);
			$file->setPath($donnees['path']);
			$file->setPathMin($donnees['pathMin']);
			$file->setTimeUpload($donnees['timeUpload']);
			$file->setUserId($donnees['userId']);
			return $file;
		}
		else
			return 0;
	}
}

?>