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
      <input type="Text" name="name" placeholder="Max 64 chars">
      <br>
      Message: <br>
      <textarea name="message"></textarea>
      <br>
      <input type="Submit" value="Submit">
    </form>

    <div class="message-container">
      <h3>Messages: </h3>
      <?php
          session_start();

          $serverName = "localhost";
          $userName = "root";
          $password = "";
          $dbName = "guestbookdb";
          $tableName = "guestbookmessages";

          // Create connection
          $conn = new mysqli($serverName, $userName, $password, $dbName);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } else {
            // echo "<br> Connected successfully <br>";

            /*
              Sending message
            */
            if(isset($_POST["name"]) || isset($_POST["message"])) {
              $name = $_POST['name'];
              $message = $_POST['message'];
        
              $code = $name . $message;
        
              if(!isset($_SESSION["code"]) || $_SESSION["code"] !== $code){
                $_SESSION["code"] = $code;
                
                $sql = "INSERT INTO " . $tableName . " (id, name, message) VALUES (null, '$name', '$message')";
            
                if ($conn->query($sql) === TRUE) {
                  echo " <br> New record created successfully<p>";
                } else {
                  echo " <br> Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }

            /*
              Loading messages
            */
            $selectSQL = "SELECT id, name, message FROM " . $tableName;
            $result = $conn->query($selectSQL);
        
            function printMessage($string) {
              echo "<div class='message-box'>" . $string . "</div>";
            }

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                printMessage("<p>" . $row["name"]. ": " . $row["message"]. "</p>");
              }
            } else {
              printMessage("No messages found!");
            }

            $conn->close();
          }

      ?>
    </div>
  </div>

  <footer>
      <p>&copy; 2024 Webshop. All rights reserved. Webshop - Final Project 2GIN</p>
  </footer>
</body>
</html>