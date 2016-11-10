<!DOCTYPE html>
<html lang="en">  
    <!--initial connection script -->
    <?php    	

    	$link = mysqli_connect("127.0.0.1", "ptdrake2", "stormyskies", "StormySkies");		
	?>   
    
  	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Stormy Skies Stage 4</title> 
	    <!-- Bootstrap -->
	    <link href="../css/bootstrap.min.css" rel="stylesheet"> 
	    <link href="../css/styles.css" rel = "stylesheet">  
  	</head>

  	<body>

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
		        

		        <li><a href="#" class = "active" >Queries</a></li>
		        <li><a href="../predictions/predictions.php">Predictions</a></li>
		        <li><a href="../map/map.php">Map</a></li>
		        
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
			 	<li role="presentation" class="active"><a href="query_date.php">Date</a></li>
			  	<li role="presentation"><a href="query_fatalities.php">Fatalities</a></li>
			  	<li role="presentation"><a href="query_rating.php">Rating</a></li>
			</ul>

			<div class = "row insert_criteria">

				
			
				<div class = "col-md-2">
					<div class="input-group">
					  	<span class="input-group-addon">Date</span>
					 	<input type="text" class="form-control" id="date" placeholder="mm/dd/yyyy">
					</div>
				</div>


				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" id = "tornadoes"> Tornadoes
					   	</label>
					</div>
				</div>

				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" id = "hurricanes"> Hurricanes
					   	</label>
					</div>
				</div>

				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" id = "earthquakes"> Earthquakes   
					   	</label>
					</div>
				</div>

				<div class = "col-md-1">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" id = "fires"> Fires
					   	</label>
					</div>
				</div>

				<div class = "col-md-2">
					<div class="checkbox">
					   	<label>
					   		<input type="checkbox" id = "daily"> Daily Weather
					   	</label>
					</div>
				</div>


				

				<div class = "col-md-1">
					<button type="button" class="btn btn-success">Search</button>					
				</div>


			</div>
		</div> <!--close query body-->

		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  	<!-- closing db connection -->
    <?php

        mysqli_close($link);
    ?>
</html>
