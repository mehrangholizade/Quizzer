<?php

    include  "database.php";
    session_start();

    $user_choice_id = $_POST["answer"];
    $q_id = $_POST["question_id"];

    $correct_choice = $db->query("SELECT * FROM answers WHERE question_id = $q_id AND is_true = 1")->fetch_assoc();
    $correct_choice_id = $correct_choice["id"];

    if($user_choice_id == $correct_choice_id)
    {
       $_SESSION["user_score"]++;
        echo "Well done";
        // user’s point increases
    }
    else
    {
        //  $_SESSION["user_score"]--;
        echo "Wrong answer";
        // user’s point decreases
    }

    $q_id++;

    if($_SESSION["question_number"] >= $q_id )
    {
        header("location: question.php?x=$q_id");
    }
    else
    {
        header("location: final.php");
    }

?>
