<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Registrasi</h1>
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger">
                <?php echo $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url('register') ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo set_value('nama') ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo set_value('email') ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kata_sandi">Kata Sandi</label>
                <input type="password" name="kata_sandi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="konfirmasi_kata_sandi">Konfirmasi Kata Sandi</label>
                <input type="password" name="konfirmasi_kata_sandi" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </form>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
