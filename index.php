<?php
if (isset($_POST[submit])){
  include 'process.php';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <title>Erin and Johanna&rsquo;s Wedding!</title>
    <meta charset="utf-8">
    <link rel="canonical" href="erinandjohanna.com" />
    <link rel="shortlink" href="#">
    <meta name="Robots" content="index, all" />
    <meta name="description" content="">
    <meta name="Author" content="Johanna Ruiz" />
    <!-- Geolocation -->
    <meta name="geo.region" content="US-MN" />
    <meta name="geo.placename" content="Saint Paul,MN" />
    <meta name="geo.position" content="44.96502,	-93.15268" />
    <meta name="ICBM" content="44.96502,	-93.15268" />
    <!-- Viewport Setting -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>
    <!--<script src="js/hotel.js"></script>-->
    <script type="text/javascript" src="//use.typekit.net/jxm1imp.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
  <!-- Add your site or application content here -->
  <header role="banner" class="">
    <nav role="navigation">
      <ul id="nav" class="clearfix">
        <li><a href="#photos"><i class="fa fa-camera fa-2x"></i><span class="i-block">Photos</span></a></li>
        <li><a href="#couple"><i class="fa fa-female fa-2x"></i><i class="fa fa-male fa-2x"></i><span class="i-block">The Couple</span></a></li>
        <li><a href="#wedding"><i class="fa fa-calendar fa-2x"></i><span class="i-block">The Wedding</span></a></li>
        <li><a href="#rsvp"><i class="fa fa-envelope fa-2x"></i><span class="i-block">RSVP</span></a></li>
        <li><a href="#directions"><i class="fa fa-compass fa-2x"></i><span class="i-block">Directions</span></a></li>
        <li><a href="#registry"><i class="fa fa-gift fa-2x"></i><span class="i-block">Registry</span></a></li>
      </ul>
    </nav>
  </header>
  <main role="main" id="content" class="wedding">
    <section id="photos" class="carousel">
    	<ul class="rslides">
    	  <li><img src="img/slide-6.jpg" alt=""></li>
    	  <li><img src="img/slide-4.jpg" alt=""></li>
    	  <li><img src="img/slide-1.jpg" alt=""></li>
    	  <li><img src="img/slide-3.jpg" alt=""></li>
    	  <li><img src="img/slide-2.jpg" alt=""></li>
    	  <li><img src="img/slide-5.jpg" alt=""></li>
    	</ul>
    </section><!--end carousel-->
    <section id="couple" class="bios clearfix">
      <h2 class="ribbon"><span class="ribbon-content">Meet the Bride and Groom</span></h2>
    	<div class="erin info clearfix">
    	  <img src="img/erin.jpg" alt="">
    	 <h3>Erin</h3>
    	 <p>Erin was born in South Korea and grew up in Rochester, Minnesota. She went to college at the University of North Dakota in Grand Forks and majored in Social Work. Erin is currently a county social worker assessing the aging and disability populations. Erin feels fortunate she was able to translate her passion for helping people into a career.
    	 </p>
    	 <p>In her free time she enjoys crafting, baking, snowboarding, jogging, and spending time with family and friends. Erin is a self-proclaimed foodie and ice cream fanatic; she loves to try new restaurants and is always willing to give a suggestion on where to eat.
    	 </p>
    	</div>
    	<div class="johanna info clearfix">
    	  <img src="img/johanna.jpg" alt="">
    	 <h3>Johanna</h3>
    	 <p>Johanna was born in Fridley and grew up in Coon Rapids, Minnesota. He attended college at The Art Institutes International Minnesota where he majored in Web Design and Interactive Media, focusing on Web Development. Johanna is currently a Full Stack Developer with Augeo+Greer and works on really cool websites and web applications.</p>
    	 <p>In his free time, Johanna likes to listen to music, cook, ride his &ldquo;fixie&rdquo;, snowboard, play with Raja and spend time with friends and family. Johanna is a hipster, coffee aficionado and foodie; He can always recommend a good cup of coffee and a tasty place to eat.</p>
    	</div>
    </section><!--end bios-->
    <section id="wedding" class="event clearfix">
    	<h2>The Wedding</h2>
    	  <div class="ceremony-info">
    	    <p>There&rsquo;s no church, no aisle and no chairs (at least for the ceremony).<br/><span class="bold">Saturday, the 28<sup>th</sup> of June 2014</span> at Como Park Pavillion, <br/>Erin Lynn Lee and Johanna Bo will be vowing a lifetime to each other.</p>
    	    <p>The ceremony will be held at <span class="bold">4:30 p.m. sharp</span>. Please allow for ample time to park and walk (see parking map below). The venue is a sheltered pavilion and the ceremony will be held rain or shine.</p>
    	    <p>Please dress appropriate for the weather. We suggest business casual attire e.g. summer dresses, khakis, polos, short sleeve button ups etc&hellip;</p>
    	  </div>
    	  <div class="reception-info">
    	    <p>Dinner will follow shortly after the ceremony with desert to follow. Dinner will be a buffet of Asian &amp; Mexican fusion foods. The main course will include two meat options of chicken and pork, as well as a vegetarian option. Please note any special food accommodations when RSVP&rsquo;ing, we will do our best to accommodate the request.</p>
    	    <p>There will be a popcorn bar for snacking.<br/>Dessert will be an ice cream bar from Gand Ole Creamery.</p>
    	  </div>
    </section><!--end info-->
    <section id="rsvp" class="rsvp clearfix">
      <h2>RSVP</h2>
      <p>Please use the registration form to the right to RSVP for the event. Make note of any food allergies or any special needs in the &ldquo;Special Requests&rdquo; field. All fields required unless denoted with *.<br/><br/><?php echo($msg); ?> </p>
      <p></p>
    	<form action="<?= $_SERVER['PHP_SELF'] . "#rsvp" ?>" method="post" class="clearfix">
    	  <label for="fname"></label>
    	  <input type="text" name="fname" placeholder="First Name" value="<?php echo ($_POST['fname']); ?>" id="fname" class="double fname">
    	  <label for="lname"></label>
    	  <input type="text" name="lname" placeholder="Last Name" value="<?php echo ($_POST['lname']); ?>" id="lname" class="double lname">
    	  <label for="address"></label>
    	  <input type="text" name="address" placeholder="Address" value="<?php echo ($_POST['address']); ?>" id="adr" class="single adr">
    	  <label for="city"></label>
    	  <input type="text" name="city" placeholder="City" value="<?php echo ($_POST['city']); ?>" id="city" class="third city">
    	  <label for="state"></label>
    	  <input type="text" name="state" placeholder="State" value="<?php echo ($_POST['state']); ?>" id="state" class="third state">
    	  <label for="zipcode"></label>
    	  <input type="text" name="zipcode" placeholder="Zipcode" value="<?php echo ($_POST['zipcode']); ?>" id="zip" class="third zip"> 
    	  <label for="email"></label>
    	  <input type="email" name="email" placeholder="Email" value="<?php echo ($_POST['email']); ?>" id="email" class="double email">
    	  <label for="telephone"></label>
    	  <input type="telephone" name="telephone" placeholder="Telephone" value="<?php echo ($_POST['telephone']); ?>" id="tel" class="double tel">
    	  <label for="guests"></label>
    	  <input type="text" name="guests" placeholder="Number of Guests" value="<?php echo ($_POST['guests']); ?>" id="guests" class="double guests">
    	  <label for="request"></label>
    	  <input type="text" name="requests" placeholder="Special Requests*" value="<?php echo ($_POST['requests']); ?>" id="requests" class="double requests">
    	  <label for="submit"></label>
    	  <input type="submit" name="submit" value="Submit">
    	</form>
    </section><!--end rsvp-->
    <section id="directions" class="directions clearfix">
      <h2>Directions, Parking and Hotel Information</h2>
      <div class="map-info clearfix">
        <h3>Directions</h3>
        <div class="directions-info">
          <p>The wedding and reception is being held at the <span class="bold">Como Park Pavilion</span> located at <span class="bold">1199 Midway Pkwy, St Paul, MN 55103</span>.</p>
          <p>For directions, you can click the red marker on the map to the right or <a href="http://tiny.cc/epjrwd14" taget="_blank">Click here</a> and be brought to Google Maps.</p>
        </div>
        <div id="map"></div>  
      </div>
      <div class="parking clearfix">
        <h3>Parking</h3>
        <div class="parking-info">
          <p>Parking is abundant near the venue and is open to the public on a first come basis. There are many parking lots located near the pavilion as well as an abundance of street parking near the venue. Please view the parking map to see where parking is available. Please note that there are some restrictions to street parking in the neighborhod nearby. We do not recommend using the como shuttle lot because the Como Zoo closes at 6pm and you&rsquo;ll have to walk roughly a mile back to your car.</p>
        </div>
        <span id="parking-map" class="zoom"><img src="img/como-area-parking-and-amenities.jpg" alt="City of Saint Paul Parks and Recreation. Como Park Regional" class="parking-image" ></span>
      </div>
      <div class="hotel clearfix">
        <h3>Hotel Information</h3>
        <div class="hotel-info">
          <p>If you&rsquo;re traveling from out of town and need a hotel room, we&rsquo;ve got hotel rooms blocked off for our out of town guests.</p>
          <p>The hotel rooms are located just a mile from the venue at the Best Western at Bandana Square. The address to the hotel is 1010 Bandana Blvd W, St Paul, MN 55108.</p>
          <p>To book a room, you can call <a href="tel:6516471637" target="_blank">(651) 647-1637</a> or book a room online by visiting <a  href="http:/book.bestwestern.com" target="_blank">book.bestwestern.com</a></p>
        </div>
        <div class="hotel-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2822.64085864393!2d-93.15433399999999!3d44.97129100000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe5b932d04cf1ea06!2sBest+Western+Bandana+Square!5e0!3m2!1sen!2sus!4v1398040786117" width="548" height="350" frameborder="0" style="border:0"></iframe>
        </div>
      </div>
    </section><!--end directions-->
    <section id="registry" class="registry clearfix">
      <h2>We&rsquo;re Registered at</h2>
        <p>Click the icons below to view our registry.</p>
        <a href="http://www.target.com/GiftRegistrySearchViewCmd?registryType=WD&jsRequest=true&catalogId=10051&status=completePage&cumulativeTime=-1&listId=2guCZAsOIeW-9f1yHdXnAQ&noOfPings=&registryFirstName=Erin&langId=-1&segmentGrpName=-1&storeId=10151&registryLastName=Putnam" target="_blank"><img src="img/target.png" alt="Target"></a>
        <a href="http://www.honeyfund.com/wedding/erinandjohanna" target="_blank"><img src="img/honeyfund.png" alt="Honey Fund"></a>
        <a href="http://www.amazon.com/registry/wedding/1DIPG45U3FS9S" target="_blank"><img src="img/amazon.png" alt="Amazon"></a>
    </section><!-- -->
    <section class="other-info">
    	
    </section><!-- -->
  </main>
  <footer role="contentinfo" class="">
    <small class="">
  	  <span class="" itemscope></span>
    </small>
  </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="js/responsiveslides.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/app.js"></script>
   <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>
  </body>
</html>