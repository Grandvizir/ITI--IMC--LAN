<h2>Mon compte</h2>
<?php
	$usr = UserRepository::getMembreById($_SESSION['userId']);
	echo $usr->getName()." | ";
	echo $usr->getMail();
?>

<p><a href="/index.php?session=close" class="orphan item bullet active-to-top"><span> Deconnexion </span></a></p>