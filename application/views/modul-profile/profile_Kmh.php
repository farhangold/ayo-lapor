<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <!-- Tambahkan gambar profil di sini -->
                <img src="<?= base_url('assets') ?>/images/user.png" alt="Profile Image" class="img-fluid">
                <p><strong></strong> <?= $profile['first_name']." ".$profile['last_name'] ?></p>
                <p><strong></strong> <?= $profile['role'] ?></p>
            </div>
        </div>
        <div class="col-md-9">
            <h1>Profile Kemahasiswaan</h1><hr>
            <p><strong>First Name:</strong> <?php echo $profile['first_name']; ?></p>
            <p><strong>Last Name:</strong> <?php echo $profile['last_name']; ?></p>
            <p><strong>Email Address:</strong> <?php echo $profile['email']; ?></p>
            <p><strong>Profile Description:</strong> <?php echo $profile['description']; ?></p>
        </div>
    </div>
</div>
<br><br><br><br>
  