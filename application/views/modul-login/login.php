<!DOCTYPE html>
<html>
<head>
    <title>Ayo Lapor-Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <<style>
        .loginbg {
            background-image: url("<?= base_url('assets/images/login-image.jpg') ?>");
            background-size: cover;
            height: 100vh; 
            width: 100vh; 
        }
    </style>


</head>
<body>
    <div>
        <div class="row">
            <div class="col-md-6 justify-content-center" >
            <div style="padding:150px;">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login to AyoLapor</h1><br>
                                        <h2 class="h4 text-gray-700 mb-1">Welcome to AyoLapor! Let's Report and Build a Better Future</h2>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label for="userType"></label>
                                            <select select class="form-control" id="userType">
                                                <option value="mop">Pilih Role Anda!</option>
                                                <option value="user">Mahasiswa</option>
                                                <option value="admin">Dosen</option>
                                                <option value="guest">Kemahasiswaan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email SSO Anda">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <a type="submit" class="btn btn-danger btn-user btn-block">
                                            Login
                                        </a>

                                    </form>
                                </div>
            </div>
            <div class="col-md-6 loginbg">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
