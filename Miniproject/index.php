<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
</head>

<h1> Wordsearch Login Page </h1>
<body>
    <div><h2>Register Account</h2></div>
    <form action="connect.php" method="POST">
        <label for="user">Name:</label><br>
        <input type="text" name="name" id="name" required/> <br> <br>
        
        
        <label for="email">E-mail: </label> <br>
        <input type="email" name="email" id="email" required/> <br><br>
        
        <input type="submit" name="submit" id="submit" onClick="redirect()"/>
        
    </form>
    
    <script>
      function redirect() {
        window.location.href="Main.html";  
      }
    </script>

</body>
</html>