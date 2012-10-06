
	<ul class="breadcrumb">
	  <li><a href="/">Home</a> <span class="divider">/</span></li>
	  <li>Forum<span class="divider"></span></li>
	</ul>
	<p>Bienvenue sur le Forum !</p>
	<div class="bs-docs-exemple">
	<table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Cat&eacute;gorie Name</th>
                  <th>Nb post</th>
                  <th>..</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                <?php
				foreach($forum->getListCat() as $val)
				{
					$obj = ForumRepo::getAllPostForCat($val->getName());
					echo "<tr>";

					echo "<td>".$val->getId()."</td>";
						echo "<td><a href='/@/forum/categorie/".$val->getName()."'>".$val->getName()."</a></td>";
					echo "<td>".count($obj->getListPost())."</td>";
					echo "<td>..</td>";
					echo "</tr>";
				}
				?>
              </tbody>
            </table>
	</div>
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