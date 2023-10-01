<!DOCTYPE html>
<html>
<head>
    <title>KAPONDA | TAFUTA TAARIFA</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
  
     
/* CSS for slide-out sidebar */
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:  #FF6600;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  float: left;
}

.sidebar a {
  padding: 8px 8px 8px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #ddd;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #FF69B4;
  color: #fff;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #ddd;
  color: #333;
}

#main {
  transition: margin-left 0.5s;
  padding: 16px;
}

/* CSS for sticky footer */
html, body {
  height: 100%;
  margin: 0;
}

.container {
  min-height: 100%;
  display: flex;
  flex-direction: column;
}

.content {
  flex: 1;
  padding: 20px;
}

.footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

body {
  /*font-family: Arial, sans-serif;
  text-align: center;
  background-color: fuchsia;*/
  uppercase
  	-webkit-font-smoothing: antialiased;
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	font-size: .9em;
	color: #1e2a28;
	width: 100%;
	margin: 0 auto;
	padding: 0px 20px 20px 20px;
}

h2{
	font-size: 2em;
	font-weight: bold;
	padding-top: 60px;
	text-align: center;
}


form {
  margin: 20px 0;
  background: fuchsia;
  border-radius:10px;
  width:50%;
  height: 450px;
}

label {
  display: inline-block;
  width: 100px;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="number"] {
  width: 250px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  color: blue;
  background-color: pink;
  
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: rgb(40, 100, 212);
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-transform: capitalize;
}

input[type="submit"]:hover {
  background-color: #ddac26;
}

/* CSS for process.php */

h2 {
  color: #333;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

td {
  color: #333;
}




</style>




</head>
<body>
<header>





<div id="mySidebar" class="sidebar">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.php">HOME</a>
  <a href="jaza.php">ENTER DATA</a>
  <a href="taarifaa.php">STORED DATA</a>
  <a href="tafuta.php">SEARCH NAME</a>
  <a href="https://samochu.rf.gd">DEVELOPER</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ MENU</button>
</div>

<header>

<?php
    $host = "sql112.infinityfree.com";
    $username = "if0_34558318";
    $password = "Kaponda0000";
    $database = "if0_34558318_kaponda";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle search form submission
if (isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];

    // Prepare and execute the SQL query
    $query = "SELECT * FROM wateja WHERE name LIKE '%$searchTerm%'";
    $result = $conn->query($query);

    // Check if query execution was successful
    if ($result) {
        // Fetch associative array of the retrieved data
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>


    <h2>TAFUTA TAARIFA</h2>
    <center>
    <form method="POST" action="tafuta.php">
        <input type="text" name="searchTerm" placeholder="Enter name">
        <input type="submit" name="search" value="Search">
    

    <?php if (isset($rows)) { ?>
        <h3>Search Results</h3>
        <?php if (empty($rows)) { ?>
            <p>No results found.</p>
        <?php } else { ?>
        
            <table>
                <tr>
                    <th>Name</th>
                    <th>Application</th>
                    <th>Number</th>
                </tr>
                <?php foreach ($rows as $row) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['application']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                    </tr>
                <?php } ?>
            </table>
            </center>
        <?php } ?>
    <?php } ?>
</form>
    <script>
/* JavaScript for slide-out sidebar */

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


  <div class="footer">
  Made by <a href="https://samochu.rf.gd">SAM OCHU</a>
  <br><br>
    <p>copyright 2023© KAPONDA. All rights reserved.</p>
  </div>
</div>
</html>