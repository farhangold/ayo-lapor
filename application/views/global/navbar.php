<?php
$user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
    <div class="container">
        <!-- Brand/logo -->
        <a class="navbar-brand" href=""><img src="<?= base_url('assets') ?>/images/logo.png" alt=""></a>

        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></ span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" style="">
                <?php if (strtolower($user->role) == "mahasiswa") { ?>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Dashboard/DasboardPage') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/myreport') ?>">MY REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Berita/BeritaShowPage') ?>">NEWS</a>
                    </li>
                    
                <?php }else if(strtolower($user->role) == "kemahasiswaan"){ ?>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Dashboard/DasboardPage') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/reviewreportkemahasiswaan') ?>">REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/riwayatreportkmhs') ?>">HISTORY REPORT</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Berita/Beritapage') ?>">NEWS</a>
                    </li>
                    
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Dashboard/DasboardPage') ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/reviewreport') ?>">REPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Report/riwayatreportdosen') ?>">HISTORY REPORT</a>
                    </li>
<<<<<<< HEAD
                    <li class="nav-item ">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Berita/BeritaShowPage') ?>">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left:30px;"href="<?= base_url('Settings/setting') ?>">SETTING</a>
                    </li>
=======
                    
>>>>>>> 599cc1b703742f195ecc4c03d0547dd3571c7667
                <?php } ?>
            </ul>
            <div class="nav-item dropdown">
                                <a class="nav-link my-3 me-5" href="<?= base_url('Settings/setting') ?>"  aria-expanded="false">
                                    <img src="<?= base_url('assets') ?>/images/profile.png" style="max-height:24px;" class="rounded-circle" alt="user" />
                                </a>
                                
            </div>
            
        </div>
    </div>
</nav>