<?php
    include "database.php";
    session_start();
    $porseshha = $db->query("SELECT * FROM questions");
    $total = $porseshha->num_rows;

?>
<html>
<head>
    <title>Movie Test</title>
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
            <a class="navbar-brand" href="#">Admin Page</a>
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
        <div class="row mt-4">
            <div class="col d-flex justify-content-center">
                <div class="card bg-dark text-light p-5 pt-2 pb-2">
                    <h3 class="card-header text-center">Welcome to the admin page !</h3>
                    <div class="card-body text-center">
                        <h5 class="card-text">
                            What do you want to do?
                        </h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-3 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add question
                        </button>
                        <a href="index.php" class="btn btn-primary mt-3 me-2">Remove question</a>
                        <a href="index.php" class="btn btn-primary mt-3 me-2">Edit question</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark text-light">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Question</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="add_question.php">
                                    <div class="modal-body">
                                     <p class="text-start">
                                         Question
                                     </p>
                                        <div class="mb-3">
                                            <input type="text" name="question" class="form-control" id="formGroupExampleInput">
                                        </div>
                                        <p class="text-start">
                                           Type the options!
                                        </p>
                                        <div id="answers">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="answer_id" type="radio" value="1" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" name="answer1" aria-label="Text input with radio button">
                                            </div>
                                            <div class="input-group mt-2">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="answer_id" type="radio" value="2" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" name="answer2" aria-label="Text input with radio button">
                                            </div>
                                            <div class="input-group mt-2">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="answer_id" type="radio" value="3" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" name="answer3" aria-label="Text input with radio button">
                                            </div>
                                            <div class="input-group mt-2">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="answer_id" type="radio" value="4" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" name="answer4" aria-label="Text input with radio button">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

</div>
 <script src="js/bootstrap.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
