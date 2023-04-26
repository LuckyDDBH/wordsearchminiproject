<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $conn= mysqli_connect("localhost", "root", "", "wordsearchuser") or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST["name"]) && isset($_POST["email"])) {
            $name= $_POST["name"];
            $email= $_POST["email"];
            
            $sql= "INSERT INTO `users` (`name`, `email`) VALUES ('$name', '$email')";
            
            $query = mysqli_query($conn,$sql);
            if($query){
                echo "Entry Successfull";
             // echo <button onclick = "window.location.href='Main.html';">Go to Game</button>;

            }
            else {
                echo "Error occurred, try again";
            }
        }
    }
?>
<br> <br>
<button id="myButton" class="float-left submit-button" >Click Here to begin Game</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "main.html";
    };
</script>