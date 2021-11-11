<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.6.1/dist/css/bootstrap.min.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a href="#" class="navbar-brand">Academind</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Users</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Products</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-4.6.1/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>