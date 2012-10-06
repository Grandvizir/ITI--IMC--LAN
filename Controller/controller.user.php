<?php


//require_once ('lib/swiftmailer/swift_required.php');
require_once('../Model/User.model.php');
include("../Model/contact.model.php");
require_once ('../DAO/repository.User.php');
require_once ('controller.erreur.php');

if(!empty($_POST['actionPostInscription']) && $_POST['actionPostInscription'] === '1'){
	if(!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['mail']) && !empty($_POST['pwd']) && !empty($_POST['pwd2']) && !empty($_POST['promo']))
	{
		if($_POST['pwd'] == $_POST['pwd2'])
		{

		   if(isMail($_POST['mail']))
		   {
			if(secureMail(secureVarClient($_POST['mail'])))
			{

				$name = secureVarClient($_POST['name']);
				$lastName = secureVarClient($_POST['lastName']);

				$mail = secureVarClient($_POST['mail']);


				$pwd = md5(secureVarClient($_POST['pwd']));
				$promo = secureVarClient($_POST['promo']);
				$lastConnexion = time();
				$ip = $_SERVER['REMOTE_ADDR'];

				//mail_inscription($mail, $name);
				//penser au token d'activation !

				$membre = new User($id = null, $name, $lastName, $mail, $pwd, $promo, $ip, $lastConnexion);

				UserRepository::flushNewUser($membre);
				header("location:/pop/user/");
			}
			else {
				$tbl = array('time' => time(), 'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'], "ip" => $_SERVER['REMOTE_ADDR']);
				ControllerGestionErno::create($tbl, '4');
				header("location:/@/inscription/");
			}
		   }
		   else
		  {
		  	$tbl = array('time' => time(), 'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'], "ip" => $_SERVER['REMOTE_ADDR']);
				ControllerGestionErno::create($tbl, '5');
				header("location:/@/inscription/");

  	 	  }

		}
		else
		{
			$tbl = array('time' => time(), 'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'], "ip" => $_SERVER['REMOTE_ADDR']);
			ControllerGestionErno::create($tbl, '2');
			header("location:/@/inscription/");
		}

	}
	else
	{
		$tbl = array('time' => time(), 'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'], "ip" => $_SERVER['REMOTE_ADDR']);
		ControllerGestionErno::create($tbl, '1');
		header("location:/@/inscription/");
	}
}
else if(!empty($_POST['connexionPostUser']) && $_POST['connexionPostUser'] === '1')
{
	if(!empty($_POST['mail']) && !empty($_POST['pwd']))
	{

		$mail = secureVarClient($_POST['mail']);
		$pwd = md5(secureVarClient($_POST['pwd']));
		if(is_object(UserRepository::checkUserConnexion($mail, $pwd)))
		{

			$user = UserRepository::checkUserConnexion($mail, $pwd);
			UserRepository::updateIpAndLastConnexion($user->getId(), $_SERVER['REMOTE_ADDR'], time());



			session_start();

			$_SESSION['userId'] = $user->getId();
			$_SESSION['name'] = $user->getName();
			header("location:/@/bienvenue/");
		}
		else {
			$tbl = array('time' => time(), 'PATH_TRANSLATED' => $_SERVER['PATH_TRANSLATED'], "ip" => $_SERVER['REMOTE_ADDR']);
			//ControllerGestionErno::create($tbl);
			header("location:/pop/noMatch/");
		}
	}
	else {
		$tbl = array('time' => time(), 'PATH_TRANSLATED' => $_SERVER['PATH_TRANSLATED'], "ip" => $_SERVER['REMOTE_ADDR']);
		//ControllerGestionErno::create($tbl);
		header("location:/pop/empty/");
	}
}
else if(!empty($_POST['actionPostContact']) && $_POST['actionPostContact'] === '1')
{
	if(!empty($_POST['mail']) && !empty($_POST['name']) && !empty($_POST['contenu'])
		&&  isMail(secureVarClient($_POST['mail'])) && !empty($_POST['lastName']))
	{
			$contact = New Contact();

			$contact->setMail(secureVarClient($_POST['mail']));
			$contact->setName(secureVarClient($_POST['name']));
			$contact->setLastName(secureVarClient($_POST['lastName']));
			$contact->setContent(secureVarClient($_POST['contenu']));
			$contact->setIp($_SERVER['REMOTE_ADDR']);
			$contact->setSendTime(time());

			$contact->newContact($contact);
			header("location:/@/contact/");

	}
	else
	{
			$tbl = array('time' => time(), 'PATH_TRANSLATED' => $_SERVER['PATH_TRANSLATED'], "ip" => $_SERVER['REMOTE_ADDR']);
			ControllerGestionErno::create($tbl, 6);
			header("location:/@/contact/");
	}
}
else
{
	header("location:/");
}

function isMail($mail)
{
	$mail = strpbrk($mail, '@.');
	if ($mail != false)
	{
		return true;
	}
	else
		return false;
}

function secureVarClient($value)
{
	$char = array("/", "\/", "'", "%", "&", "<", ">", "+", "=", "_");
	$value = str_replace($char, "",$value);
	return $value;
}

function secureMail($mail)
{
	$tbl = UserRepository::allMailInArray();
	if(!in_array($mail, $tbl))
	{

		return true;
	}
	else
	{
		return false;
	}
}

function mail_inscription($mail, $name)
{

	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance('Wonderful Subject')
		  ->setFrom(array($mail => $name))
		  ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
		  ->setBody('Here is the message itself')
		  ;
	$result = $mailer->send($message);
}
?>