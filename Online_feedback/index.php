<?php
session_start();
require('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Student Feedback System">
    <meta name="author" content="Your Name">
    <title>Online Feedback System</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .hero {
            height: 100%;
            background: url('images/feedback.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .navbar {
            background: #007bff;
        }

        .navbar a {
            color: #ffffff !important;
        }

        footer {
            background: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Online Feedback System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?info=about"><i class="fa fa-info-circle"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?info=registration"><i class="fa fa-user-plus"></i> Registration</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-sign-in"></i> Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?info=login">Student</a></li>
                            <li><a class="dropdown-item" href="index.php?info=faculty_login">Faculty</a></li>
                            <li><a class="dropdown-item" href="admin">Admin</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="index.php?info=contact"><i class="fa fa-phone"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Fullscreen Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to the Online Feedback System</h1>
            <p>Provide valuable feedback and help us improve the quality of education.</p>
            <a href="index.php?info=about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Online Feedback System | All Rights Reserved
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
