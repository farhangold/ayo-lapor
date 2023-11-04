<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-3">
            <!-- Tambahkan gambar profil di sini -->
            <img src="<?= base_url('assets') ?>/images/user.png" alt="Profile Image" class="img-fluid">
            <p><strong></strong> Usep Randana</p>
            <p><strong></strong> 1303040598</p>
            <p><strong></strong> Mahasiswa</p>
        </div>
        <div class="col-md-9">
            <h1>Profile Mahasiswa</h1><hr>
            <p><strong>Nama Depan:</strong> <?php echo $profile['first_name']; ?></p>
            <p><strong>Nama Belakang:</strong> <?php echo $profile['last_name']; ?></p>
            <p><strong>Alamat Email:</strong> <?php echo $profile['email']; ?></p>
            <p><strong>Kota Asal:</strong> <?php echo $profile['city']; ?></p>
            <p><strong>Negara:</strong> <?php echo $profile['country']; ?></p>
            <p><strong>Deskripsi Profil:</strong> <?php echo $profile['description']; ?></p>
        </div>
    </div>
</div>
</body>
</html>
