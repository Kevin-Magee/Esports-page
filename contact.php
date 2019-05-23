 
<!DOCTYPE>
<html>
	<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>McKendree Esports</title>
  <link rel="icon" href="images2/favicon.ico">
  <link rel="stylesheet" href="indexstyle.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="footerstyle.css">
  <link rel="stylesheet" href="contact.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
 <script>
	function initMap() {
	var option = {
    center: {lat:38.6084,lng:-89.8144},
    zoom: 12
  };
  var map = new google.maps.Map(document.getElementById("map"), option);

  var marker = new google.maps.Marker({
    position: {lat:38.6084,lng:-89.8144},
	map:map
  });
  
  var infoWindow = new google.maps.InfoWindow({
content:'<h1>McK</h1>'});
marker.addListener('click', function(){
	infoWindow.open(map, marker);
});
}

  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb3fbKGeM-6i9KvDMbxv--lcahyJqxQ1Q&callback=initMap"></script>
<body>
<div class="facepicture">
<div class="container-fluid bg-1"></br></br>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="navbar-collapse collapse show" id="navbarSupportedContent" style="">
         <ul class="navbar-nav mr-auto" style="text-align: left">
		  <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Teams</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="callofduty.php">Call of Duty</a>
              <a class="dropdown-item" href="csgo.php">Counter Strike</a>
              <a class="dropdown-item" href="leagueoflegends.php">League of Legends</a>
              <a class="dropdown-item" href="pubg.php">PUBG</a>
              <a class="dropdown-item" href="smite.php">Smite</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Content</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="livestream.php">Live streams</a>
              <a class="dropdown-item" href="esportslab.php">Esports Lab</a>
            </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div> 
  <div class="map">
  <div id="map"></div>
  <div class="map-c">
    <h1>McKendree University</h1>
	</br>
    <p>Contact and join our </br> growing team today!</p>
    <div class="det" style="text-align: left"><i class="fa fa-envelope"></i> esports@mckendree.edu</div>
	</br>
	<p>Schedule your visit today!</p>
	<div class="det" style="text-align: left"><i class="fa fa-map-marker"></i> 901 College Road, Lebanon IL</div>
    <div class="det" style="text-align: left"><i class="fa fa-phone"></i>618-537-6831</div>
  </div>
</div>
  </br>
  <footer class="footer">
			</br>
			<div class="footer-nav-group">
				<a  class="footer-nav-item">Twitch&nbsp;&nbsp;</a>
				<a  class="footer-nav-item">Founders&nbsp;&nbsp;</a>
				<a  class="footer-nav-item">Resources</a>
				</br>
				<p><font color="white" size="2vmin">&copy  McKendree University</font></p>
			</div>
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>
			</ul>
		</footer>
		
		<div class="logo">
			<center><p><font color="white" size="10px">Logo</font></p></center>
		</div>
		<div class="biglogo">
			<center><p><font color="white" size="20px">Logo</font></p></center>
		</div>
</body>
</html>












