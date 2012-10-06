<?php


class DAO
{
	const connexionString = "mysql:host=localhost;dbname=imc";
	const userName = "root";
	const userPwd = "";


	protected function getPdoConnexion()
	{
		$bdd = new PDO(self::connexionString, self::userName, self::userPwd);
		return $bdd;
	}

}


?>