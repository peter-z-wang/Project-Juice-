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

    <title>Register</title>

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
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
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
    <?php
		if(isset($_POST['submit'])){
			
			$data_missing = array();
			
			if(empty($_POST['first_name'])){
				$data_missing[] = 'First Name';

			} else {
				$first_name = trim($_POST['first_name']);
			}

			if(empty($_POST['last_name'])){
				$data_missing[] = 'Last Name';
				
			} else{
				$last_name = trim($_POST['last_name']);
			}

			if(empty($_POST['username'])){
				$data_missing[] = 'username';
			} else {
				$username = trim($_POST['username']);
			}

			if(empty($_POST['password'])){
				$data_missing[] = 'password';
			} else {
				$password = trim($_POST['password']);
			}
			
			if(empty($_POST['DateOfBirth'])){
				$data_missing[] = 'Date of Birth';
			} else {
				$dob = trim($_POST['DateOfBirth']);
			}
			
			
			if(empty($data_missing)){
				
				require_once('../mysqli_connect.php');
				
				$query = "INSERT INTO Users (firstName, lastName, userName, passWord, DOB) VALUES (?, ?, ?, ?, ?)";
				
				$stmt = mysqli_prepare($dbc, $query);
				
				mysqli_stmt_bind_param($stmt, "ssssi", $first_name, $last_name, $username, $password, $dob);
				
				mysqli_stmt_execute($stmt);
				
				$affected_rows = mysqli_stmt_affected_rows($stmt);
				
				#echo $affected_rows;
				
				#echo $first_name;
				#echo $last_name;
				#echo $username;
				#echo $password;
				#echo $dob;
				
				if($affected_rows == 1){
					
					echo 'Account Created';
					
					mysqli_stmt_close($stmt);
					
					mysqli_close($dbc);
					
				} else {
					
					echo 'Error Occurred<br />';
					echo mysqli_error();
					
					mysqli_stmt_close($stmt);
					
					mysqli_close($dbc);
					
				}
				
				
				
			} else {
				
				echo 'You need to enter the following data<br />';
				
				foreach($data_missing as $missing){
					
					echo "$missing<br />";
					
				}
				
			}
		   
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
                <div class="col-lg-8 col-lg-offset-2 col-md-10">
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

