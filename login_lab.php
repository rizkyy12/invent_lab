<?php
    include_once("config.php");
?>

<!DOCTYPE html>

<htlm lang="en">

<head>
    <title>Login Lab</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <section class="vh-100" style="background-color: #345BA2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem">
                        <div class="card-body p-5 text-center">
                        <form method="POST" action="cek_login.php">
                            <h5 class="mb-3">M A S U K &nbsp; L A B O R A T O R I U M</h5>
                            <div class="form-outline mb-4">
                                <input type="text" id="typeEmailX" class="form-control form-control-lg" name="username" placeholder="Username" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" placeholder="Password" /> 
                            </div>
                            <button class="btn btn-primary btn-lg" type="submit" >Masuk</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>