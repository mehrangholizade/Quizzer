<?php

        include "database.php";
        session_start();
        // Set question number
        $number = $_GET["x"];
        // Get question
        $porseshha = $db->query("SELECT * FROM questions");
        $total = $porseshha->num_rows;

        // a table that has a record
        $porsesh_table = $db->query("SELECT * FROM questions WHERE id= $number");
        // a record
        $porsesh = $porsesh_table->fetch_assoc();

        $pasokhha = $db->query("SELECT * FROM answers WHERE question_id = $number");

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
        Question 
            <?php echo $porsesh["id"];  ?>
        of
            <?php echo $total; ?>;
        </div>
        <div class="card-body">
         <p>
             <?php echo $porsesh ["text"]; ?>
         </p>
         <form method="post" action="process.php">

            <input type="hidden" value="<?php echo $porsesh["id"]; ?>" name="question_id">

            <?php foreach($pasokhha as $pasokh): ?>

               <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" value="<?php echo $pasokh["id"]; ?>" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                <?php echo $pasokh["text"]; ?>
                </label>
            </div>

            <?php endforeach; ?>

             <br>

             <button type="submit" class="btn btn-primary">Next</button>
         </form>
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