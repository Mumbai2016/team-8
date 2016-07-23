<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> AATMA </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/divider.css">
 -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
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
                <a class="navbar-brand" href="ngo.html">Aatma</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="ngo.html">Home</a>
                    </li>
                    <li>
                        <a href="partnermanager.html">Partner Manager</a>
                    </li>
                    <li>
                        <a href="ngoprojects.php">Projects</a>
                    </li>
                    <li>
                        <a href="volunteers.html">Volunteers</a>
                    </li>
                    <li>
                        <a href="#">Completed Tasks</a>
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
                <h1 class="page-header">Our Projects
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="ngo.html">Home</a>
                    </li>
                    <li class="active">Projects</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-12">
                <?php
                include 'connect.php';
                $managerid_in_session='mandeep';
                $sql = "SELECT * FROM projects WHERE manager_name='$managerid_in_session'";
                $result = mysqli_query($con,$sql);
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result)){
                    echo '<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <p><strong>Project Title: </strong>'.$row['proj_name'].'</p>
                                <p><strong>Project Head: </strong>'.$row['manager_name'].'</p>
                                <p><strong>Project Deadline: </strong>'.$row['start_date'].'</p>
                                <p><strong>Project Deadline: </strong>'.$row['end_date'].'</p>
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                   Click here to view more </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table style="width: 80%">
                                <tbody>
                                <tr>
                                    <td>
                                        <strong> Subtask</strong>
                                    </td>
                                    <td>
                                        <strong> Deadline</strong>
                                    </td>
                                    <td>
                                        <strong> Volunteer</strong>
                                    </td>
                                </tr>';

                                $projectid = $row['pro_id'];
                                $sql2= "SELECT * FROM tasks WHERE proj_id='$projectid'";
                                $result2 = mysqli_query($con,$sql2);
                                echo mysqli_error($con);
                                while($row2 = mysqli_fetch_array($result2)){
                                echo '<tr>
                                    <td>
                                        <p>'.$row2['task_name'].'</p>
                                    </td>
                                    <td>
                                        <p>'.$row2['end_date'].'</p>
                                    </td>
                                    <td>
                                        <p>'.$row2['vol_name'].'</p>
                                    </td>
                                </tr>';
                                }

                                echo '
                                    <tr>
                                        <input type="text" placeholder="add a new subtask">
                                        <button class="add" id="'.$projectid.'">add !</button>
                                    </tr>
                                </tbody>
                            </table>
 
                                
                            </div>
                            </div>
                        </div>';
                        }

                        ?>
                    </div>
                
            </div>
        </div>
        <!-- /.row -->
        
        


<br>

                            
 
        
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
<script>
        $(".add").click(function(){
            var id=$(this).attr('id');
            var newsubtask = $(this).parent().children(":first").val();
            $.ajax({
                    type:"POST",
                    url:"add_new_subtask.php",
                    data:'id='+id+'&newsubtask='+newsubtask,
                    cache:false,
                    success:function(result){
                        alert(result);
                        window.location.href = $(location). attr("href");
                        }//result fnction close
                });
        });
    </script>
</body>

</html>
