<?php
$servername = "localhost:3306";
$username = "89137";
$password = "ditiseenww";
$database = "db_89137";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Function to fetch text by ID
function getTextById($conn, $id) {
    // SQL query to fetch text data for the given ID
    $sql = "SELECT content FROM verzamelaar WHERE id = " . $id; // Change the query as needed

    $result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
return $row["content"];
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>Index</title>
</head>
<body>
    <Flexbox class="Mainbox">

    <div class="topnav">
        <a class="active" href=""><img src="" alt=""></a>
        
        <ul class="a"> </ul>
        <li> <a class="active" href="">Items</a> </li>

        <li> <a class="active" href="">Bestel</a> </li>

        </ul>
        
      </div>

        <h1> Title</h1>
        <section class="spacing"></section>

        <h2>Item overzicht</h2>

        <section class="spacing"></section>

        <h2></h2>

        <section class="spacing"></section>

        <h2>BestelFunctie</h2>






      </Flexbox>
</body>
</html>