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

    <!-- Tautan Bootstrap CSS versi 4.5.2 -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- Tautan Bootstrap CSS yang tidak relevan (versi 4.0.0) -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- Tautan Bootstrap CSS (versi 5.3.0) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- Tautan ke berkas style.css di direktori assets -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .reportbg {
            background-image: url("<?= base_url('assets/images/pana.png') ?>");
            background-size: cover;
            height: 100vh;
            width: 100vh;
        }
    </style>

    <style>
      .navbar {
          z-index: 1000; 
      }
      
      .content {
          padding-top: 70px;
      }
      .mycontainer{
        padding:100px;
      }
      
      .square {
        max-width: 100%; /* Ensure the square doesn't exceed the container width */
        height: auto; /* Allow the height to adjust proportionally */
        border: 2px solid red; /* Color and border thickness */
        display: flex;
        justify-content: center; /* Horizontal center */
        align-items: center; /* Vertical center */
      }
      .squareimage {
        max-width: 100%; /* Ensure the image doesn't exceed the container width */
        height: auto; /* Allow the height to adjust proportionally */
        display: flex;
        justify-content: center; /* Horizontal center */
        align-items: center; /* Vertical center */
        background-image: url('<?= base_url("assets") ?>/images/pana.png');
        background-size: cover; /* Cover the entire container */
        background-repeat: no-repeat; /* Prevent image from repeating */
        background-position: center;
      }
      @media (max-width: 768px) {
        .square, .squareimage {
        max-width: 100%;
        height: auto;
        }
      }
      .text {
        color: black; /* Warna teks */
      }
      .carousel-inner {
        overflow: hidden;
      }
      .carousel-item .col-md-4 {
        margin-right: 10px; /* Adjust this value to control spacing */
      }
      .carousel-inner .carousel-item {
        text-align: center;
      }
      .square {
        background-color: #f2f2f2;
        padding: 20px;
      }
      .square p {
        font-size: 18px;
      }
      @media (max-width: 768px) {
        .carousel-inner .carousel-item .col-md-4 {
          margin-right: 0;
          margin-bottom: 10px; /* Adjust this value for spacing between items on smaller screens */
        }
        .carousel-inner .carousel-item .col-md-4:last-child {
          margin-bottom: 0;
        }
      }
    </style>
  </head>
<body>