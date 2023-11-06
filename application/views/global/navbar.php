<?php
$user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
    <div class="container">
        <!-- Brand/logo -->
        <a class="navbar-brand" href=""><img src="<?= base_url('assets') ?>/images/logo.png" alt=""></a>

        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" style="">
                <?php if (strtolower($user->role) == "mahasiswa") { ?>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Dashboard/DasboardPage') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/reportmhs') ?>">REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/myreport') ?>">MY REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Berita/Beritapage') ?>">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Settings/setting') ?>">SETTING</a>
                    </li>
               <?php }else if(strtolower($user->role) == "kemahasiswaan"){ ?>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Dashboard/DasboardPage') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/reviewreportkemahasiswaan') ?>">REVIEW REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/riwayatreportkmhs') ?>">HISTORY REPORT</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Berita/BeritaKmhs') ?>">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Settings/setting') ?>">SETTING</a>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Dashboard/DasboardPage') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/reviewreport') ?>">REVIEW REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/riwayatreportdosen') ?>">HISTORY REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Settings/setting') ?>">SETTING</a>
                    </li>
                <?php } ?>
                
            </ul>
        </div>
    </div>
</nav>