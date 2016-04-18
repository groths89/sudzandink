<?php
defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/image-slider.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/fancybox/jquery.fancybox.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body class="thrColFixHdr">
	<div class="page-wrap">
    <div id="header">
    <div id="logo">
		<jdoc:include type="modules" name="logo" style="xhtml" />
    </div>
    <div id="slogo"><h4>CUSTOM PAPER GOODS & DESIGNS</h4></div>
    <div class="hr"></div>
    <div id="navigation">
   	  <jdoc:include type="modules" name="navigation" style="xhtml" />
    <div class="clear"></div>
    </div><!--End Navigation-->
    <div class="hr"></div>
    <div id="lower"></div>
    <div id="dots"></div>
    </div>
    <div class="main-content">
      <div class="contain">
          	<div class="blog-left-col">
				   <div id="post">
						<jdoc:include type="message" />
						<jdoc:include type="component" />
					</div>
					<div class="clear"></div>

				</div><!--END LEFT-COL-->
          	<div class="blog-right-col">
              <jdoc:include type="modules" name="posts" style="xhtml" />
              <jdoc:include type="modules" name="comments" style="xhtml" />
              <jdoc:include type="modules" name="archives" style="xhtml" />
              <jdoc:include type="modules" name="categories" style="xhtml" />
			</div><!--END RIGHT-COL-->			
		</div>
    <div class="clear"></div>
    </div> <!-- /main-content -->
	     <div class="clear"></div>    
    <div id="footer">
      <div id="footer-center">
        <div id="left"></div>
        <div id="footer-text">
				SUDZ&amp;INK &copy;<jdoc:include type="modules" name="year" style="xhtml" /> ALL RIGHTS RESERVED<br><br>
          WEBSITE DEVELOPED BY <a href="http://www.gregory-rothstein.com" target="_blank">GPR Web Design</a>
			 
        </div>
        <div id="right"></div>
      </div>
    	<a href="http://www.facebook.com/SudzandInk" target="_blank"><div id="fb-ico"></div></a>
      <a href="http://pinterest.com/sudzandink/" target="_blank"><div id="pin-ico"></div></a>
    </div>

</div><!-- /page-wrap -->
  <!-- Add Image Slider JS File (for front page image slider) -->
  <script type="text/javascript" src="templates/sudz_and_ink/js/image-slider.js"></script>

  <!-- Add JavaScript File (for main scripts) -->
  <script type="text/javascript" src="templates/sudz_and_ink/js/main.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="templates/sudz_and_ink/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="templates/sudz_and_ink/fancybox/jquery.fancybox.js?v=2.1.5"></script>

	<!-- Add Button helper (this is optional) -->
	<script type="text/javascript" src="templates/sudz_and_ink/fancybox/helpers/jquery.fancybox-buttons.js"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<script type="text/javascript" src="templates/sudz_and_ink/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="templates/sudz_and_ink/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <!-- Add Easing (for front page image slider) -->
	<script type="text/javascript" src="templates/sudz_and_ink/js/jquery.easing.1.3.js"></script>
    
	<script type="text/javascript">
	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37386205-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	  </script>
		<script>

	function MM_swapImgRestore() { //v3.0
	  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}
	function MM_preloadImages() { //v3.0
	  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		 var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		 if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}

	function MM_findObj(n, d) { //v4.01
	  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		 d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	  if(!x && d.getElementById) x=d.getElementById(n); return x;
	}

	function MM_swapImage() { //v3.0
	  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	}
	</script>
</body>
</html>



