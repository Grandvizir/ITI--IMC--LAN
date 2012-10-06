<?php

?>

<?php

?>
<style>
.bs-docs-question {
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.bs-docs-question::after {
content: "reponse";
position: absolute;
top: -1px;
left: -1px;
padding: 3px 7px;
font-size: 12px;
font-weight: bold;
background-color: whiteSmoke;
border: 1px solid #DDD;
color: #9DA0A4;
-webkit-border-radius: 4px 0 4px 0;
-moz-border-radius: 4px 0 4px 0;
border-radius: 4px 0 4px 0;
}
</style>
<html>
	<ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li><a href="/@/forum/">Forum</a> <span class="divider">/</span></li>
		<li><a href="/@/forum/post/<?php echo $_GET['post']; ?>" >Cat&eacute;gorie <?php //echo $post->getCategorie(); ?></a> <span class="divider">/</span></li>
		<li>Zone d'edion<span class="divider"></span></li>
		<li></li>
	</ul>

<form class="bs-docs-question" action="" method="post">
			<label>C'est &agrave; toi :</label>

			<div class="btn-group btn-group-horizontal">
              <button type="button" class="btn"><i class="icon-align-left"></i></button>
              <button type="button" class="btn"><i class="icon-align-center"></i></button>
              <button type="button" class="btn"><i class="icon-align-right"></i></button>
              <button type="button" class="btn"><i class="icon-align-justify"></i></button>
			</div>
            <textarea name="question" style="height: 151px; width: 427px;"></textarea>
			<label/>
			<input type="hidden" name="NewCom" value="1"/>
			<input style="margin-top:4px;" type="submit" class="btn" value="Poster ma r&eacute;ponse">
</form>