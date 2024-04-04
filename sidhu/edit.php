<?php
$servername="localhost";
$username="root";
$password="";
$database="sidhu";


    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);


$id = "";
$title = "";
$loaction = "";
$date = "";
$description = "";
$image = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    //GET method: Show the data of the concert

    if ( !isset($_GET["id"]) ) {
        header("location: /sidhu/index.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of the selected concert from database table
    $sql = "SELECT * FROM concert WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        // Redirect to error.php if no concert found
        header("location: /sidhu/error.php");
        exit;
    }


    $id = $row["id"];
    $title = $row["title"];
    $location = $row["location"];
    $date = $row["date"]; 
    $description = $row["description"]; 
    $image = $row["image"]; 
   


}
else {
    //POST method: Update the data of the concert

    $id = $_POST["id"];
    $title = $_POST["title"];
    $location = $_POST["location"];
    $date = $_POST["date"]; 
    $description = $_POST["description"]; 
    $image = $_POST["image"]; 

    do {
        if ( empty($title) || empty($location) ||   empty($date) ||   empty($description) ||   empty($image)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE concert SET title = ?, location = ?, date = ?, description = ?, image = ? WHERE id = ?";

if ($stmt = $connection->prepare($sql)) {
    $stmt->bind_param("sssssi", $title, $location, $date, $description, $image, $id);
    $stmt->execute();
    $stmt->close();

    $successMessage = "concert updated correctly";
    header("location: /sidhu/index.php");
    exit;
} else {
    $errorMessage = "Invalid query: " . $connection->error;
}

$connection->close();

    
    }
    while (true);


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGES INTO CONCERT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body {
            background-image: url('/sidhu/sd.jpg'); /* Specify the path to your image */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the background image */
            min-height: 100vh; /* Set minimum height of the body to full viewport height */
            margin: 0; /* Reset default margin */
            padding: 0; /* Reset default padding */
            display: flex; /* Use flexbox */
            flex-direction: column; /* Set flex direction to column */
        }

         /* Define the styles for the blue-colored table */
         .footer-table {
            width: 100%;
            background-color: lightgreen; /* Set the background color */
            color: black; /* Set the text color */
            padding: 10px 0; /* Add some padding for spacing */
            margin-top: 50px; /* Adjust the top margin to separate from footer */
            text-align: center; /* Center-align text */
            
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
        
         /* Style the heading */
         .heading-background {
            background-color: lightpink; /* Set the background color */
            padding: 10px; /* Add some padding */
            border-radius: 5px; /* Add border radius for rounded corners */
            text-align: center; /* Center-align text */
            margin-top: 20px; /* Add margin to separate from content */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <div class="heading-background">
        <h2>New concert</h2>

        <?php
        if ( !empty($errorMessage) ) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
</div>
</div>
    
<div class="row mb-3">
                <label class="col-sm-3 col-form-label">Location</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="location" value="<?php echo $location; ?>">

</div>
</div>
<div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="date" value="<?php echo $date; ?>">
               
            </div>
</div>
<div class="row mb-3">
                <label class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">

</div>
</div>
<div class="row mb-3">
                <label class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="image" value="<?php echo $image; ?>">

</div>
</div>
<?php
    if ( !empty($successMessage) ) {
        echo "
        <div class='row mb-3'>
        <div class='offset alert-success alert-dismissible fade show' role='alert'>
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            </div>
            </div>
            ";
    }
?>


<div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<div class="col-sm-3 d-grid">
    <a class="b tn btn-outline-primary" href="/sidhu/index.php" role="button">Cancel</a>
</div>
</div>
</form>
</div>
<!-- Footer -->
    <footer class="container mt-5 text-center">
        <!-- lightBlue-colored table -->
     <div class="footer-table">
     <p>Designed by Gurpreet Singh</p>
        <p>Student ID: 202106914</p>
    </div>
    </footer>
    <!-- End of Footer -->
</body>
</html>