<div class="mycontainer" style="margin-top: 1rem;">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
            <!-- Tambahkan gambar profil di sini -->
            <img src="<?= base_url('assets') ?>/images/user.png" alt="Profile Image" class="img-fluid">
            <p><strong></strong> <?= $profile['first_name']." ".$profile['last_name'] ?></p>
            <p><strong></strong> <?= $profile['nip'] ?></p>
            <p><strong></strong> <?= $profile['role'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h1>Profile Dosen Wali</h1><hr>
                    <p><strong>First Name:</strong> <?php echo $profile['first_name']; ?></p>
                    <p><strong>Last Name:</strong> <?php echo $profile['last_name']; ?></p>
                    <p><strong>Email Address:</strong> <?php echo $profile['email']; ?></p>
                    <p><strong>Hometown:</strong> <?php echo $profile['city']; ?></p>
                    <p><strong>Country:</strong> <?php echo $profile['country']; ?></p>
                    <p><strong>Profile Description:</strong> <?php echo $profile['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
