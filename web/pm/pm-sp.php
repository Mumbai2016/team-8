<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atma - PM</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/2-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/divider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/list.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/checkbox.min.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .divider {
            background-color: white;
        }

        .progress{
            text-align: center;
        }

        .card-meta{
            display: block;
            padding-bottom: 16px;
        }

        .checkbox{
            position: absolute;
            right: 8px;
            top: 8px;
            left: 85%;
        }

    </style>

    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#aip").hide();
            $("#qp").hide();
            $("#sp-button").click(function(){
                $("#aip").hide();
                $("#qp").hide();
                $("#sp").show();

                $("#aip-button").removeClass("active");
                $("#qp-button").removeClass("active");
                $("#sp-button").addClass("active");
            });
            $("#aip-button").click(function(){
                $("#sp").hide();
                $("#qp").hide();
                $("#aip").show();

                $("#sp-button").removeClass("active");
                $("#qp-button").removeClass("active");
                $("#aip-button").addClass("active");
            });
            $("#qp-button").click(function(){
                $("#aip").hide();
                $("#sp").hide();
                $("#qp").show();

                $("#aip-button").removeClass("active");
                $("#sp-button").removeClass("active");
                $("#qp-button").addClass("active");
            });
        });
    </script>

</head>

<body>

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
            <a class="navbar-brand" href="index.html">Aatma</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Project Manager</a>
                </li>
                <li>
                    <a href="#">Projects</a>
                </li>
                <li>
                    <a href="#">Volunteers</a>
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


<div class="container">

    <div class="btn-group" style="padding-bottom: 16px">
        <button type="button" class="active btn btn-default" id="sp-button">Strategy Plan</button>
        <button type="button" class="btn btn-default" id="aip-button">Annual Plan</button>
        <button type="button" class="btn btn-default" id="qp-button">Quarterly Plan</button>
    </div>

    <!--<h1 class="ui header">Strategy Plan</h1>-->
    <div class="col-sm-12" id="sp">
        <div class="col-padding">
            <h1 class="ui header">Strategy Plan</h1>
            <div class="ui horizontal divider" style="font-size: x-large">Priority Area 1</div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey lighten-5">
                        <div class="card-content black-text">
                            <span class="card-title">Strategy 1</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-1">
                                        Year 1
                                    </th>
                                    <th class="col-md-1">Year 2</th>
                                    <th class="col-md-1">Year 3</th>
                                    <th class="col-md-1">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1" width="10%" style="background-color:lightgreen;">
                                        Activity 1.1
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">ongoing</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1" style="background-color:lightgreen;"> Activity 1.2</td>
                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">aborted</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>
                                    <td class="col-md-1">pending</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey lighten-5">
                        <div class="card-content black-text">
                            <span class="card-title">Strategy 1</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-1">
                                        Year 1
                                    </th>
                                    <th class="col-md-1">Year 2</th>
                                    <th class="col-md-1">Year 3</th>
                                    <th class="col-md-1">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1" width="10%" style="background-color:lightgreen;">
                                        Activity 1.1
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">ongoing</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1" style="background-color:lightgreen;"> Activity 1.2</td>
                                    <td class="col-md-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey lighten-5">
                        <div class="card-content black-text">
                            <span class="card-title">Strategy 1</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-1">
                                        Year 1
                                    </th>
                                    <th class="col-md-1">Year 2</th>
                                    <th class="col-md-1">Year 3</th>
                                    <th class="col-md-1">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1" width="10%" style="background-color:lightgreen;">
                                        Activity 1.1
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">ongoing</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1" style="background-color:lightgreen;"> Activity 1.2</td>
                                    <td class="col-md-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui horizontal divider"  style="font-size: x-large">Priority Area 2</div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey lighten-5">
                        <div class="card-content black-text">
                            <span class="card-title">Strategy 1</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-1">
                                        Year 1
                                    </th>
                                    <th class="col-md-1">Year 2</th>
                                    <th class="col-md-1">Year 3</th>
                                    <th class="col-md-1">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1" width="10%" style="background-color:lightgreen;">
                                        Activity 1.1
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">ongoing</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1" style="background-color:lightgreen;"> Activity 1.2</td>
                                    <td class="col-md-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey lighten-5">
                        <div class="card-content black-text">
                            <span class="card-title">Strategy 1</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-1">
                                        Year 1
                                    </th>
                                    <th class="col-md-1">Year 2</th>
                                    <th class="col-md-1">Year 3</th>
                                    <th class="col-md-1">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1" width="10%" style="background-color:lightgreen;">
                                        Activity 1.1
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">ongoing</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1" style="background-color:lightgreen;"> Activity 1.2</td>
                                    <td class="col-md-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey lighten-5">
                        <div class="card-content black-text">
                            <span class="card-title">Strategy 1</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-1">
                                        Year 1
                                    </th>
                                    <th class="col-md-1">Year 2</th>
                                    <th class="col-md-1">Year 3</th>
                                    <th class="col-md-1">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1" width="10%" style="background-color:lightgreen;">
                                        Activity 1.1
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">ongoing</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1" style="background-color:lightgreen;"> Activity 1.2</td>
                                    <td class="col-md-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12" id="aip">
        <div class="col-padding">

            <h1 class="ui header">Annual Plan</h1>
            <div class="ui horizontal divider" style="font-size: x-large">Priority Area 1</div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="card grey lighten-5">
                        <div class="card-content black-text">
                            <span class="card-title">Strategy 1</span>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-md-1">Quarter 1</th>
                                    <th class="col-md-1">Quarter 2</th>
                                    <th class="col-md-1">Quarter 3</th>
                                    <th class="col-md-1">Quarter 4</th>
                                    <th class="col-md-1">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1" width="10%" style="background-color:lightgreen;">
                                        Activity 1.1
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1"></td>

                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">ongoing</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1" style="background-color:lightgreen;"> Activity 1.2</td>
                                    <td class="col-md-1"></td>

                                    <td class="col-md-1">
                                    </td>
                                    <td class="col-md-1">aborted</td>
                                </tr>
                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>
                                    <td class="col-md-1"></td>

                                    <td class="col-md-1">pending</td>
                                </tr>

                                <tr>
                                    <td class="col-md-1" width="10%">
                                    </td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1"></td>
                                    <td class="col-md-1" style="background-color:lightgreen;">
                                        Activity 1.3
                                    </td>

                                    <td class="col-md-1">pending</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui horizontal divider"  style="font-size: x-large">Priority Area 2</div>
        </div>
    </div>
    <div class="col-sm-12" id="qp">
        <div class="col-padding">
            <h1 class="ui header">Quarterly Plan</h1>
            <div class="ui horizontal divider" style="font-size: x-large">Priority Area 1</div>
            <div class="row">
                <div class="col s4 m4">
                    <div class="card grey lighten-5">
                        <div class="ui checked checkbox">
                            <input type="checkbox" checked="">
                            <label>Active</label>
                        </div>
                        <div class="card-content black-text">
                            <span class="card-title">Organisation 1</span>

                            <span class="card-meta">Partner Manager</span>
                            <table style="width: 100%">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <p>Year1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar black-text" role="progressbar" aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                <p>Year&nbsp;2</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar black-text" role="progressbar" aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                <p>Year&nbsp;3</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="ui animated list">
                                <div class="item">
                                    Project 1
                                    <div class="right floated content">OD1</div>
                                </div>

                                <div class="item">
                                    Project 1
                                    <div class="right floated content">OD1</div>
                                </div>

                                <div class="item">
                                    Project 1
                                    <div class="right floated content">OD1</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="row">
        <div class="col-lg-12" align="center">
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </div>
</footer>
<script src="../js/bootstrap.min.js"></script>

</body>

</html>
