<!-- controller des erreurs -->
<label><?php $erno = New ControllerGestionErno(); $erno->controllerGestion(); $erno->destroy()?></label>
<!-- controller des erreurs -->

<div  class="contact">
<div class="row">
      <div class="span6 offset1">
	<br>
		<form method="post" action="/Controller/controller.user.php">
		  <legend>Nous contacter</legend>
<br>
		  <label>Prenom</label>
		  <input class="inputbox" name="name" type="text" placeholder="Ton pr&eacute;nom"/>
<br>
		  <label>Nom</label>
		  <input class="inputbox" name="lastName" type="text" placeholder="Ton nom"/>

<br>
		  <label>Mail</label>
		  <input class="inputbox" name="mail" type="text" placeholder="Ton email"/>
<br>

		  <label>Votre message</label><br>
		  <textarea class="inputbox" name="contenu" style="height: 151px; width: 427px;"></textarea>
		  <input  type="hidden"  name="actionPostContact" value="1"/>
<br>
			<button type="submit" class="btn btn-primary">Valider mes infos</button>
		</form>
		</div>
	</div>
</div>
