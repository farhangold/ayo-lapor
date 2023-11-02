<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: black;">
    <div class="container">
        <!-- Brand/logo -->
        <a class="navbar-brand" href=""><img src="<?= base_url('assets') ?>/images/logo.png" alt=""></a>

        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Dashboard/DasboardDosen') ?>">HOME &nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT &nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Report/reviewreport') ?>">REVIEW REPORT &nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Report/riwayatreportdosen') ?>">HISTORY REPORT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Settings/setting') ?>">SETTING</a>
                </li>
            </ul>
        </div>
    </div>
</nav>