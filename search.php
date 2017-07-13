<?php
?>
<html>
<head>
<title>Search | TCKP</title>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="css/animate.css" type="text/css" media="all">

</head>


<body class="white_bg animated fadeIn">
	<div class="content">	
		<!-- TOP DIV -->
		<div class="container">	
			<!-- TOP LOGO AND MENU DIV -->
			<div class="row top_div">
				<div class="col-sm-12">	
					<!-- LOGO DIV -->
					<div class="col-lg-6 col-sm-5 col-xs-3">
						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-9">
							<a href="index.php"><img class="img logo" src="images/logo.png" alt=""></a>
						</div>
						<div class="col-lg-10 col-md-9 col-sm-8 col-xs-3 text-left">
							<h4 class="color-blue top_div_logo_heading"> TCKP DISCOVER</h4>
							<h5 class="heading-description">Tourism Cooperation KP</h5>
						</div>
					</div>
					<!-- MENU DIV -->				
					<div class="col-lg-6 col-sm-7 col-xs-9">
							<nav class="navbar">
								<div class="navbar-header">
							      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuBar">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>                        
							      </button>
							    </div>
							    <div class="collapse navbar-collapse" id="menuBar">
									<ul class="nav navbar-nav">
										<li class="top-links color-black"><a href="#">Sign In</a></li>
										<li class="top-links color-black"><a href="#">Plan</a></li>
										<li class="top-links color-black"><a href="#">Events</a></li>
										<li class="top-links color-black"><a href="#">Destinations</a></li>
									</ul>
								</div>
							</nav>
					</div>
				</div>
			</div>

			<!-- BREAD CRUMB AND WEATHER DIV -->
			<div class="row breadcrumbdiv">	
				<div class="col-sm-push-1 col-sm-11">
					<!-- BREADCRUMB DIV -->
					<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
						<ol class="breadcrumb">
						  <li><a href="index.php">Home</a></li>
						  <li><a href="discover.php">Discover</a></li>						  						  
						  <li class="selected-region active"></li>
						</ol>
					</div>
					<!-- ELEVATION AND WEATHER DIV -->				
					<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
						<div class="col-sm-6 col-xs-12">
						</div>
						<div class="col-sm-6 col-xs-12">
							<p class="about_elevation">8202'<br/>Elevation</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- BANNER ROW -->
		<div class="container-fluid">
			<div class="row">
				<div class="banner-wrapper">
					<div class="searchPage_banner">
						<img class="img img-responsive" src="images/img_1.jpg" />
						<!-- SEARCH FORM 
						<form class="form-inline search search-page" action="search.php">
			        		<div class="form-group col-sm-1 col-xs-12 text-center ">
			        			<span class="glyphicon glyphicon-search"></span>
			        		</div>
							<div class="form-group col-sm-3 col-xs-12">
							      	<select class="form-control search_select" id="sel1" name="sel1">
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Mustard</option>
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Toilet Paper</option>
							      	</select>
							</div>
							<div class="form-group col-sm-3 col-xs-12">
							      	<select class="form-control search_select" id="sel2" name="sel2">
							          <option>Mustard</option>
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Toilet Paper</option>
							      	</select>
						    </div>
						    <div class="form-group col-sm-3 col-xs-12">
							      	<select class="form-control search_select" id="sel3" name="sel3">
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Mustard</option>
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Toilet Paper</option>
							      	</select>
						    </div>								    
						    <div class="form-group col-sm-2 col-xs-12 text-right">
							    <button type="submit" class="btn btn-info">Submit</button>
							</div>
						</form>
						-->
					</div>
				</div>
			</div>
		</div>

		<!-- SEARCH FORM
		<div class="container">
			<div class="row margins">
				<form class="form-inline search-form" action="search.php">
					<div class="form-group">
						<label class="search-label" for="category">Show me</label>
						<select class="form-control search_select" id="category" name="category">
						    <option value="trekking">Trekking</option>
							<option value="sightseeing">Sight Seeing</option>
							<option value="attractions">Attractions</option>
							<option value="fishing">Fishing</option>
							<option value="paragliding">Paragliding</option>
							<option value="ziplining">Zip Lining</option>
							<option value="rafting">White River Rafting</option>
							<option value="culture">Culture</option>
							<option value="transportion">Transportion</option>
							<option value="hotel">Hotels</option>
						</select>
					</div>
					<div class="form-group">
						<label class="search-label" for="category-subtype">of type </label>
						<select class="form-control search_select" id="category-subtype" name="category-subtype">
						    <option value="meuseum">Meuseum</option>
							<option value="gallery">Gallery</option>
							<option value="nationalpark">National Park</option>
							<option value="beach">Beach</option>
							<option value="rental">Rental</option>
							<option value="historicsite">Historic Site</option>
							<option value="landmark">Land Mark</option>
							<option value="mosque">Mosque</option>
							<option value="viewpoint">View Point</option>
							<option value="lorem">Lorem</option>
							<option value="ipsum">Ipsum</option>
						</select>
					</div>
					<div class="form-group">
						<label class="search-label" for="region">in</label>
						<select class="form-control search_select" id="region" name="region">
							<option value="naran">Naran</option>
							<option value="kaghan">Kaghan</option>
							<option value="swat">Swat</option>
							<option value="peshawar">Peshawar</option>
							<option value="abbottabad">Abbottabad</option>
							<option value="chitral">Chitral</option>
							<option value="gilgit">Gilgit</option>
							<option value="kohistan">Kohistan</option>
							<option value="DI khan">DI Khan</option>
							<option value="hunza">Hunza</option>
						</select>
					</div>
				</form>
			</div>
		</div>
		< END OF SEARCH FORM -->

		<!-- RESULTS ROW -->
		<div class="container">
			<div class="row margins">
				<div class="col-sm-8 col-xs-12">
					<!-- RESULT 1-->
					<div class="">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/stock-img1.jpg" />
							</div>

							<div class="col-sm-6  col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated"><span><img src="images/noun_649646_cc.png" /></span><span><img src="images/noun_728690_cc.png" /></span>
								<span><img src="images/noun_889343_cc.png" /></span><span><img src="images/noun_1026748_cc.png" /></span></p>
								<p class="result-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. </p>
							</div>

							<div class="col-sm-2  col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue"><span class="result-caption">Rs. </span><br> 1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 2-->
					<div class="">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/stock-img2.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated"><span><img src="images/noun_649646_cc.png" /></span><span><img src="images/noun_728690_cc.png" /></span>
								<span><img src="images/noun_889343_cc.png" /></span><span><img src="images/noun_1026748_cc.png" /></span></p>
								<p class="result-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue"><span class="result-caption">Rs. </span><br> 1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 3-->
					<div class="">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/stock-img4.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated"><span><img src="images/noun_649646_cc.png" /></span><span><img src="images/noun_728690_cc.png" /></span>
								<span><img src="images/noun_889343_cc.png" /></span><span><img src="images/noun_1026748_cc.png" /></span></p>
								<p class="result-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue"><span class="result-caption">Rs. </span><br> 1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 4-->
					<div class="">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/stock-img3.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated">
                                	<span><img src="images/user/noun_649646_cc.png" /></span>
                                    <span><img src="images/user/noun_728690_cc.png" /></span>
									<span><img src="images/user/noun_889343_cc.png" /></span>
                                    <span><img src="images/user/noun_1026748_cc.png" /></span>
                                </p>
								<p class="result-description">
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. 
                                </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue"><span class="result-caption">Rs. </span><br> 1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 5-->
					<div class="">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/stock-img1.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated">
                                	<span><img src="images/user/noun_649646_cc.png" /></span>
                                    <span><img src="images/user/noun_728690_cc.png" /></span>
									<span><img src="images/user/noun_889343_cc.png" /></span>
                                    <span><img src="images/user/noun_1026748_cc.png" /></span>
                                </p>
								<p class="result-description">
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. 
                                </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue"><span class="result-caption">Rs. </span><br> 1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- END OF RESULTS -->
				</div>

				<div class="col-sm-4 col-xs-12">
					<div class="">
						<form class="form-horizontal search-form" action="search.php">
							<div class="form-group clearfix">
								<label class="control-label search-label" for="category" for="category">Show me</label>
								<div class="col-lg-8 col-md-12">
									<select class="form-control search_select" id="category" name="category">
									    <option class="selectoptions" value="trekking">Trekking</option>
										<option class="selectoptions" value="sightseeing">Sight Seeing</option>
										<option class="selectoptions" value="attractions">Attractions</option>
										<option class="selectoptions" value="fishing">Fishing</option>
										<option class="selectoptions" value="paragliding">Paragliding</option>
										<option class="selectoptions" value="ziplining">Zip Lining</option>
										<option class="selectoptions" value="rafting">White River Rafting</option>
										<option class="selectoptions" value="culture">Culture</option>
										<option class="selectoptions" value="transportion">Transportion</option>
										<option class="selectoptions" value="hotel">Hotels</option>
									</select>
								</div>
							</div>
							
							<div class="form-group clearfix">
								<label class="control-label search-label" for="region">in</label>
								<div class="col-lg-8 col-md-12">
									<select class="form-control search_select" id="region" name="region">
										<option class="selectoptions" value="naran">Naran</option>
										<option class="selectoptions" value="kaghan">Kaghan</option>
										<option class="selectoptions" value="swat">Swat</option>
										<option class="selectoptions" value="peshawar">Peshawar</option>
										<option class="selectoptions" value="abbottabad">Abbottabad</option>
										<option class="selectoptions" value="chitral">Chitral</option>
										<option class="selectoptions" value="gilgit">Gilgit</option>
										<option class="selectoptions" value="kohistan">Kohistan</option>
										<option class="selectoptions" value="DI khan">DI Khan</option>
										<option class="selectoptions" value="hunza">Hunza</option>
									</select>
								</div>
							</div>

							<div class="form-group checks">
								<p class="search-label">of type </p>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="meuseum" name="meuseum" id="meuseum">Meuseum
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="gallery" name="gallery" id="gallery">Gallery
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="nationalpark" name="nationalpark" id="nationalpark">National Park
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="beach" name="beach" id="beach">Beach
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="rental" name="rental" id="rental">Rental
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="historicsite" name="historicsite" id="historicsite">Historic Site
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="landmark" name="landmark" id="landmark">Land Mark
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="mosque" name="mosque" id="mosque">Mosque
									</label>
								</div>
								<div class="col-lg-4 col-sm-6 col-xs-12">
									<label class="control-label checkbox-label">
										<input class="types" type="checkbox" value="viewpoint" name="viewpoint" id="viewpoint">View Point
									</label>
								</div>
							</div>
						</form>
					

					</div>

					<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCe0I76FCBsgJP2dh193EWuX2IPST4gn0k&sensor=false"></script>
					<script type="text/javascript">
                    	var latitude= ["34.001527", "33.992333", "33.987094", "34.035952", "34.059421"];
                    	var longitude= ["71.450434", "71.495198", "71.471981", "71.421389", "71.670641"];
                    	var map = null; 
                    	var markerArray = []; 

						function initialize() {
                            var myOptions = {

                                zoom: 12,
                                center: new google.maps.LatLng(latitude[0], longitude[0]),
                                mapTypeControl: true, 
                                mapTypeControlOptions: {
                                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                                },
                                navigationControl: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            }
                            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                            infowindow = new google.maps.InfoWindow({
                                size: new google.maps.Size(150, 50)
                            });

                            google.maps.event.addListener(map, 'click', function() {
                                infowindow.close();
                            });

                            for (var i = 0; i < longitude.length; i++) {                            
                                createMarker(new google.maps.LatLng(latitude[i],longitude[i]));
                            }
							//console.log(description);
                        }

                        var onMarkerClick = function() {
                          var marker = this;
                          var latLng = marker.getPosition();
                          infowindow.open(map, marker);
                        };


	                    function createMarker(latlng){
	                        var marker = new google.maps.Marker({
	                            position: latlng,
	                            icon: icon = "http://maps.google.com/mapfiles/ms/icons/blue.png",
	                            animation: google.maps.Animation.DROP,
	                            map: map
	                        });
	                        google.maps.event.addListener(marker, 'click', onMarkerClick);
	                        markerArray.push(marker);
	                    }

	                    window.onload = initialize;
	                </script>
	              	
	              	<div class="">
	              		<div id="map_canvas"></div>
	              	</div>
				</div>

				<!-- SEARCH DESCRIPTION TEXT -->
				<div class="row">
					<div class="col-xs-12 text-center">
						<h4 class="color-black spacing">Showing 3 of 3 results</h4>
					</div>
				</div>

				<!-- SHOW MORE RESULTS -->
				<div class="row">
					<div class="col-xs-12 text-center">
						<a href="#"><button class="btn btn-info">SHOW MORE</button></a>
					</div>
				</div>
			</div>
		</div>
		<!-- END OF RESULTS ROW -->

		<!-- START OF FOOTER -->
		<!-- START OF FOOTER -->
		<div class="footer">
			<div class="col-sm-12">
				<div class="col-sm-push-2 col-sm-8 col-sm-pull-2">
					<ul class="text-center">
						<li class="footer-links"><a href="#">Home</a></li>
						<li class="footer-links"><a href="#">Terms</a></li>
						<li class="footer-links"><a href="#">Privacy Policy</a></li>
						<li class="footer-links"><a href="#">Site Map</a></li>
						<li class="footer-links"><a href="#">Discover Places</a></li>
						<li class="footer-links"><a href="#">Navigation</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END OF FOOTER -->
	</div>

	<style type="text/css">
        #map_canvas {
            width: 100%;
            height: 700px;
        }
    </style>
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.selected-region').text(window.sessionStorage.getItem('region'));
			$('#region').val(window.sessionStorage.getItem('region'));
			$('#category').val(window.sessionStorage.getItem('category'));
			var type = window.sessionStorage.getItem('category-subtype');
			if((type!= "") || (type!= "null")) {
				$('#'+type).attr("checked","checked"); 
			}
			console.log(sessionStorage);

			$('#category').change(function() {
				window.sessionStorage.setItem('category',$(this).val());
				window.sessionStorage.setItem('activity',$(this).val());
				console.log(sessionStorage);
			});

			$('#region').change(function() {
				window.sessionStorage.setItem('region',$(this).val());
				console.log(sessionStorage);
			});


			$('.glyphicon-remove').click(function(){
				$('.search')[0].reset();
			}); 

			// SET SELECTED ACTIVITY
			$('button').click(function() {
				window.sessionStorage.setItem('path', $(this).attr('id'));
				console.log(sessionStorage);
			});
		});
	</script>

</body>
</html>

		
			