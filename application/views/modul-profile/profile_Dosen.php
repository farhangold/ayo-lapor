<div class="mycontainer" style="margin-top: 1rem;">
    <div class="row">
        <div class="col-md-3">
<<<<<<< HEAD
            <div class="card">
                <div class="card-body text-center">
                    <!-- Tambahkan gambar profil di sini -->
                    <img src="<?= base_url('assets') ?>/images/user.png" alt="Profile Image" class="img-fluid">
                    <p><strong></strong> Joko Anwar</p>
                    <p><strong></strong> JAW</p>
                    <p><strong></strong> Dosen Wali</p>
                </div>
            </div>   
        </div> 
=======
            <!-- Tambahkan gambar profil di sini -->
            <img src="<?= base_url('assets') ?>/images/user.png" alt="Profile Image" class="img-fluid">
            <p><strong></strong> <?= $profile['first_name']." ".$profile['last_name'] ?></p>
            <p><strong></strong> <?= $profile['nip'] ?></p>
            <p><strong></strong> <?= $profile['role'] ?></p>
        </div>
>>>>>>> 01369d928c9c1e2264c9cdebddc0093eca2eb777
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h1>Profile Dosen Wali</h1><hr>
                    <p><strong>Nama Depan:</strong> <?php echo $profile['first_name']; ?></p>
                    <p><strong>Nama Belakang:</strong> <?php echo $profile['last_name']; ?></p>
                    <p><strong>Alamat Email:</strong> <?php echo $profile['email']; ?></p>
                    <p><strong>Kota Asal:</strong> <?php echo $profile['city']; ?></p>
                    <p><strong>Negara:</strong> <?php echo $profile['country']; ?></p>
                    <p><strong>Deskripsi Profil:</strong> <?php echo $profile['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
