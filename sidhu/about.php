<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidhu Moosewala</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #282828;
    color: #fff;
    padding: 1rem;
}

header h1 {
    margin: 0;
}

header p {
    margin: 0;
    font-size: 0.8rem;
}

main {
    display: flex;
    flex-wrap: wrap;
    margin: 1rem;
}

.song {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    flex: 1 0 300px;
    margin-right: 1rem;
    margin-bottom: 1rem;
    padding: 1rem;
}

.song h2 {
    margin: 0;
    margin-bottom: 0.5rem;
}

.song p {
    margin: 0;
    font-size: 0.8rem;
    color: #6c63ff;
}
.videoSection {
    max-width: 700px; /* Set a maximum width for the video container */
    margin: 0 auto;   /* Center the container horizontally */
}

.videoSection iframe {
    width: 100%;      /* Make the iframe fill the width of its container */
    height: 300px;    /* Set the height of the iframe */
}
.video-container iframe {
    position: absolute;
    top: 10;
   
   
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
        
        .home-button {
            position: absolute;
            top: 1rem; /* Adjust as needed */
            right: 1rem; /* Adjust as needed */
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Styling for the home button on hover */
        .home-button:hover {
            background-color: #0056b3;
        }



</style>
</head>
<body>
     <!-- Home button -->
     <a href="index.php" class="home-button">Home</a>
    <header>
        <h1>Sidhu Moosewala</h1>
        <p>Followers: 29,941,937</p>
    </header>
    <main>
        <section class="song">
            <h2>Drippy</h2>
            <p>25,732,658 plays</p>
        </section>
        <section class="song">
            <h2>Never Fold</h2>
            <p>149,545,650 plays</p>
        </section>
        <section class="song">
            <h2>Chorni</h2>
            <p>64,375,621 plays</p>
        </section>
        <section class="song">
            <h2>Everybody Hurts</h2>
            <p>98,819,018 plays</p>
        </section>
    </main>
    <div class="content">
    <div class="h-100 three sidhu " id="sidhu">
        <div class="videoSection">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5ZKLM5pNoGQ?si=O0_Wy4d57Lkph5qV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           </div>
           
    <div class="h-100 three sidhu " id="sidhu">
        <div class="videoSection">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/-CJ3_0vyzNs?si=7ZqW1no-eNSLrEhf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           </div>
           <div class="h-100 three sidhu " id="sidhu">
        <div class="videoSection">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/seEO3--Sy3c?si=Vu9AXuSmBiX8Oe1f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           </div>
           <div class="h-100 three sidhu " id="sidhu">
        <div class="videoSection">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Eu-CJl1bsIU?si=qYjYrFQSWOVoFp1X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           </div>
           <!-- Footer -->
    <footer class="container mt-5 text-center">
        <!-- lightgreen-colored table -->
     <div class="footer-table">
     <p>Designed by Gurpreet Singh</p>
        <p>Student ID: 202106914</p>
    </div>
    </footer>
    <!-- End of Footer -->
        </body>
</html>