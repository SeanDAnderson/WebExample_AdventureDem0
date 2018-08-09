<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "User.php";

//Populating the User object with data through POST
$user = new User();
$user->name_first = $_POST["firstnameFld"];
$user->name_last = $_POST["lastnameFld"];
$user->username = $_POST["usernameFld"];
$user->email = $_POST["emailFld"];
$user->password = $_POST["passwordFld"];
$passwordConf = $_POST["confpasswordFld"];

//Creates a connection with ther MySQL database
    function getConnection(){
        $servername = "127.0.0.1";
    $dbname = "adventuredem0";
    $username = "root";
    $password = "admin";
    try{
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
        echo "EXCEPTION: Connection failed: " . $ex->getMessage();
    }
    return $connection;
    }
    
    //Inserts new user into MySQL database
    function insertUser($firstname, $lastname, $email, $username, $password){
        try{
            $connection = getConnection();
            $sql = "INSERT INTO user (firstname, lastname, email, username, password) "
                    . "VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
            $connection->exec($sql);
            $connection = null;
        } catch (Exception $ex) {
            echo "EXCCEPTION : Insert failed : " . $ex->getMessage();
        }
    }


//This list is checked in order, for simplicity
if ($user->validate() && ($user->password === $passwordConf)){
    //TODO: new account storage
    //transition to home page
    insertUser($user->name_first, $user->name_last, $user->email, $user->username, $user->password);
    header('Location: index.php');
}
else{
    //redisplay account creation page
    header('Location: create-account.php');
}

exit();