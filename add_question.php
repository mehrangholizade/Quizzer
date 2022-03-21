<?php
    include "database.php";
    session_start();

    $porsesh = $_POST["question"];
    $pasokhha = array($_POST["answer1"], $_POST["answer2"], $_POST["answer3"], $_POST["answer4"]);
    $is_true = $_POST["answer_id"];

    $db->query("INSERT INTO questions(text) VALUES('$porsesh')");

    $question_id = $_SESSION["question_number"] + 1;
    $cnt = 1;
    $temp = 0;
    foreach($pasokhha as $pasokh){
        if($cnt == $is_true){
            $temp = 1;
        }
        elseif ($pasokh != "") {
            $db->query("INSERT INTO answers(text, is_true, question_id) VALUES('$pasokh', '$temp', '$question_id')");
            $cnt++;
            $temp = 0;
        }
    }
        header("Location: index.php");

?>