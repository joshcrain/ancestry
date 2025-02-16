<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>Arthur Crain b. 1860 - d. 1896 | Crain Ancestry</title>
<meta name="Description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="/ancestry/styles.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,400italic,900' rel='stylesheet' type='text/css'>
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
  <nav class="paging"> <a href="/ancestry/ancestors/ebenezer-crain-jr/" class="previous">previous</a>
    <!--<a href="/ancestry/ancestors/" class="next">next</a>-->
  </nav>
  <div class="wrapper clearfix">
    <header>
      <h1>Arthur Crain</h1>
      <h2>1860 - 1896</h2>
      
    </header>
    <p><i>Arthur Crain</i> was born on July 13, 1860 in Cheshire County, New Hampshire. In 1876 he moved with his family from Shawano, Wisconsin to Iowa. He married Caroline Bailey, on June 5th, 1881 near Zearing, Iowa. She was born on December 31, 1860 in Iberia, Missouri. The name Bailey suggests an English family lineage, although we know her parents were born in Kentucky.</p>
    <p> Albert and Caroline were the parents of 5 children: Charles, Estella, Hillis, Albert and Jessie (Reed married name). They moved to Hardin County in 1890 where they had a farm. Unable to find a sustainable income, Arthur and his brother Albert moved  to Chippawa Falls, Wisconsin to find work.</p>
    <p>Arthur died March, 1896 in Phillips, Wisconsin where he worked in logging. He is buried in Chippawa Falls, Wisconsin. Caroline died June 6, 1931 in Hubbard, Iowa where she ran the farm in the absence of Arthur. </p>
  </div>
  
  
  <section>
<div class="wrapper">
    <h2>Transcriptions</h2>
    <p>The following has been transcribed from <em>&ldquo;Community History, Zearing, Iowa.&rdquo;</em></p>
    <blockquote>
      <p>Arthur L. Crain, the son of Ebenezer, was born July 13, 1860, at Winchester, Chesire county, New Hampshire. Arthur came to our community in 1876 from Shawano, Wisconsin. Caroline Bailey was born at Iberia, Missouri, on December 31, 1860. She came to Iowa with her parents in 1870. Arthur and Caroline were married on June 5, 1881. They moved to Hardin county, Iowa, in 1890. </p>
      <p>Arthur and Caroline were the parents of five children. They were Charles L., Estella A., Hillis H., Albert W., and Jessie V.</p>
      <p>Arthur L. died in March, 1896, at Phillips, Wisconsin. He was buried a Chippewa Falls, Wisconsin. Caroline died on June 6, 1931. She was buried in the Hubbard Cemetery, Hubbard, Iowa. </p>
    </blockquote>
    <cite>Grimm, Donald H. Community History, Zearing, Iowa. Ames, Iowa: Greenwood Printing Company, 1956. Page 128.</cite></div>
    </section>
     <div id="map" class="map_canvas"></div>
    <footer>
<div class="wrapper">
<h3>Sources</h3>
      <ul>
        <li>Grimm, Donald H. <em>Community History, Zearing, Iowa</em>. Ames, Iowa: Greenwood Printing Company, 1956. Page 128.</li>
      </ul>
</div>
    </footer>
    <script type="text/javascript">
	
	var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(42.738375,-82.405856),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });
	map.setOptions({scrollwheel: false, disableDoubleClickZoom: true});
	
	var styles = [
  {
    "featureType": "water",
    "stylers": [
      { "visibility": "on" },
      { "gamma": 0.99 },
      { "lightness": 1 },
      { "hue": "#0091ff" },
      { "saturation": -75 }
    ]
  },{
    "featureType": "road.highway",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "landscape.natural.landcover",
    "stylers": [
      { "visibility": "on" },
      { "hue": "#44ff00" },
      { "saturation": -200 }
    ]
  }
];

map.setOptions({styles: styles});

//Points of Interest
	var smPoint = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
  
   //Surry, New Hampshire 
	var surryLatLng = new google.maps.LatLng(43.017778,-72.321111);
  	var surryMarker = new google.maps.Marker({
      position: surryLatLng,
      map: map,
      icon: smPoint
  });
  
//Zearing, Iowa 
	var zearingIALatLng = new google.maps.LatLng(42.161667, -93.298056);
  	var zearingIAMarker = new google.maps.Marker({
      position: zearingIALatLng,
      map: map,
      icon: smPoint
  });
   
 //Iberia, Missouri 
	var iberiaMOLatLng = new google.maps.LatLng(38.088333, -92.293611);
  	var iberiaMOMarker = new google.maps.Marker({
      position: iberiaMOLatLng,
      map: map,
      icon: smPoint
  });

   //Shawano, Wisconsin 
	var shawanoWILatLng = new google.maps.LatLng(44.776667, -88.601944);
  	var shawanoWIMarker = new google.maps.Marker({
      position: shawanoWILatLng,
      map: map,
      icon: smPoint
  });
  
//Hardin County, Iowa 
	var hardinCountyIALatLng = new google.maps.LatLng(42.373889, -93.244722);
  	var hardinCountyIAMarker = new google.maps.Marker({
      position: hardinCountyIALatLng,
      map: map,
      icon: smPoint
  });
    
//Chippewa Falls, Wisconsin 
	var chippewaFallsWILatLng = new google.maps.LatLng(44.933333, -91.4);
  	var chippewaFallsWIMarker = new google.maps.Marker({
      position: chippewaFallsWILatLng,
      map: map,
      icon: smPoint
  });
  
//Phillips, Wisconsin 
	var phillipsWILatLng = new google.maps.LatLng(45.691667, -90.401944);
  	var phillipsWIMarker = new google.maps.Marker({
      position: phillipsWILatLng,
      map: map,
      icon: smPoint
  });
  
//Hubbard, Iowa 
	var hubbardIALatLng = new google.maps.LatLng(42.305, -93.300833);
  	var hubbardIAMarker = new google.maps.Marker({
      position: hubbardIALatLng,
      map: map,
      icon: smPoint
  });

  
//Info Windows
infowindow = new google.maps.InfoWindow(); 

function showSurry(event) {
    var contentString = "<b><a href='http://en.wikipedia.org/wiki/Surry,_New_Hampshire'>Cheshire County, New Hampshire</a></b><br />Arthur Crain<br />Location of Birth";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}

function showZearingIA(event) {
    var contentString = "<b>Zearing, Iowa</b><br />Arthur and Caroline<br />Location of Marriage";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}

function showIberiaMO(event) {
    var contentString = "<b>Iberia, Missouri</b><br />Caroline<br />Location of Birth";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}

function showShawanoWI(event) {
    var contentString = "<b>Shawano, Wisconsin</b><br />Arthur<br />Came through on the way to Iowa: 1876.";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}

function showHardinCountyIA(event) {
    var contentString = "<b>Hardin County, Iowa</b><br />Arthur and Caroline<br />Approximate Location Of Farm: 1890";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}

function showChippawaFallsWI(event) {
    var contentString = "<b>Chippawa Falls, Wisconsin</b><br />Arthur and brother Albert, moved for work.<br />Arthur's Burial Location: 1896.";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}

function showPhillipsWI(event) {
    var contentString = "<b>Phillips, Wisconsin</b><br />Location Arthur's death.";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}

function showHubbardIA(event) {
    var contentString = "<b>Hubbard, Iowa</b><br />Caroline<br /> Location at death.";
    contentString += "";
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map); 
}


//Info Windows Click Events
google.maps.event.addListener(surryMarker, 'click', showSurry);
google.maps.event.addListener(zearingIAMarker, 'click', showZearingIA);
google.maps.event.addListener(iberiaMOMarker, 'click', showIberiaMO);
google.maps.event.addListener(shawanoWIMarker, 'click', showShawanoWI);
google.maps.event.addListener(phillipsWIMarker, 'click', showPhillipsWI);
google.maps.event.addListener(hardinCountyIAMarker, 'click', showHardinCountyIA);
google.maps.event.addListener(chippewaFallsWIMarker, 'click', showChippawaFallsWI);
google.maps.event.addListener(hubbardIAMarker, 'click', showHubbardIA);

</script>
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ancestry/_includes/site_footer.php";
   include_once($path);
?>
</body>
</html>
