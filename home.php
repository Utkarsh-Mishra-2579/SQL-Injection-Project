<?php
session_start();
// echo $_SESSION['user'] ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOME </title>
    <link rel="icon" type="image/png"
        href="https://www.google.com/s2/favicons?domain=https://www.apachefriends.org/index.html">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="./styles/style.css">

<body>

    <div class="nav-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SQL Injection</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view/docs.html">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view/code.html">Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view/database.html">Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/Utkarsh-Mishra-2579" target="__blank">
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <form action="logout.php">
        <button type="submit" class="btn btn-dark">Logout</button>
    </form>
    <!-- <button type="button" class="btn btn-dark" action="logout.php">Logout</button> -->

    <!-- <button> <a href="logout.php">Logout</a> </button> -->
</body>

</html>