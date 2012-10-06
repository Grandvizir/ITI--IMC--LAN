<form  action="/Controller/controller.user.php" method="post" id="login-form" class="cbLoginForm" style="margin:0px;">
	<label><h2>Connexion rapide :</h2></label>

	<!-- controller des erreurs -->
	<?php $erno = New ControllerGestionErno(); $erno->controllerGestion(); $erno->destroy();?>
	<!-- FIN controller des erreurs -->

	<input class="inputbox" size="30" name="mail" type="text" placeholder="Ton email"/>
	<input class="inputbox" size="30" name="pwd" type="password" placeholder="Ton mot de passe"/>
	<input type="hidden" value="1" name="connexionPostUser"/>
	<p><input style="margin-top:4px;" type="submit" class="btn" value="Connexion"/></p>
</form>