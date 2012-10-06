<?php



/*
	1  = empty
   	2 = no match
   	3 = password && mail don't match
   	4 = mail occuped
   	5 = probleme inconnue
   	6 = contact not ok
  	7 = contact ok
*/


class ControllerGestionErno{

	private $emptyPost = '<div class="popover fade right in" style="top: 17%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Un des champs n\'a pas &eacute;t&eacute; remplis</p></div></div></div>';
	private $badMail = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Votre email ne correspond pas au type de format mail !</p></div></div></div>';

	private $contNotOk = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Veuillez remplir l\'ensemble du formulaire</p></div></div></div>';
	private $contactOk = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion relation</h3><div class="popover-content"><p><i class="icon-ok"></i> Votre message a bien &eacute;t&eacute; envoy&eacute;</p></div></div></div>';

	private $newUser = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion utilisateur</h3><div class="popover-content"><p><i class="icon-ok"></i> Votre compte a bien &eacute;t&eacute; enregistr&eacute; !</p></div></div></div>';

	private $emptyPostLogin = '<div class="popover fade right in" style="top:35%; left:35%; display:block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Un des champs n\'a pas &eacute;t&eacute; remplis</p></div></div></div>';
	private $mailOccuped = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Votre email est d&eacute;j&agrave; pr&eacute;sent dans notre base de donnees</p></div></div></div>';
	private $noMatch = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Vos deux mots de passes ne correspondent pas...</p></div></div></div>';
	private $mailAndPassword = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Un des champs n\'a pas &eacute;t&eacute; saisi correctement</p></div></div></div>';
	private $notFound = '<div class="popover fade right in" style="top:35%; left:35%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p><i class="icon-remove"></i> Votre email ou mot de passe est invalide</p></div></div></div>';
	private $oups = '<div class="popover fade right in" style="top: 15%; left: 55%; display: block; "><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Gestion d\'erreur</h3><div class="popover-content"><p>Oups, une erreur est arriv&eacute;e, veuillez recommencer l\'op&eacute;ration</p></div></div></div>';




	public function controllerGestion()
	{
		if(!empty($_COOKIE['erno']) && !is_null($_COOKIE['erno']) && is_numeric($_COOKIE['erno']))
		{
			$value = $_COOKIE['erno'];
			switch ($value) {
				case 1:
					echo $this->emptyPost;
					break;
				case 2:
					echo $this->noMatch;
					break;
				case 3:
					//echo $this->mailAndPassword;
					break;
				case 4:
					echo $this->mailOccuped;
					break;
				case 5:
					echo $this->badMail;
					break;
				case 6:
					echo $this->contNotOk;
					break;
				case 7:
					echo $this->contactOk;
					break;
				default:
					echo $this->oups;
					break;
			} // switch
		}
		else if (!empty($_GET['pop']) && !is_null($_GET['pop']))
		{
			$value = $_GET['pop'];
			switch ($value) {
				case "empty":
					echo $this->emptyPostLogin;
					break;
				case "noMatch":
					echo $this->notFound;
					break;
				case "user":
					echo $this->newUser;
					break;
				case 4:
					echo $this->mailOccuped;
					break;
				default:
					echo $this->oups;
					break;
			} // switch
		}
		else
			return false;
	}

	public function create($tbl, $value)
	{
		//var_dump($tbl);
		setcookie('erno', $value);
	}

	public function destroy(){
		if(!empty($_COOKIE['erno']) && !is_null($_COOKIE['erno']) && is_numeric($_COOKIE['erno']))
		{
			setcookie('erno', false, time()+60*60*24*370, '/');
		}
	}
}

?>