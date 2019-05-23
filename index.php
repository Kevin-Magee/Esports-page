<!DOCTYPE html>
<html lang="en">
    <head>
        <title>McKendree Esports</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="demo.css" />
		<link rel="stylesheet" type="text/css" href="slicebox.css" />
		<link rel="stylesheet" type="text/css" href="custom.css" />
		<link rel="stylesheet" type="text/css" href="footerstyle.css" />
		<link rel="stylesheet" type="text/css" href="indexstyle.css" />
		<script type="text/javascript" src="modernizr.custom.46884.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style>
	.facepicture {
    background-image: url("league.png");
    min-height: 46rem;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
	</head>
	<body>
		<div class="facepicture">
<div class="container-fluid bg-1"></br></br>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="navbar-collapse collapse show" id="navbarSupportedContent" style="">
         <ul class="navbar-nav mr-auto">
		  <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Teams</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="callofduty.php">Call of Duty</a>
              <a class="dropdown-item" href="csgo.php">Counter Strike</a>
              <a class="dropdown-item" href="league.png">League of Legends</a>
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
		<div class="player">
		</br></br>
			<center>
				<p><font>Play&nbsp;of&nbsp;the&nbsp;month</font></p>
			</center>
		</div>
		</br>
		<div class="container">
			
			<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<div class="image">
							<a>
								<span class="cover"><img src="cod.png" alt="image1"/></span>
							</a>
							
							<a>
								<span class="overlay">
									<video height="100%" width="100%" controls pause><source src="test1.mp4" type="video/mp4"></video>
								</span>
							</a>
							<div class="sb-description">
								<h3>Play by: BeefSupreme</h3>
							</div>
						</div>
					</li> 
					<li>
						<div class="image">
							<a>
								<span class="cover"><img src="csgo.png" alt="image1"/></span>
							</a>
							<a>
								<span class="overlay">
									<video height="100%" width="100%" controls pause><source src="test1.mp4" type="video/mp4"></video>
								</span>
							</a>
							<div class="sb-description">
								<h3>Play by: </h3>
							</div>
						</div>
					</li>
					<li>
						<div class="image">
							<a>
								<span class="cover"><img src="league.png" alt="image1"/></span>
							</a>
							<a>
								<span class="overlay">
									<video height="100%" width="100%" controls pause><source src="test1.mp4" type="video/mp4"></video>
								</span>
							</a>
							<div class="sb-description">
								<h3>Play by: </h3>
							</div>
						</div>
					</li>
					<li>
						<div class="image">
							<a>
								<span class="cover"><img src="pubg.png" alt="image1"/></span>
							</a>
							<a>
								<span class="overlay">
									<video height="100%" width="100%" controls pause><source src="test1.mp4" type="video/mp4"></video>
								</span>
							</a>
							<div class="sb-description">
								<h3>Play by: </h3>
							</div>
						</div>
					</li>
					<li>
						<div class="image">
							<a>
								<span class="cover"><img src="smite.png" alt="image1"/></span>
							</a>
							<a>
								<span class="overlay">
									<video height="100%" width="100%" controls pause><source src="test1.mp4" type="video/mp4"></video>
								</span>
							</a>
							<div class="sb-description">
								<h3>Play by: </h3>
							</div>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div><!-- /wrapper -->

		</div>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="indexjs.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
		</br></br></br></br></br></br></br>
		<footer class="footer">
			</br>
			<div class="footer-nav-group">
				<a  class="footer-nav-item">Twitch&nbsp;&nbsp;</a>
				<a  class="footer-nav-item">Founders&nbsp;&nbsp;</a>
				<a  class="footer-nav-item">Resources</a>
				</br></br>
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
