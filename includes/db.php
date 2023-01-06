
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=NewMetroDb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    //$conn = null;
    //echo "Connected closed";
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>