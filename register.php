<?php
session_start();

//Connecting to database
    $servername = "sql112.infinityfree.com";
    $username = "if0_34558318";
    $password = "Kaponda0000";
    $database = "if0_34558318_kaponda";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  //  echo "";
  //  echo "<br>";
}

//Get user input data from form
$name = $_POST['name'];
$application = $_POST['application'];
$phone = $_POST['phone'];

//Prepare SQL insert statement
$sql = "INSERT INTO wateja (name, application, phone) VALUES ('$name', '$application', '$phone')";

//Execute SQL statement and show result
if (mysqli_query($conn, $sql)) {
  //echo "Registration successfully";
  $_SESSION["register"] = true;

    // Redirect to home.php
    header("Location: index.php");
    exit();
  
  
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Set a session variable to indicate successful login
    $_SESSION["register"] = true;

    // Redirect to home.php
    header("Location: index.php");
    exit();

//Close database connection
mysqli_close($conn);
?> 
