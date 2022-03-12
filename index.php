<?php

        include "database.php";
        session_start();

        $porseshha = $db->query("SELECT * FROM questions");
        $total = $porseshha->num_rows;

        $_SESSION["user_score"] = 0;
        $_SESSION["question_number"] = $total;

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
    <a class="navbar-brand" href="#">Movie Test</a>
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
          <li class="nav-item">
              <a class="btn btn-danger" href="admin.php">Login</a>
          </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="row mt-5">
  <div class="col">
    <div class="card bg-dark text-light p-5 pt-2 pb-2">
        <div class="card-header">
           Just a simple test, don’t worry 😉
        </div>
        <div class="card-body">
          <h5 class="card-title">Welcome to the Movie test 😀</h5>
          <p class="card-text mt-3">
              This test includes
             <?php echo $total; ?> 
             questions
          </p>
          <p class="card-text">
              Test time:
            <?php echo $total / 2; ?>
          min
          </p>
          <a href="question.php?x=1" class="btn btn-primary">Let’s go</a>
        </div>
    </div>
    </div>
  </div>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>