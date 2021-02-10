<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <?php include "sql/DataSource.php";
    //session_start();
    $data = new DataSource();?>
</head>

<body>
    <header class="nav-holder make-sticky">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="category.php"><span class="glyphicon glyphicon-home"></span> Manage Category</a></li>
                    <li><a href="blogpost.php"><span class="glyphicon glyphicon-file"></span> My Profile</a></li>
                    <li><a href="Session_end.php"><span class="glyphicon glyphicon-off"></span>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>