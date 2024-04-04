<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sidhu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "tour" table
$sql = "SELECT * FROM concert";
$result = $conn->query($sql);

// Display the data in a table
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Title</th><th>Location</th><th>Start Date</th><th>End Date</th><th>Description</th><th>Image</th></tr>";
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"]. "</td><td>" . $row["location"]. "</td><td>" . $row["date"]. "</td><td>" . $row["end_date"]. "</td><td>" . $row["description"]. "</td><td>" . $row["image"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Close the connection
$conn->close();
?>