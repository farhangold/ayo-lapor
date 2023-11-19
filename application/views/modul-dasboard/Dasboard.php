<?php
$user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
?>
<div class="content"style="margin-top: 2rem;">
    <img src="<?= base_url('assets') ?>/images/ayolapor.png" class="rounded mx-auto d-block img-thumbnail" 
    alt="Responsive image" style="width: 80%; height: 40%;">
</div>

<div class="container" >
    <div class="text-left" style="margin-top: 50px;font-family: alegreya SC;">
        <h4 style="margin-left:50px">ABOUT US</h4>
        <hr class="border-danger" style="max-width: 1000px;">
        </div>
        <div class="row" style="margin-left:20px">
        <div class="col-md-12 col-lg-4">
            <div style="font-family: alegreya SC;text-align: justify;">
                We have developed the 'AyoLapor' application, designed to assist victims experiencing any form of violence and harassment within the academic environment in reporting incidents to the campus authorities. 
            </div>
            <div style="font-family: alegreya SC;text-align: justify;margin-top:20px;">
                This application is specifically tailored for Telkom University students who have experienced any form of violence or harassment. The goal of this application is to facilitate a seamless connection between the victims and the campus authorities, making it easier for them to report incidents and seek consultation from the university.
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <img src="<?= base_url('assets') ?>/images/1.png" class="rounded mx-auto d-block img-thumbnail" alt="Responsive image" style="max-width: 90%; height: auto;">
        </div>
        <div class="col-md-12 col-lg-4">
            <img src="<?= base_url('assets') ?>/images/2.png" class="rounded mx-auto d-block img-thumbnail" alt="Responsive image" style="max-width: 90%; height: auto;">
        </div>
    </div>
</div>

<?php if (strtolower($user->role) == "mahasiswa") { ?>
<div class="container">
    <div class="row">
        <div>
            <div class="square" style="padding: 20px; margin-top: 50px;">
                <div class="col-md-6">
                    <div class="squareimage" style="background: url('<?= base_url("assets") ?>/images/pana.png'); center center; background-size: cover; height: 400px; "></div>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 30px; font-family: alegreya SC; sans-serif; text-align: justify;">
                        Recognize Sexual Violence Symptoms Around You, Then Report to Us Promptly
                    </p>
                    <div style="font-family: alegreya SC; text-align: justify;">
                        Don't be afraid to report; we are here to assist you. Recognizing the signs of sexual violence is the first step towards ensuring safety for all. If you observe any symptoms or incidents, it's crucial to speak up and report them promptly. Our support team is dedicated to helping you through this process.
                    </div>
                    <a href="<?= base_url('Report/reportmhs') ?>" class="btn btn-danger text-white" style="margin-top: 20px;">SEND A REPORT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<div class="container">
    <div class="text-left;" style="margin-top: 50px;">
        <h4 style="margin-left:50px; font-family: alegreya SC;">NEWS AND INFOMATION</h4>
    </div>
    <div class="row,col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style="margin-top:50px">
            <div class="carousel-item active text-center">  
              <img class="d-block mx-auto" width="450px" src="<?= base_url('assets') ?>/images/1.1.png" alt="First slide">
              <!-- <h3 style="font-family: alegreya SC;">
                "5 Signs You're Being Harassed
              </h3> -->
            </div>
            <div class="carousel-item text-center">
              <img class="d-block mx-auto" width="450px" src="<?= base_url('assets') ?>/images/1.2.png" alt="Second slide">
              <!-- <h3 style="font-family: alegreya SC;">
                Together Against Oppression: Ayo Lapor Encourages Action
              </h3> -->
            </div>
            <div class="carousel-item text-center">
              <img class="d-block mx-auto" width="450px" src="<?= base_url('assets') ?>/images/1.3.png" alt="Third slide">
              <!-- <h3 style="font-family: alegreya SC;">
                Shedding Light on Harassment Issues for a Safer Society
              </h3> -->
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
            </span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span aria-hidden="true" style="";>
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            </span>
            <span class="sr-only" style="color:black;"></span>
          </a>
        </div>
    </div>
</div>
<br>