<?php
include("Model/User.model.php");
include('DAO/repository.User.php');


include("route.front.php");
include("Controller/controller.erreur.php");
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" lang="fr-fr" >
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />


  <link href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/components/com_k2/css/k2.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/plugins/content/phocadownload/assets/css/phocadownload.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/libraries/gantry/css/grid-12.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/libraries/gantry/css/gantry.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/libraries/gantry/css/joomla.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/joomla.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/style3.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/typography.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/extensions.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/extensions-style3.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/demo-styles.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/template.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/template-webkit.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/css/fusionmenu.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/modules/mod_roknewspager/themes/dark/roknewspager.css" type="text/css" />
  <link rel="stylesheet" href="http://www.lyon-esport.fr/modules/mod_rokstories/tmpl/css/rokstories.css" type="text/css" />
  <style type="text/css">
		body #rt-logo {width:290px;height:100px;}
  </style>
  <script src="http://www.lyon-esport.fr/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/media/system/js/core.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/media/system/js/modal.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/components/com_k2/js/k2.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/media/system/js/caption.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/templates/rt_nebulae_j16/js/gantry-module-scroller.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/libraries/gantry/js/gantry-smartload.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/libraries/gantry/js/gantry-inputs.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/modules/mod_roknavmenu/themes/fusion/js/fusion.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/modules/mod_roknewspager/tmpl/js/roknewspager.js" type="text/javascript"></script>
  <script src="http://www.lyon-esport.fr/modules/mod_rokstories/tmpl/js/rokstories.js" type="text/javascript"></script>

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=212454332171704";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <script type="text/javascript">

		window.addEvent('domready', function() {

			SqueezeBox.initialize({});
			SqueezeBox.assign($$('a.modal'), {
				parse: 'rel'
			});
		});
var K2SitePath = 'http://www.lyon-esport.fr/';
window.addEvent('load', function() {
				new JCaption('img.caption');
			});
window.addEvent("domready", function() {
				new ScrollModules('rt-content-top', {duration: 600, transition: Fx.Transitions.Expo.easeInOut, autoplay: 0, delay: 5000});
new ScrollModules('rt-content-bottom', {duration: 600, transition: Fx.Transitions.Expo.easeInOut, autoplay: 0, delay: 5000});

			});
window.addEvent('domready', function() {new GantrySmartLoad({'offset': {'x': 200, 'y': 200}, 'placeholder': 'http://www.lyon-esport.fr/templates/rt_nebulae_j16/images/blank.gif', 'exclusion': ['']}); });
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29709659-1']);
  _gaq.push(['_trackPageview']);



InputsExclusion.push('.content_vote','\#rt-popup','\#vmMainPage')
window.addEvent("domready", function(){ new SmoothScroll(); });
            window.addEvent('domready', function() {
                new Fusion('ul.menutop', {
                    pill: 0,
                    effect: 'slide and fade',
                    opacity:  1,
                    hideDelay:  500,
                    centered:  0,
                    tweakInitial: {'x': -10, 'y': -9},
                    tweakSubsequent: {'x':  1, 'y':  -6},
                    tweakSizes: {'width': 20, 'height': 20},
                    menuFx: {duration:  300, transition: Fx.Transitions.Circ.easeOut},
                    pillFx: {duration:  400, transition: Fx.Transitions.Back.easeOut}
                });
            });

window.addEvent('domready', function() {
});
window.addEvent('load', function() {
});

var RokStoriesImage = {}, RokStoriesLinks = {};
		RokStoriesImage['rokstories-79'] = [];
		RokStoriesLinks['rokstories-79'] = [];
		window.addEvent('domready', function() {
			new RokStories('rokstories-79', {
				'id': 79,
				'startElement': 1,
				'thumbsOpacity': 1,
				'mousetype': 'mouseenter',
				'autorun': 1,
				'delay': 7000,
				'scrollerDuration': 1000,
				'scrollerTransition': Fx.Transitions.Expo.easeInOut,
				'startWidth': 'auto',
				'layout': 'layout2',
				'linkedImgs': 0,
				'showThumbs': 0,
				'fixedThumb': 1,
				'mask': 1,
				'descsAnim': 'topdown',
				'imgsAnim': 'bottomup',
				'thumbLeftOffsets': {x: -40, y: -100},
				'thumbRightOffsets': {x: -30, y: -100}
			});
		});
  </script>
	<link rel="icon" href="http://www.lyon-esport.fr/templates/rt_nebulae_j16/favicon.png" type="image/png" />
</head>
	<body  class="backgroundlevel-med cssstyle-style3 readonstyle-link font-family-nebulae font-size-is-large menu-type-fusionmenu typography-style-dark col12 option-com-content menu-homepage"><div id="rt-ba">IMC LAN</div>
		<div id="rt-page-surround">
			<div class="rt-container">
												<div id="rt-body-surround">
										<div id="rt-header">

<div class="rt-grid-4 rt-alpha">
    			<div class="rt-block logo-block">
				    	    		<a href="/" id="rt-logo"></a>
				    		</div>

</div>
<div class="rt-grid-8 rt-omega" style="margin-left:-25px;" >
    	<div class="rt-block menu-block">
		<div class="rt-fusionmenu">
		<div class="nopill">
		<div class="rt-menubar">
			<!-- MENU -->
			<?php include($pathMenu); ?>
			<!-- FIN MENU -->
		</div>
		</div>
		</div>
		</div>
</div>

																														<div id="rt-maintop">
						<div class="rt-grid-12 rt-alpha rt-omega">
                        <div class="rt-block">
								<div class="module-content">

<script type="text/javascript">
    RokStoriesImage['rokstories-79'].push('http://www.lyon-esport.fr/images/Slider/slider_ouverture.jpg');
	</script>
<div id="rokstories-79" class="rokstories-layout2"  >
	<div class="feature-block">
		<div class="image-container" style="float: left">
			<div class="image-full"></div>
			<div class="image-small">
			    			    <img src="/images/Slider/slider_ouverture_thumb.jpg" class="feature-sub" alt="image" width="90" height="23" />
							</div>
							<div class="feature-block-tl"></div>
				<div class="feature-block-tr"></div>
				<div class="feature-block-bl"></div>
				<div class="feature-block-br"></div>

									</div>
		<div class="desc-container">

			<div class="description feature-pad">
															<span class="feature-title">Lyon e-Sport</span>

									<span class="feature-desc">
IMC LAN</span>

							</div>
	        		</div>
			</div>
</div>					<div class="clear"></div>
				</div>
            </div>

</div>
						<div class="clear"></div>
					</div>

<div id="rt-main" class="mb8-sa4">
	<div class="rt-container">
		<div class="rt-grid-8">
									<div id="rt-content-top">
				<div class="rt-grid-8 rt-alpha rt-omega">
	                        <div class="rt-block rt-block-scroller">
            	<div class="rt-module-surround">

<div class="module-content">

<div class="roknewspager-wrapper">

		<?php include($pathModule);?>
	</div>
<script type="text/javascript">
	RokNewsPagerStorage.push({
		'url': 'http://www.lyon-esport.fr/component/rokmodule/?tmpl=component&amp;type=raw&amp;moduleid=90&amp;offset=_OFFSET_',
		'autoupdate': 0,
		'delay': 5000	});
</script>						<div class="clear"></div>
					</div>
				</div>
            </div>

    </div>
				<div class="clear"></div>
			</div>
																		<div class="rt-block">
						<div id="rt-mainbody">
							<div class="component-content">

<div class="rt-blog ">









</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
												</div>
		            <div class="rt-grid-4 ">
                <div id="rt-sidebar-a">
                                        <div class="rt-block">
								<div class="module-title"></div>
                				<div class="module-content">
<!-- FORM -->
<?php
if(!empty($_SESSION) && !is_null($_SESSION))
{
	include("html/membre/user.html.php");
}
else
	include("html/home/connexion.html.php");
?>
<!-- FIN FORM -->

</div>
</div>
<div class="rt-block">
<div class="module-content">
<p>-----</p>
<!-- FACEBOOK -->
<div class="fb-like-box" data-href="https://www.facebook.com/InTekMasterCup" data-width="292" data-colorscheme="dark" data-show-faces="true" data-border-color="black" data-stream="false" data-header="false"></div>
<!-- FIN FB -->
					<div class="clear"></div>
				</div>
            </div>
        	                    <div class="rt-block">
								<div class="module-content">


<div class="custom"  >
	<p style="margin-top: -55px;">&nbsp;</p>

<p>&nbsp;</p></div>
					<div class="clear"></div>
				</div>
            </div>
        	                    <div class="rt-block">
								<div class="module-content">


				</div>
            </div>

                </div>
            </div>

		<div class="clear"></div>
	</div>
</div>
														</div>

								<div id="rt-footer-surround" >
																				<div id="rt-copyright">
						<div class="rt-grid-12 rt-alpha rt-omega">
                        <div class="rt-block">
								<div class="module-content">


<div class="custom"  >
	<p><a href="/">Accueil</a> | <a href="/@/contact/">Contact</a> | <a href="https://www.facebook.com/InTekMasterCup" target="_blank">Facebook</a>	<?php
if(!empty($_SESSION['userId']) && UserRepository::getMembreById($_SESSION['userId'])->getRole() == "admin"){
	$token = md5($_SERVER['REMOTE_ADDR']);
	echo '
		<li><a href="/@/administration/token/'.$token.'"><i class="icon-chevron-right"></i>Administration Web Site</a></li>
		';
}
?></p>
<p>© Copyright 2012-2013 imc lan | Tous droits r&eacute;serv&eacute;s </p></div>
					<div class="clear"></div>
				</div>
            </div>

</div>
						<div class="clear"></div>
					</div>
														</div>
							</div>
														</div>
	</body>
</html>
