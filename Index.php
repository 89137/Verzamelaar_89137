<?php
// Replace with your database connection details
$servername = "localhost:3306";
$username = "89137";
$password = "ditiseenww";
$database = "db_89137";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

function getFullColumn($conn) {
    $sql = "SELECT id, naam, tijdsduur, uitkomst, hoofdspeler, genre, img FROM verzamelaar";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row in a box
        while ($row = $result->fetch_assoc()) {
            // Add a unique identifier to each data box using the 'id' attribute
            echo '<div class="data-box" id="data-box-' . $row["id"] . '">';

            // Add a JavaScript click event to show the popup
            echo '<div class="image-click-container" onclick="showPopup(' . $row["id"] . ')" style="cursor: pointer;">';
            echo $row["img"] ;
            echo '<p> ' . $row["naam"] . '</p>';
            echo '</div>';

            // Create the popup for each data box
            echo '<div class="popup-box" id="popup-' . $row["id"] . '" onclick="hidePopup(' . $row["id"] . ')">';
            echo '<div class="popup-content">';
            echo '<h2>Naam:</h2><p>' . $row["naam"] . '</p>';
            echo '<h2>Tijdsduur:</h2><p>Tijdsduur: ' . $row["tijdsduur"] . '</p>';
            echo '<h2>Uitkomst:</h2><p>' . $row["uitkomst"] . '</p>';
            echo '<h2>Rated:</h2><p> ' . $row["hoofdspeler"] . '</p>';
            echo '<h2>Genre: </h2><p>' . $row["genre"] . '</p>';
            echo '<h1>Order</h1><br>';
            echo '</div>';
            echo '</div>';

            echo '</div>'; // Close data-box div
        }
    } else {
        echo "0 results";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/images/Logo.png" type="src/images/icon type">
    <link rel="stylesheet" href="src/css/styles.css">
    <script src="src/js/js.js"></script>
    <title>Verzamelaar_89137</title>
</head>
<body>
<Flexbox class="Mainbox">
    <div class="topnav">
        <img src="src/images/LogoWhite.png" alt="Logo" class="Logo">

        <li><a class="active" href="#items">Items</a></li>
        <li><a class="active" href="#bestel">Bestel</a></li>
    </div>


    <h1>Verzamelaar</h1>
    <section class="spacing" id="items"></section>
    <h2>Item overzicht</h2>
    <section class="spacing2"></section>
    <h2>Click on images to display info</h2>
    <section class="spacing2"></section>
    <div class="data-boxes">
        <?php
        // Call the getFullColumn function to retrieve data from the database
        getFullColumn($conn);
        ?>
    </div>

    <section class="spacing" id="bestel"></section>
    <h2>BestelFunctie</h2>
</Flexbox>
</body>
</html>