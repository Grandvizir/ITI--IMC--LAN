<?php

include("adm.controller.action.php");

$var= "home";
if(!empty($_GET['action']))
{
	$var = $_GET['action'];
}

?>
	
<div class="">
<?php include($pathModul); ?>
</div>