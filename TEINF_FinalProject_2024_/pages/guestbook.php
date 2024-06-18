<!DOCTYPE html>
<html>
<head>
  <title>Guestbook</title>
  <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
  <header>
    <h1 id="logo">Guestbook</h1>
    <nav>
    <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="mountains.html">Mountains</a></li>
        <li><a href="monuments.html">Monuments</a></li>
        <li ><a href="about.html">About Us</a></li>
        <li class="active"><a href="guestbook.php">Guestbook</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="container">
    <h2>Welcome to the Guestbook!</h2>
    
    <!-- Create guestbook entry -->
    <form action="guestbook.php" method="POST">
      
    Name: <br>
    <input type="Text" name="name">
    <br>
    Message: <br>
    <textarea name="message">
    </textarea>
    <br><br>
    <input type="Submit" value="Submit">

    </form>
    
  </div>

</body>
</html>

<?php

    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "guestbookdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    //if ($conn->connect_error) {
    //  die("Connection failed: " . $conn->connect_error);
    //}
    //echo "<br> Connected successfully <br>";
    
    if(isset($_POST["name"]) || isset($_POST["message"])){
      $name = $_POST['name'];
      $message = $_POST['message'];

      $code = $name . $message;

      if(!isset($_SESSION["code"]) || $_SESSION["code"] !== $code){
        $_SESSION["code"] = $code;
        
        $sql = "INSERT INTO guestbookmessages (name, message) VALUES ('$name', '$message')";
    
        if ($conn->query($sql) === TRUE) {
          echo " <br> New record created successfully<p>";
        } else {
          echo " <br> Error: " . $sql . "<br>" . $conn->error;
        }
        
      }

    }
    
    $sql = "SELECT id, name, message FROM guestbookmessages";
    $result = $conn->query($sql);

        //var_dump($result);
    echo "<div class='message-container'>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<p> Name: " . $row["name"]. " <br> Message: " . $row["message"]. "<p>";
        }
      } else {
        echo "0 results";
      }
      echo "</div>";
    $conn->close();

?>

<html>
<body>

<footer>
    <p>&copy; 2024 Webshop. All rights reserved. Webshop - Final Project 2GIN</p>
</footer>

</body>
</html>