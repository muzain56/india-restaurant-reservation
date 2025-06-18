<?php
$servername = "localhost";
$username = "root";
$password = ""; // adjust if needed
$dbname = "restaurant_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];

$sql = "INSERT INTO reservations (name, email, city, date, time, guests)
        VALUES ('$name', '$email', '$city', '$date', '$time', $guests)";

if ($conn->query($sql) === TRUE) {
  echo "Reservation successful!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
