<?php 
$pid = "home";
$page = "home";
require_once($_SERVER['DOCUMENT_ROOT']."/includes/header.inc.php");
?>
<!doctype html>
<!--[if lte IE 8]> <html lang="en-US" class="ie8"> <![endif]--> 
<!--[if gt IE 8]><!--> <html lang="en-US" class="no-js"> <!--<![endif]-->
<head>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/includes/metatags.inc.php"); ?>
<title>Fontana Architects :: Multifamily Residential, Themed Entertainment &amp; Master Planning - Design Firm in Glendale, CA :: 818.937.9242</title>
<!--[if lt IE 9]>
<script>document.createElement('video');</script>
<![endif]-->
<link href="https://plus.google.com/109112798844261257740" rel="publisher" />
<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
<script type="text/javascript" src="/includes/global.js"></script>
<link href="/css/styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
/* --------------- CSS Image Preloader: ----------------------------------------- */
body:after {
	content: 
	url(/images/home_feature.jpg) 
	url(/images/home_feature_ww.jpg) 
	url(/images/home_feature_bw.jpg) 
	;
	display: none;
}

header {
  background: rgba(255,255,255,0.9); /* white background behind header logo & nav; 1 is 100% opacity */
}

img { -ms-interpolation-mode: bicubic; }

<?php /*?>header nav a {
	<?php if ($page_id=="home") { echo "margin-top: -15px;"; }; ?>
}<?php */?>

#outer_container {
    position: relative;
    margin: auto;
    height: 100%;
    width: 100%;
}
#imagePan {
    position: relative;
    overflow: hidden;
    cursor: crosshair;
    height: 100%;
    width: 100%;
}
#imagePan .pancontainer {
    position: relative;
    left: 0;
}
#mov {
    margin: -100px 50px 0;
	background: yellow;
}

#panning {	
	zoom: 150% !important; width: 100%; height:100%; 
}
.ie8 #panning{
    zoom:1.5;
}

@media (max-width: 1000px) {
	#panning {	
		zoom: 100% !important; width: 100%; height:100%; 
	}
	.ie8 #panning{
		zoom:1.0;
	}
}
@media (max-width: 720px) {
	#panning {
		zoom: 80% !important; width: 100%; height:100%;
	}
	.ie8 #panning{
		zoom:0.8;
	}
}
@media (max-width: 500px) {
	#panning {
		zoom: 60% !important; width: 100%; height:100%;
	}
	.ie8 #panning{
		zoom:0.6;
	}
}
</style>
  
<link href="/css/homefeature.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/includes/panning.js"></script>
</head>

<body onLoad="MM_preloadImages('/images/home_feature.jpg','/images/home_feature_bw.jpg')">

<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/analyticstracking.php") ?>

<div id="container">

  <header>
    <div class="centering"><a href="/"><img src="/images/logo_farch.gif.png" alt="Fontana Architects - Placemaking in Glendale, (Southern) California" id="logo"></a>
      <nav> <a href="/">home</a> <a href="about/">about</a> <a href="services/">services</a> <a href="contact/">contact</a> </nav>
    </div>
  </header>
 
 <div id="outer_container">
    <div id="imagePan">
        <div class="pancontainer">
            <div id="mov">
			
  <!--<div class="centering">-->
  
  <div id="panning"><!--img_violinist.style.filter=-->
  <div id="home_feature_block" 
  	onMouseOver="
img_balloons.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_balcony.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_forest.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_fireworks.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_violinist.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_plant1.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_facade.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_smile.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_plant2.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_nightlife.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_youngcouple.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
img_carousel.style.backgroundImage='url(/images/home_feature_ww.jpg)'; 
" 
	onMouseOut="
img_balloons.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_balcony.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_forest.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_fireworks.style.backgroundImage='url(/images/home_feature_bw.jpg)';
img_violinist.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_plant1.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_facade.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_smile.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_plant2.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_nightlife.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_youngcouple.style.backgroundImage='url(/images/home_feature_bw.jpg)'; 
img_carousel.style.backgroundImage='url(/images/home_feature_bw.jpg)';  
">
<?php 
$ab_link = 	'onclick="location.href=\'about/\';"';
$mp_link = 	'onclick="location.href=\'services/master-planning.php\';"'; 
$te_link = 	'onclick="location.href=\'services/themed-entertainment.php\';"';
$mfr_link = 'onclick="location.href=\'services/multi-family-residential.php\';"';
?>
  <div id="middle">
    <!--Text Boxes-->
    <div id="img_design" <?=$mp_link; ?>></div>
    <div id="img_live" <?=$mfr_link; ?>></div>
    <div id="img_plan" <?=$mp_link; ?>></div>
    <div id="img_entertain" <?=$te_link; ?>></div>
    <!--Large Image Boxes-->
    <div id="img_forest" <?=$ab_link; ?>></div>
    <div id="img_balloons" <?=$te_link; ?>></div>
    <div id="img_balcony" <?=$mfr_link; ?>></div>
    <div id="img_fireworks" <?=$te_link; ?>></div>
    <!--Small Image Boxes-->
    <div id="img_violinist" <?=$ab_link; ?>></div>
    <div id="img_plant1" <?=$mp_link; ?>></div>
    <div id="img_facade" <?=$mp_link; ?>></div>
    <div id="img_smile" <?=$mp_link; ?>></div>
    <div id="img_plant2" <?=$mp_link; ?>></div>
    <div id="img_nightlife" <?=$te_link; ?>></div>
    <div id="img_youngcouple" <?=$mfr_link; ?>></div>
    <div id="img_carousel" <?=$te_link; ?>></div>
	<div id="open_area"></div>
	</div><!--.middle -->
  </div>
  <!-- #home_feature_block -->
  </div>
  <!--</div>--> 
  <!-- .centering -->
  
  </div></div></div></div>
  
  
  
  <footer>
    <div class="centering"> &copy; <?php echo date("Y"); ?> Fontana Architects. All rights reserved worldwide. </div>
  </footer>
</div><!-- #container-->
</body>
</html>