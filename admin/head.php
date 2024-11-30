<?php 
if(!isset($_SESSION["username"]))
{
 
 header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<style>
    :root {
        --primary-color: #2462;
        --secondary-color: #262626;
    }

    .dashboard-stats {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .stats-card {
        text-align: center;
        padding: 20px;
        border-radius: 8px;
        color: white;
        margin-bottom: 15px;
    }

    .bg-gradient-primary {
        background: linear-gradient(45deg, #4e73df, #224abe);
    }

    .bg-gradient-success {
        background: linear-gradient(45deg, #1cc88a, #13855c);
    }

    .bg-gradient-info {
        background: linear-gradient(45deg, #36b9cc, #258391);
    }

    .bg-gradient-warning {
        background: linear-gradient(45deg, #f6c23e, #dda20a);
    }

    .sidebar {
        min-height: 100vh;
        background: #4e73df;
    }

    .sidebar .nav-link {
        color: rgba(255, 255, 255, .8);
    }

    .sidebar .nav-link:hover {
        color: #fff;
    }

    .main-content {
        background: #f8f9fc;
    }
    </style>
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content="pavilan" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    <title>Disha - Disha Neuropsychiatry Centre</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Disha CSS -->
    <!-- <link rel="stylesheet" href="css/normalize.css" /> -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- Color CSS -->
    <link rel="stylesheet" href="css/color/color1.css" />

    <link rel="stylesheet" id="colors" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


</head>

<body>
<div class="col-md-2 sidebar p-0">
                <div class="d-flex flex-column p-3">
                    <h4 class="text-white text-center mb-4">Admin Panel</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="appointmentdata.php">
                                <i class="fas fa-calendar-check me-2"></i> Appointments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.php">
                                <i class="fas fa-user-md me-2"></i> Doctors
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="patients.php">
                                <i class="fas fa-users me-2"></i> Patients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactdata.php">
                                <i class="fas fa-envelope me-2"></i> Contact Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="auth.php">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>






    <!-- End Header Area -->