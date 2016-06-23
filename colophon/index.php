<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>Colophon | Crain Ancestry</title>
<meta name="Description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="/ancestry/styles.css" rel="stylesheet" type="text/css">
<!--[if IE]>
  <script src= "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1904163-5']);
  _gaq.push(['_setDomainName', 'thejoshcrain.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ancestry/_includes/site_header.php";
   include_once($path);
?>
<section class="clearfix">
  <div class="wrapper clearfix">
    <header>
      <h1>Colophon</h1>
      <h2>Production Notes</h2>
    </header>
    <p>The <a href="/heraldry/">Crane coat of arms</a> located on the Heraldry page is based on two drawings found in <em>Genealogy Of The Crane Family. Volume I</em> (frontispiece) and <em>The Cranes of Suffolk, extr. from &lsquo;The visitation of Suffolke&rsquo;</em> (page 3). Care was taken to honor these examples and follow the description outlined in the associated <a href="http://en.wikipedia.org/wiki/Blazon">Blazon</a>. The illustration was first drawn in pencil then inked with India Ink. The final rendering was color corrected and saved for web with Photoshop. </p>
    <p>This site uses <em>Georgia</em> and <em>Fontin</em> for typography, and was hand-coded in HTML and CSS with the use of TextWrangler on a Mac. Photos were taken by me with an iPhone, unless otherwise noted. All photos are copyright their respective owner. </p>
    <p>The self portrait located in the footer of the website was painted with Procreate&reg; on an iPad Mini with my finger. </p>
    <hr>
    <footer>
      <p>This site is dedicated to my dad for all of his hard work and research <em>many years</em> before the Internet existed.</p>
    </footer>
  </div>
</section>
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ancestry/_includes/site_footer.php";
   include_once($path);
?>
</body>
</html>
