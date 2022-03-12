<?php

        // create mysql object
        $db = new mysqli("localhost","root","","quizzer");

        if($db->connect_error)
        {
            echo "holy moly";
            echo $db->connect_error;
        }
