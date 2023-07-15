<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <?php echo $error ?>
            </div>
        <?php endif; ?>
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger">
                <?php echo $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url('login') ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kata_sandi">Kata Sandi</label>
                <input type="password" name="kata_sandi" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Masuk</button>
                <a href="<?php echo base_url('register') ?>" class="btn btn-link">Register</a>
            </div>
        </form>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
