<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $conn= mysqli_connect("localhost", "root", "", "wordsearchuser") or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST["name"]) && isset($_POST["email"])) {
            $name= $_POST["name"];
            $email= $_POST["email"];
            
            $sql= "INSERT INTO `users` (`name`, `email`) VALUES ("$name, $email")";
            
            $query = mysql_query($)
        }
    }