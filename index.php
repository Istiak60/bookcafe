<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Cafee</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="index.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="responsive.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <section class="main_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="book_icon">
                        <i class="fas fa-book-open"></i>
                        <h2>Book Cafee</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="book_content">
                        <h2>Book Cafee</h2>
                        <p>We are trying to give books from our book cafe very easily and at low cost. Since people are
                            not interested in reading books now, we have taken this initiative. Hopefully we will be
                            able to deliver books to everyone's doorsteps.</p>
                    </div>
                    <div class="book_btn">
                        <div class="btn_left">
                            <a href="signup.php">Sign Up</a>
                        </div>
                        <div class="btn_right">
                            <a href="login.php">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap  JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>