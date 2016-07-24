<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>2 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
session_start();
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ATMA</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../calendar/ViewCalendar/">Schedule</a>
                    </li>
                    <li>
                        <a href="volunteer_home.php">Home</a>
                    </li>
                    <li>
                        <a href="volunteer_report.php">Report</a>
                    </li>
                    <li>
                        <a href="volunteer_ngo.php">NGO</a>
                    </li>
                    <li>
                        <a href="#">Points: <?php echo $_SESSION['points']; ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
		<div class="col-lg-12">
		  <h1>MY CURRENT TASKS</h1>
		  </div>
		  <hr>
		  
        
         <table class="table">
    <thead>
      <tr>
        <th>Tasks</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>
<?php
include 'connect.php';
$username_in_session = "mandeep";//to be changed
$sql = "SELECT * FROM tasks WHERE vol_name='$username_in_session'";
$result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($result)){
      echo '<tr>
        <td>'.$row['task_name'].'</td>
        <td>'.$row['status'].'</td>
      </tr>';  
    }  
?>
    </tbody>
  </table>
</div>

			    

        <hr>


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12" align="center">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer> 

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>