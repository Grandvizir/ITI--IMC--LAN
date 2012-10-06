<?php

foreach($allEvent as $val)
{
	$max=150;
	if(strlen($val->getContenu())>=$max)
	{
		// Met la portion de chaine dans $chaine
		$chaine=substr($val->getContenu(),0,$max);

		// position du dernier espace
		$espace=strrpos($chaine," ");
		// test si il ya un espace
		if($espace)
			// si ya 1 espace, coupe de nouveau la chaine
			$chaine=substr($chaine,0,$espace);
		// Ajoute ... à la chaine
		$chaine .= '... <a href="/@/evenement/view/'.$val->getId().'">Lire la suite</a>'; // TO-DO la page VIEW
		$val->setContenu($chaine);
	}


	echo '

					<h5 style="border-bottom: 1px solid #EEE;" ><a href="/news/" class="roknewspager-title">'.$val->getName().'</a></h5>
					<div class="introtext">'.$val->getContenu().'<br><br></div>
	';
 echo "Par IMC LAN le ".date('d/m/Y', $val->getCreate())." &agrave; ".date('H:i:s', $val->getCreate());
}
?>