<?php

include( "class.log.php");

class ControllerLog
{
	private function getPdoConnexion()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		return $bdd;
	}

	public function createEventLog($array)
	{
		$log = new LogEvent();
	}
}

?>