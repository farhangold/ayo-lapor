<!DOCTYPE html>
<html lang="en">
  <head >
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>" />
    <style>
        .navbar {
            z-index: 1000; 
        }
        .content {
            padding-top: 70px;
        }
        .square {
            width: 1080px; /* Lebar garis persegi */
            height: 500px; /* Tinggi garis persegi */
            border: 2px solid red; /* Warna dan ketebalan garis tepi */
            display: flex;
            justify-content: center; /* Tengah horizontal */
            align-items: center; /* Tengah vertikal */
        }
        .squareimage {
        width: 1080px;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('<?= base_url("assets") ?>/images/pana.png');
        background-size: auto 90%; /* Set the width to auto, and height to 100% */
        background-repeat: no-repeat; /* Prevent image from repeating */
        background-position: center; 
        }

        .text {
            color: black; /* Warna teks */
        }
    </style>
  </head>
  <body>