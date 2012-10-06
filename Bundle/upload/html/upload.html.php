<?php



?>


<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/@/concours/">Concours</a> <span class="divider">/</span></li>
  <li>upload<span class="divider"></span></li>
</ul>

<div class="alert">
	<p><center><u>Regles de t&eacute;l&eacute;chargement &agrave; respecter</u></center></p>
		<p>Pour que ton logo soit acc&egrave;pter, tu dois :</p>
		<p>- Avoir une image (.png, .jpeg, jpg)</p>
		<p>- Ne pas depasser le poid de ..Mo</p>
		<p>- Etre propri&eacute;taire int&eacute;grale de cette photo</p>
		<p></p>
		<p></p>
</div>

<form action= "../route.upload.php" method="post" enctype="multipart/form-data">
	<label>Votre fichier :</label>
	<input type="file" name="upld" />

	<br><br>
	<br><br>
	<button class="btn" type="submit"/> Ajouter son logo</button>
</form>