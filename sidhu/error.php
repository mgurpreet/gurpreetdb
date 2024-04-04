<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $location = $_POST["location"];
    $date = $_POST["date"];
    $image = $_POST["image"];

    if (empty($name) || empty($location) || empty($date) || empty($image)) {
        header("Location: error.php?error=empty_field");
        exit();
    }

    // Add the data to the database
    // ...

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            font-size: 3rem;
            color: #f00;
        }

        p {
            font-size: 1.5rem;
            color: #333;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #0056b3;
        }
        /* Define the styles for the blue-colored table */
.footer-table {
            width: 100%;
            background-color: lightgreen; 
            color: black; 
            padding: 10px 0; 
            margin-top: 50px; 
            text-align: center;
        }

        /* Center the text within the table */
        .footer-table p {
            margin: 0;
           
        }

        /* Style the footer */
        footer.container {
            z-index: 1; /* Ensure the footer is above the blue table */
            margin-top: auto; /* Push the footer to the bottom */
            position: relative; /* Position relative for absolute positioning of footer */
            bottom: 0; /* Stick to the bottom */
        }
    </style>
</head>
<body>
    <h1>Error!</h1>
    <p>Please fill out the form with the correct information.</p>
    <a href="create.php" class="button">Go Back</a>
     <!-- Footer -->
  <footer class="container mt-5 text-center">
     <div class="footer-table">
       <p>Designed by Gurpreet Singh</p>
       <p>Student ID: 202106914</p>
       <!-- end of the footer here-->
     </div>
  </footer>
</body>
</html>