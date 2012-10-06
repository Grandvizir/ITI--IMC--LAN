<?php

if(!empty($_GET['page']) && $_GET['page'] == "news")
{
	//route !

	$allEvent = array();
	$allEvent = EventRepository::getAllEvent();
	if(count($allEvent) > 0)
	{
		$path = "html/view.html.php";
	}
	else
		$path = "html/no-evenement.html.php";


}
?>
