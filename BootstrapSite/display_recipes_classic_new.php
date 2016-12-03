<!DOCTYPE html>
<html lang="en">
<style>
	body{
		zoom: 100%
	}
</style>
<head>
	
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recipes</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body>
	
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Project Juice</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="classic.html">Classic</a>
                    </li>
                    <li>
                        <a href="afterdark.html">After Dark</a>
                    </li>
                    <li>
                        <a href="contact.html">Login</a>
                    </li>
                    <li>
                        <a href="contact.html">Register</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-logo.png')" "background-size: 8000px 6000px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                       <h1>  </h1>
                        <span class="meta"><a href="#"></a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <body style = "background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="col-lg-12 text-center">
						<h2 style = "color:black;">Results</h2>
						<hr class="star-light">
					</div>
				</div>
            </div>
        </div>
					
                   <?php  
                   
                   require_once('../mysqli_connect.php');
						if(isset($_POST['submit']) )
						{
						  if(empty($_POST['Ingredient_1']) and empty($_POST['Ingredient_2']) and empty($_POST['Ingredient_3']) 
						  and empty($_POST['Ingredient_4']) and empty($_POST['Ingredient_5'])){
							  $errorMessage = "You forgot to select ingredients";
						  }
						  
						  else{
						  $ingOne = $_POST['Ingredient_1'];
						  $ingTwo = $_POST['Ingredient_2'];
						  $ingThree = $_POST['Ingredient_3'];
						  $ingFour = $_POST['Ingredient_4'];
						  $ingFive = $_POST['Ingredient_5'];
						  $errorMessage = ""; 
						}
						}
						$query = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingOne' OR ingredient_two = '$ingOne' 
						OR ingredient_three = '$ingOne' OR ingredient_four = '$ingOne' OR ingredient_five = '$ingOne' OR ingredient_six = '$ingOne'
						OR ingredient_seven = '$ingOne' OR ingredient_eight = '$ingOne' OR ingredient_nine = '$ingOne' OR ingredient_ten = '$ingOne'";


						$query2 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingTwo' OR ingredient_two = '$ingTwo' 
						OR ingredient_three = '$ingTwo' OR ingredient_four = '$ingTwo' OR ingredient_five = '$ingTwo' OR ingredient_six = '$ingTwo'
						OR ingredient_seven = '$ingTwo' OR ingredient_eight = '$ingTwo' OR ingredient_nine = '$ingTwo' OR ingredient_ten = '$ingTwo'";


						$query3 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingThree' OR ingredient_two = '$ingThree' 
						OR ingredient_three = '$ingThree' OR ingredient_four = '$ingThree' OR ingredient_five = '$ingThree' OR ingredient_six = '$ingThree'
						OR ingredient_seven = '$ingThree' OR ingredient_eight = '$ingThree' OR ingredient_nine = '$ingThree' OR ingredient_ten = '$ingThree'";


						$query4 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingFour' OR ingredient_two = '$ingFour' 
						OR ingredient_three = '$ingFour' OR ingredient_four = '$ingFour' OR ingredient_five = '$ingFour' OR ingredient_six = '$ingFour'
						OR ingredient_seven = '$ingFour' OR ingredient_eight = '$ingFour' OR ingredient_nine = '$ingFour' OR ingredient_ten = '$ingFour'";


						$query5 = "SELECT name, instructions FROM Non_alcoholic WHERE ingredient_one = '$ingFive' OR ingredient_two = '$ingFive' 
						OR ingredient_three = '$ingFive' OR ingredient_four = '$ingFive' OR ingredient_five = '$ingFive' OR ingredient_six = '$ingFive'
						OR ingredient_seven = '$ingFive' OR ingredient_eight = '$ingFive' OR ingredient_nine = '$ingFive' OR ingredient_ten = '$ingFive'";


						$response = @mysqli_query($dbc, $query);
						$response2 = @mysqli_query($dbc, $query2);
						$response3 = @mysqli_query($dbc, $query3);
						$response4 = @mysqli_query($dbc, $query4);
						$response5 = @mysqli_query($dbc, $query5);
						
						$results = array();
						
						
					?>
					
			<body>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
							<div class="col-lg-12 text-left">
								<h2 style = "color:black;" >
									
									
					<?php
						
						if($response){
							while($row = mysqli_fetch_array($response)){							
								$results[$row['name']] = $row['instructions'];
							}
						}
						
						if($response2){
							while($row = mysqli_fetch_array($response2)){
								$results[$row['name']] = $row['instructions'];
							}	
						}
						if($response3){
							while($row = mysqli_fetch_array($response3)){
								$results[$row['name']] = $row['instructions'];
							}	
						}
						if($response4){
							while($row = mysqli_fetch_array($response4)){
								$results[$row['name']] = $row['instructions'];
							}	
						}
						if($response5){
							while($row = mysqli_fetch_array($response5)){
								$results[$row['name']] = $row['instructions'];
							}	
						}
														
						$results_unique = array_unique($results);		
					
					
						foreach($results_unique as $drinkName => $link) {
							echo '<a href="//' . $link . '" style = "color:black">' . $drinkName . '<br>' . '</a>'; 
						}
					?>
                   
						</h2>
					</div>
				</div>
			</div>
		</div>			
	</body>		
                 
    </body>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Definitely Copyrighted &copy; Project Juice 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>

