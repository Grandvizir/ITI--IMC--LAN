
<?php
	if(is_object($usr) && !is_null($usr))
	{
?>
	<ul class="breadcrumb">
		<li><a href="index.php?page=bienvenue">Home</a> <span class="divider">/</span></li>
		<li><a href="index.php?page=compte">Compte</a><span class="divider">/</span></li>
		<li>Modification informations personnelles<span class="divider"></span></li>
	</ul>
	<div class="row">
      <div class="span6">
		<form method="post" action="../controller.user.php">
		  <legend>Modification de mes informations</legend>
		  <label>Prenom</label>
		  <input value="<?php echo $usr->getName();?>" name="name" type="text" placeholder="Ton pr&eacute;nom"/>

		  <label>Nom</label>
		  <input value="<?php echo $usr->getLastName();?>" name="lastName" type="text" placeholder="Ton nom"/>


		  <label>Mail</label>
		  <input value="<?php echo $usr->getMail();?>" name="mail" type="text" placeholder="Ton email"/>


		  <label>Mot de passe</label>
		  <input  name="pwd" type="text" placeholder="Ton mot de passe est crypt&eacute;"/>

		  <label>Mot de passe verif'</label>
		  <input  name="pwd2" type="text" placeholder="retape ton mot de passe"/>

		  <label>Ta promo</label>
		  <select name="promo" class="span2">
                <option value="s1" <?php if($usr->getPromo() == "s1") echo 'SELECTED'; ?>>S1</option>
                <option value="s2" <?php if($usr->getPromo() == "s2") echo 'SELECTED'; ?>>S2</option>
                <option value="s3" <?php if($usr->getPromo() == "s3") echo 'SELECTED'; ?>>S3</option>
                <option value="s4" <?php if($usr->getPromo() == "s4") echo 'SELECTED'; ?>>S4</option>
                <option value="s5" <?php if($usr->getPromo() == "s5") echo 'SELECTED'; ?>>S5</option>
              </select>
		  <input type="hidden"  name="actionPostUpdate" value="1"/>
		  <span class="help-block">Si vous laissez les champs password &agrave; null, aucun changement ne sera op&eacute;r&eacute; sur celui-ci</span>
			<button type="submit" class="btn btn-primary">Valider mes infos</button>
			<button type="button" class="btn">Annuler</button>
		</form>
	   </div>
</div>

<?php
	}
	else
	{
		echo "you cannont watch this page !";
	}

?>