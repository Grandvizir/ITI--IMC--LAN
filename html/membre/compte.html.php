<?php
if(is_object($usr) && !is_null($usr))
	{
?>
			<ul class="breadcrumb">
				<li><a href="/">Home</a> <span class="divider">/</span></li>
				<li><a href="/@/compte/">Compte</a><span class="divider">/</span></li>
				<li>Mes informations personnelles<span class="divider"></span></li>
			</ul>
			<div class="row">
				<div class="span6">
					<div class="bs-docs-compte">
								<h4 style="border-bottom: 1px solid #EEE;"><?php echo $usr->getName()." ".$usr->getLastName();?></h4>

								<p>
								<ul class="nav">
									<li><i class="icon-envelope"></i> <?php echo $usr->getMail();?></li>
									<li><i class="icon-book"></i> <?php echo "Promotion ".$usr->getPromo();?></li>
									<li><i class="icon-globe"></i> <?php echo "Ip utilisee ".$usr->getIp();?></li>
									<li><i class="icon-time"></i> <?php echo "Derniere connexion  le ".date('d/m/Y', $usr->getLastConnexion())." &agrave; ".date('H:i:s', $usr->getLastConnexion());?></li>
								</ul>
								<small class="pull-right"></small><br>

								</p>

					</div>

				</div>
				<a href="/@/info/">Modifier mes informations personnelles</a>
			</div>
<?php
	}
	else
	{
		echo "you cannont watch this page !";
	}
?>