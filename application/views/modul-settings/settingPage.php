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
            <li class="list-group-item"><a href="<?= site_url('settings/faq') ?>">FAQ</a></li>
            <li class="list-group-item"><a href="<?= site_url('settings/report_bug') ?>">Laporkan Bug dan Saran</a></li>
            <li class="list-group-item"><a href="<?= site_url('settings/quick_record') ?>">Rekam Cepat</a></li>
            <li class="list-group-item"><a href="<?= site_url('settings/dark_mode') ?>">Mode Gelap</a></li>
            <li class="list-group-item"><a href="<?= site_url('settings/contact_us') ?>">Hubungi Kami</a></li>
            <li class="list-group-item"><a href="<?= site_url('logout') ?>">Logout</a></li>
        </ul>
    </div>
</body>
</html>
