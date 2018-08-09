<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $answer = $_POST["answer"];
    if ($answer === "real_game"){    
        include("answers/real_game.html");
    } elseif ($answer === "where_to_buy"){
        include("answers/where_to_buy.html");
    } elseif ($answer === "sequel"){
        include("answers/sequel.html");
    } elseif ($answer === "can_even"){
        include("answers/can_even.html");
    } elseif ($answer === "joke"){    
        include("answers/joke.html");
    } elseif ($answer === "release_date"){    
        include("answers/release_date.html");
    }
}