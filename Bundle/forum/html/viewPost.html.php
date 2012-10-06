<html>
	<ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li><a href="/@/forum/">Forum</a> <span class="divider">/</span></li>
		<li><a href="/@/forum/categorie/<?php echo $post->getCategorie(); ?>" >Cat&eacute;gorie <?php echo $post->getCategorie(); ?></a> <span class="divider">/</span></li>
		<li><?php echo $post->getName();?><span class="divider">/</span></li>
		<li></li>
	</ul>
	<a href="/@/forum/post/<?php echo $post->getId(); ?>/com/new/"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Ajouter une reponse</button></a>

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
content: "Question";
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
.bs-docs-answer {
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.bs-docs-answer::after {
content: "Reponse";
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
<div class="bs-docs-question">
					<h5 style="border-bottom: 1px solid #EEE;"><?php echo $post->getName(); ?></h5>
					<p><blockquote><?php echo $post->getContenu(); ?><br><br>
					<small class="pull-right"><?php $membre =  UserRepository::getMembreById($post->getUserId()); echo "Par ".$membre->getName()." ".$membre->getLastName().' le '.date('d/m/Y', $post->getCreated()).' &agrave; '.date('H:i:s', $post->getCreated());?></small><br>
					</blockquote>
					</p>
</div>


			<?php
			//var_dump($forum);
			foreach($forum->getListCom() as $val)
			{
				echo '
					<div class="btn-group btn-group-horizontal">
					  <a href="#"><button type="button" class="btn"><i class="icon-thumbs-up"></i><small> '.$val->getPower().'</small></button></a>
					  <a href="/@/forum/post/'.$val->getPostId().'/com/'.$val->getId().'/action/up"><button type="button" class="btn btn-success"><i class="icon-ok icon-white"></i></button></a>
					  <a href="#"><button type="button" class="btn btn-danger"><i class="icon-remove icon-white"></i></button></a>
					</div>
					<div class="bs-docs-answer">

					<p><blockquote>';
						echo $val->getContenu();
				echo	'<br><br><small class="pull-right">';
						$membre =  UserRepository::getMembreById($val->getUserId());
						echo "Par ".$membre->getName()." ".$membre->getLastName().' le '.date('d/m/Y', $val->getCreated()).' &agrave; '.date('H:i:s', $val->getCreated());
				echo '</small><br></blockquote></p>';
				echo '</div>';
			}
			?>
<br>
</html><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34677811-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
