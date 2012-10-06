<?php

include("/Model/contact.model.php");
include("/bundle/event/event.repository.php");
if(!empty($_GET['page']) && $_GET['page'] == "administration" && check_auth())
{
	if (!empty($_POST['NewPost']) && $_POST['NewPost'] == 1)
	{
		add_event($POST);
		echo 'Evenement posté !';
		
	}
	$var = "home";
	if(!empty($_GET['action']))
	{
		$var = $_GET['action'];
		switch ($var)
		{
			case "home":
				$pathModul= "html/dashBoard.html.php";
				break;
			case "user":
				$pathModul= "html/user.html.php";
				break;
			case "event":
				$pathModul= "html/event.html.php";
				break;
			case "message":
				$pathModul= "html/mailBox.html.php";
				break;
			default:
				$pathModul = "html/dashBoard.html.php";
				break;
		} // switch
	}
	else
		$pathModul= "html/dashBoard.html.php";
}

function add_event($post)
{
	if(!empty($post['titre']) && !empty($post['contenu']) && check_auth())
	{
		$event = new Event();
		
	}
}

function check_auth()
{
	if(UserRepository::getMembreById($_SESSION['userId'])->getRole() == "admin"
		&& !empty($_GET['token']) && $_GET['token'] == md5($_SERVER['REMOTE_ADDR']))
	{
		return true;
	}
	else
	{
		return false;
	}

}
?>