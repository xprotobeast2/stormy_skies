<!DOCTYPE html>
<html lang="en">  
  	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Stormy Skies</title> 
	    <!-- Bootstrap -->
	    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
	    <link href="../css/styles.css" rel = "stylesheet">  
  		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwvDeUmfCVgrrUyU29pb_kWzjW600k3Ac&libraries=geometry"></script>
    	<script type="text/javascript" src="../map/us_borders_dict.js"></script>
	    <link href="../img/header.png" rel = "icon" >

	<script type="text/javascript" src="../info_box.js"></script>
    	
	</head>

  	<body style="background-image: url(../img/background.jpg); color: white;">
		<nav class="navbar navbar-default navbar-custom">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <a class="navbar-brand" href="../index.php"> 
		        	<img src="../img/bolt.png"  width=32 height=32>
		        </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        

		        <li><a style = "color:white;" href="#" class = "active" >Queries</a></li>
		        <li><a style = "color:white;" href="../predictions/predictions.php">Playback</a></li>
		        
		      </ul>

		     
		      
		      <ul class="nav navbar-nav navbar-right">
		      	<li>
		      	  	<p class="navbar-btn">
                    	<a href="../insert/insert_daily.php" class="btn btn-success">Add Data</a>
                	</p>
               		 </li>		        
		      </ul>


		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav> 	

		<div class="query_body">

			<ul class="nav nav-tabs">
			  	<li role="presentation"><a style = "color:white;" href="predictions.php">Annual</a></li>
			 	<li role="presentation" class="active"><a href="query_date.php">Date</a></li>
			  	<li style = "color:white;" role="presentation"><a style = "color:white;" href="query_fatalities.php">Fatalities</a></li>
			  	<li style = "color:white;" role="presentation"><a style = "color:white;" href="query_rating.php">Rating</a></li>

			</ul>

			<form id= "date_form" action="queryByDate.php" method="post">	
			<div class = "row insert_criteria">
			
				<div class = "col-md-2"></div>
				<div class = "col-md-3">
					<div class="input-group">
					  	<span class="input-group-addon">Date</span>
					 	<input type="text" class="form-control" name="date" placeholder="mm/dd/yyyy">
					</div>
				</div>

				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" name = "tornadoes"> Tornadoes
					   	</label>
					</div>
				</div>

				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" name = "hurricanes"> Hurricanes
					   	</label>
					</div>
				</div>

				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" name = "earthquakes"> Earthquakes   
					   	</label>
					</div>
				</div>

				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" name = "fires"> Fires
					   	</label>
					</div>
				</div>

				<div class = "col-md-1">
					<button id="sub" type="submit" class="btn btn-success">Submit</button>		
				<!--<button id = "sub">Search</button>-->
				</div>

				<div class = "col-md-2"></div>
			</div>
			</form>
		</div> <!--close query body-->

		<div class = "row">
			<div class="col-md-5"></div>
			<div class = "col-md-2"> <span id= "sorry" style="text-align: center;"></span></div>
			<div class="col-md-5"></div>

		</div>

		<div class = "row">
				<div class = "col-md-2">
					<ul style = "list-style-type: none;">
						<li><h3><span class = "label label-default" style = "background-color: #660066;">Tornadoes</span></h3></li>
						<li><h3><span class = "label label-default" style = "background-color: #FF0000;">Fires</span></h3></li>
						<li><h3><span class = "label label-default" style = "background-color: #000066;">Hurricanes</span></h3></li>
						<li><h3><span class = "label label-default" style = "background-color: #FF9933;">Earthquakes</span></h3></li>
					</ul>



				</div>

				<div class = "col-md-8">
					<div id="map" style="height:600px; color:black"></div>
				</div>

				<div class = "col-md-2">
					<ul style = "list-style-type: none;">
						<li><h3><span class = "label label-default" style = "background-color: #000088;"><25°</span></h3></li>
						<li><h3><span class = "label label-default" style = "background-color: #8744ba;">25° - 40°</span></h3></li>
						<li><h3><span class = "label label-default" style = "background-color: #008800;">40° - 60°</span></h3></li>
						<li><h3><span class = "label label-default" style = "background-color: #e3ea12;">60° - 80°</span></h3></li>
						<li><h3><span class = "label label-default" style = "background-color: #dd2121;">>80°</span></h3></li>
					</ul>
				</div>

			</div>	
	<div id="result"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="result_date.js" type="text/javascript"></script>
  </body>
</html>
