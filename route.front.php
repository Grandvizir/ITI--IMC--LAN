<?php

session_start();

if(!empty($_SESSION) && !is_null($_SESSION))
{
	$pathMenu = "html/menu/logged.html.php";
	$var = "bienvenue";
	if(!empty($_GET['page']))
	{
		$var = $_GET['page'];
		switch ($var)
		{
			case "Bienvenue":
				$pathModule= "html/membre/bienvenue.html.php";
				break;
			case "forum":
				$pathModule= "bundle/forum/index.php";
				break;
			case "concours":
				$pathModule= "bundle/upload/index.php";
				break;
			case "contact":
				$pathModule= "html/home/contact.html.php";
				break;
			case "news":
				$pathModule= "bundle/event/index.php";
				break;
			case "compte":
				$usr = UserRepository::getMembreById($_SESSION['userId']);
				$pathModule= "html/membre/compte.html.php";
				break;
			case "candidature":
				$pathModule= "html/membre/candidature.html.php";
				break;
			case "info":
				$usr = UserRepository::getMembreById($_SESSION['userId']);
				$pathModule= "html/membre/update.html.php";
				break;
			case "administration":
				if($_GET['token'] == md5($_SERVER['REMOTE_ADDR']))
					$pathModule= "bundle/adm/home.php";
				else
					$pathModule= "html/membre/bienvenue.html.php";
				break;
			default:
				$pathModule= "html/membre/bienvenue.html.php";
		} // switch
	}
	else
		$pathModule= "html/membre/bienvenue.html.php";
}
else {
	$pathMenu = "html/menu/home.html.php";
	$var = "accueil";
	if(!empty($_GET['page']))
	{
		$var = $_GET['page'];
		switch ($var)
		{
			case "accueil":
				$pathModule= "html/home/home.html.php";
				break;
			case "news":
				$pathModule= "Bundle/event/index.php";
				break;
			case "photos":
				$pathModule= "Bundle/upload/index.php";
				break;
			case "contact":
				$pathModule= "html/home/contact.html.php";
				break;
			case "sponsor":
				$pathModule= "html/home/sponsor.html.php";
				break;
			case "inscription":
				$pathModule= "html/home/inscription.html.php";
				break;
			case "connexion":
				$pathModule= "html/home/connexion.html.php";
				break;
			default:
				$pathModule= "html/home/home.html.php";
		} // switch
	}
	else
		$pathModule= "html/home/home.html.php";
}

if(!empty($_GET['session']) && $_GET['session'] == "close")
{
	session_destroy();
	header("location:/");
}


?>