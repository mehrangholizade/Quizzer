<?php

    session_start();
    $total = $_SESSION["question_number"];
    $score = $_SESSION["user_score"];
    $percent = $score*100/$total;

?>
<html>
<head>
    <title>Test</title>
    <meta charset="utf-8">
    <meta name="author" content="Mehran Gholizadeh">
    <meta name="description" content="Quizzer">
    <meta name="keywords" content="Quizzer,quiz,html,css,js,bootstrap,php and ...">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Result Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <div class="card bg-dark text-light p-5 pt-2 pb-2">
                    <h5 class="card-header text-center">RESULT</h5>
                    <div class="card-body text-center">
                        <p class="card-text">
                            <?php echo $score?>
                            of
                            <?php echo $total ;?>
                        </p>
                        <p class="card-text">
                            <?php echo $percent,"%";?>
                        </p>
                        <p class="card-text">
                            <?php
                            if($percent < 50)
                            {
                                echo "There’s lot of movies & series that you need to watch 😕";
                            }
                            elseif ($percent >= 50 && $percent < 90)
                            {
                                echo "Not bad at all 🙃";
                            }
                            else{
                                echo "It’s obvious that you’re a movie killer 😎🔥";
                            }
                            ?>
                        </p>
                        <a href="index.php" type="submit" class="btn btn-primary">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

