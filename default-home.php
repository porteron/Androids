<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lo-qo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--    <script src="soundcloud.js"></script>-->
    <script src="chatbox.js"></script>

</head>
<body style="background-color: black">
<nav class="navbar navbar-inverse">
    <div class="contatiner-fluid">
        <div class="navbar-header navigation-titles">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=index.php>lo-qo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Chat</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ME<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="create_profile.php">profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="companions.php">connects</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="squad.php">squad</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="edit_profile.php">edit profile</a></li>
                    </ul>
                </li>
                <li id="user_list"><a href="user_list.php">User List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="secret.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <!--                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login.php">Login</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="background:rgba(130, 0, 142, 0.73)">
    <div class="container main-contain">
        <div class="row">
            <div class="col-xs-12 main-head">
                <h1>lo-qo</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="left-nav" class="col-xs-3 gen-style">
                <h5><i class="fa fa-spinner w3-spin" style="font-size:64px"></i>
                </h5>
                <hr>
                <input id="sc-search" type="text" class="form-control">
                <button id="submit" class="btn-primary">search</button>
                <hr>
            </div>
            <div id="main-info" class="col-xs-8 gen-style scrollable">
                Erica
                <input type="text" id='value2' class="form-control">
                <button id='button2' class="btn-primary">submit</button>
                <div id='live-feed'>
                    <h1>Live Feed:</h1>
                    <p id='new-feed'>
                    <p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

</html>