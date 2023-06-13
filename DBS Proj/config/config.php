<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT battery_health, condition, accessories FROM phones WHERE id = :id";




// Get the values for the battery health, condition, and accessories
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$results = $stmt->fetchAll();

// Loop through the results and print the values
foreach ($results as $row) {
    echo '<div class="Mob">';
    echo '<h3>' . $row['name'] . '</h3>';
    echo '<p>Battery health: ' . $row['battery_health'] . '</p>';
    echo '<p>Condition: ' . $row['condition'] . '</p>';
    echo '<p>Accessories: ' . $row['accessories'] . '</p>';
    echo '</div>';
}

  $conn->close();






?>
