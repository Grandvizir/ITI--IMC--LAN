<html>
	<ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li><a href="/@/forum/">Forum</a> <span class="divider">/</span></li>
		<li>Cat&eacute;gorie <?php echo $cat;?><span class="divider"></span></li>

	</ul>
	<div class="span4 offset5"><a href="/@/forum/categorie/<?php echo $cat; ?>/post/new/"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Ajouter une qu&eacute;stion</button></a></div>
	<p>Les diff&eacute;rentes questions pos&eacute;es :</p>
	<label><?php $erno = New ForumErno(); echo $erno->controllerGestion();?></label>
	<div class="bs-docs-exemple">
	<table class="table table-hover">
              <thead>
                <tr>
                  <th>Question</th>
                  <th>Autheur</th>
                  <th>Date de cr&eacute;ation</th>
                  <th>Date de derniere modification</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php

				$tmp_array = array();
				$tmp_array = $forum->getListPost();

				if(!empty($tmp_array))
				{
					foreach($forum->getListPost() as $val)
					{

						echo "<tr>";
							echo "<td><a href='/@/forum/post/".$val->getId()."'>".$val->getName()."</a></td>";
							$membre =  UserRepository::getMembreById($val->getUserId());
							echo "<td style='color:grey'><small>".$membre->getName()."</small></td>";
							echo "<td style='color:grey'><small> le ".date('d/m/Y', $val->getCreated())." &agrave; ".date('H:i:s', $val->getCreated())."</small></td>";
							echo "<td style='color:grey'><small> le ".date('d/m/Y', $val->getLastModify())." &agrave; ".date('H:i:s', $val->getLastModify())."</small></td>";
						echo "</tr>";
					}
				}

				?>
              </tbody>
            </table>
	</div>
</html>
<?php $erno->destroy(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34677811-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>