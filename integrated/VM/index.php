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
                        <a href="index.php">Requests</a>
                    </li>
                    <li>
                        <a href="vol_status_applied.php">Applied</a>
                    </li>
                    <li>
                        <a href="vol_status_available.php">Available</a>
                    </li>
                    <li>
                        <a href="vol_status_assigned.php">Assigned</a>
                    </li>
                    <li>
                        <a href="vol_status_rejected.php">Rejected</a>
                    </li>
                    <li>
                        <a href="vol_status_left.php">Left</a>
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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Requests
                    
                </h1>
				
            </div>
        </div>
         
		<div class="container">

<?php

include 'connect.php';

$sql = "SELECT * FROM tasks WHERE vol_req LIKE 'yes'";
$result = mysqli_query($con,$sql);

echo '
          <div class="row"> 
          <div class="col-lg-1 id="no">
           1
           </div>
            <div class="col-lg-2" id="ngo">
                 OD Area
            </div>
            <div class="col-lg-2" id="ngo">
                 PROJECT NAME
            </div>
            <div class="col-lg-2" id="ngo">
                 PARTNER MANAGER
            </div>

         <div class="col-lg-4" >
                          
        </div>
        <div>
            
        </div>
         </div>
         <hr>';

while($row = mysqli_fetch_array($result)){
        echo '
		  <div class="row"> 
		  <div class="col-lg-1 id="no">
		   1
		   </div>
		    <div class="col-lg-2" id="ngo">
			     '.$row['odarea'].'
		    </div>
            <div class="col-lg-2" id="ngo">
                 '.$row['project_name'].'
            </div>
            <div class="col-lg-2" id="ngo">
                 '.$row['part_manager'].'
            </div>

		 <div class="col-lg-4" >
			   Volunteers available:  <select id="volunteer'.$row['taskid'].'">';

                        $sql_fetch_volunteer = "SELECT * FROM volunteer_status WHERE status LIKE 'available'";
                        $result_fetch_volunteer = mysqli_query($con,$sql_fetch_volunteer);
                            while($row1 = mysqli_fetch_array($result_fetch_volunteer)){
			                     echo '<option value="'.$row1['vol_name'].'">'.$row1['vol_name'].'</option>';
                            }

			            echo '</select>
			
		</div>
        <div>
            <button class="col-lg-1 allot" id="'.$row['taskid'].'">Allot !</button>
        </div>
		 </div>';
        }
?>
		</div>
			    

        <hr>

        <hr>

        <!-- Footer -->
        <footer style="position:fixed;bottom:0px;">
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
<script>
        $(".allot").click(function(){
            var id=$(this).attr('id');
            var volunteer_name = $("#volunteer"+id).val();
            alert(volunteer_name);
            $.ajax({
                    type:"POST",
                    url:"update_allotment.php",
                    data:'id='+id+'&volunteer_name='+volunteer_name,
                    cache:false,
                    success:function(result){
                        // alert(result);
                        // var hours = $(this).parent().children(":last").val("waiting for PM's approval");
                        window.location.href = $(location). attr("href");
                        }//result fnction close
                });
        });
    </script>
</body>

</html>