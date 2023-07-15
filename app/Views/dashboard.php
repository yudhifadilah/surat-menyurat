<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Dashboard</h1>
        <p>Halo, <?php echo session('nama'); ?></p>
        <a href="<?php echo base_url('logout'); ?>" class="btn btn-primary">Logout</a>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
