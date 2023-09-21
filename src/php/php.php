<?php
// Replace with your database connection details
$servername = "localhost:3306";
$username = "89137";
$password = "ditiseenww";
$database = "db_89137";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Function to fetch text by ID
function getTextById($conn, $id) {
    // SQL query to fetch text data for the given ID
    $sql = "SELECT content FROM articles WHERE id = " . $id; // Change the query as needed

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
    <link rel="icon" href="../Images/Global-Images/axolotl-1.png" type="../images/icon type">
    <link rel="stylesheet" href="../Css/Projects.css">
    <link rel="stylesheet" href="../Css/Global.css">
    <script src="../Js/Script.js"></script>
    <title>Projects</title>
</head>
<body>
<div class="topnav">
    <a class="active"> <img src="../Images/Global-Images/axolotll.png" alt=""></a>
    <ul class="a">
        <li> <a class="active" href="../Index.html">Home</a> </li>
        <li> <a class="active" href="Projects.php">Projects</a> </li>
        <li> <a class="active" href="About.html">About</a> </li>
        <li> <a class="active" href="Contact.html">Contact</a> </li>
    </ul>
</div>

<div class="container">
    <div class="">
        <p><h1>Project page </h1></p>
        <p> 3 projecten van mij:<br>
            klik op afbeelding om groter/kleiner te maken<br>
            En klik op de project() titel om naar het project te gaan
        </p>
    </div>
    <hr>
    <div class="MainBox">
        <div class="FlexBox2">
            <p><?php echo getTextById($conn, 101); ?></p>
        </div>
        <div class="FlexBox1">
            <div class="Text-Box">
                <p><?php echo getTextById($conn, 1); ?></p>
            </div>
        </div>
    </div>
    <hr>

    <div class="MainBox">
        <div class="FlexBox2">
            <p><?php echo getTextById($conn, 102); ?></p>
        </div>
        <div class="FlexBox1">
            <div class="Text-Box">
                <p><?php echo getTextById($conn, 2); ?></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="MainBox">
        <div class="FlexBox2">
            <p><?php echo getTextById($conn, 103); ?></p>
        </div>
        <div class="FlexBox1">
            <div class="Text-Box">
                <p><?php echo getTextById($conn, 3); ?></p>
            </div>
        </div>

    </div>
    <hr>

    <a href="../../../../index.html"><h1 class="back">Link voor meer projecten</h1></a>

</div>
<hr>
</div>

<?php
// Close the database connection
$conn->close();
?>
</body>
</html>
