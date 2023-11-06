<<<<<<< HEAD
<?php
$user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
?>

    <?php if (strtolower($user->role) == "mahasiswa") { ?>
        <div class="container" style="margin-top: 100px;">
            <h1 class="mt-5">Settings</h1>
            <ul class="list-group mt-4">
                <li class="list-group-item"><a href="<?= base_url('settings/faq') ?>">FAQ</a></li>
                <li class="list-group-item"><a href="<?= base_url('Profile/Profilepage') ?>">Profile</a></li>
                <li class="list-group-item"><a href="<?= base_url('settings/report_bug') ?>">Report Bugs And Suggestions</a></li>
                <li class="list-group-item"><a href="https://api.whatsapp.com/send?phone=089658664909">Contact Us</a></li>
                <li class="list-group-item"><a href="<?= base_url('settings/logout') ?>">Logout</a></li>
            </ul>
        </div>
     <?php }else if(strtolower($user->role) == "kemahasiswaan"){ ?>          
        <div class="container" style="margin-top: 100px;">
            <h1 class="mt-5">Settings</h1>
            <ul class="list-group mt-4">
                <li class="list-group-item"><a href="<?= site_url('settings/faq') ?>">FAQ</a></li>
                <li class="list-group-item"><a href="<?= base_url('Profile/ProfilepageKmh') ?>">Profile</a></li>
                <li class="list-group-item"><a href="<?= site_url('settings/report_bug') ?>">Report Bugs And Suggestions</a></li>
                <li class="list-group-item"><a href="https://api.whatsapp.com/send?phone=089658664909">Contact Us</a></li>
                <li class="list-group-item"><a href="<?= base_url('settings/logout') ?>">Logout</a></li>
            </ul>
        </div>
    <?php }else{ ?>
        <div class="container" style="margin-top: 100px;">
            <h1 class="mt-5">Settings</h1>
            <ul class="list-group mt-4">
                <li class="list-group-item"><a href="<?= site_url('settings/faq') ?>">FAQ</a></li>
                <li class="list-group-item"><a href="<?= base_url('Profile/ProfilepageDosen') ?>">Profile</a></li>
                <li class="list-group-item"><a href="<?= site_url('settings/report_bug') ?>">Report Bugs And Suggestions</a></li>
                <li class="list-group-item"><a href="https://api.whatsapp.com/send?phone=089658664909">Contact Us</a></li>
                <li class="list-group-item"><a href="<?= base_url('settings/logout') ?>">Logout</a></li>
            </ul>
        </div>
    <?php } ?>
    <br><br><br><br>        <br><br><br><br>       <br><br><br><br><br><br>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 100px;">
        <h1 class="mt-5">Settings</h1>
        <ul class="list-group mt-4">
            <li class="list-group-item"><a href="<?= base_url('settings/faq') ?>">FAQ</a></li>
            <li class="list-group-item"><a href="<?= base_url('Profile/profilePage') ?>">Profile</a></li>
            <li class="list-group-item"><a href="<?= base_url('settings/report_bug') ?>">Laporkan Bug dan Saran</a></li>
            <li class="list-group-item"><a href="<?= base_url('settings/quick_record') ?>">Rekam Cepat</</li>
            <li class="list-group-item"><a href="<?= base_url('settings/contact_us') ?>">Hubungi Kami</</li>
            <li class="list-group-item"><a href="<?= base_url('settings/logout') ?>">Logout</a></li>
            </li>
            
        </ul>
    </div>
</body>
</html>
>>>>>>> f01d404adb4059841695e5ab2a838a06170e746b
