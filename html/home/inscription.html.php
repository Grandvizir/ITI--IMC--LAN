<!-- controller des erreurs -->
<label><?php $erno = New ControllerGestionErno(); $erno->controllerGestion(); $erno->destroy()?></label>
<!-- FIN controller des erreurs -->

<div  class="inscription">
	<br>
		<form method="post" action="/Controller/controller.user.php">
		  <legend>Allez hop, je m'inscris !</legend>
<br>
		  <label>Prénom</label>
		  <input class="inputbox" name="name" type="text" placeholder="Ton pr&eacute;nom"/>
	<br>
		  <label>Nom</label>
		  <input class="inputbox" name="lastName" type="text" placeholder="Ton nom"/>

	<br>
		  <label>Mail</label>
		  <input class="inputbox" name="mail" type="text" placeholder="Ton email"/>

	<br>
		  <label>Mot de passe</label>
		  <input class="inputbox" name="pwd" type="password" placeholder="mot de passe crypt&eacute;"/>
	<br>
		  <label>Mot de passe vérification</label>
		  <input class="inputbox" name="pwd2" type="password" placeholder="retape ton mot de passe"/>
	<br>
		  <label>Ta promo</label>
		  <select  name="promo" class="span2">
                <option value="s1">S1</option>
                <option value="s2">S2</option>
                <option value="s3">S3</option>
                <option value="s4">S4</option>
                <option value="s5">S5</option>
                <option value="other">Autre</option>
              </select>
  	<br>
		  <input type="hidden"  name="actionPostInscription" value="1"/>
		  <button type="submit" class="btn btn-primary">Valider mes infos</button>
		</form>
	   </div>

