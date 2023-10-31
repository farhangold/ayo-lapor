<!DOCTYPE html>
<html>
<head>
    <title>Ayo Lapor-Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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
            <div class="col-md-7 justify-content-center">
                <div style="padding:100px;">
                    <div class="text-center">
                        <h1>Login to AyoLapor</h1><br>
                        <h2>Welcome to AyoLapor! Let's Report and Build a Better Future</h2><br>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <label for="userType"></label>
                            <select select class="form-control" id="userType">
                                <option value="Selected">Pilih Role Anda!</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Dosen Wali">Dosen Wali</option>
                                <option value="Kemahasiswaan">Kemahasiswaan</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email SSO Anda">
                        </div>
                        <div class="form-group row">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="form-group row">
                            <div class="col-6 custom-control custom-checkbox small text-left">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                            <div class="col-6 text-right">
                                <a href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- Add an ID to the login button -->
                            <a id="loginButton"onclick="submit()" class="btn btn-danger btn-user btn-block">
                                Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 loginbg">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function submit() {
            var userType = $("#userType").val()
            console.log(userType)
            if (userType === "Mahasiswa") {
                window.location.href = "<?= base_url('Dashboard/DasboardPage') ?>"; 
            }else if (userType === "Dosen Wali") {
                window.location.href = "<?= base_url('Dashboard/DasboardDosen') ?>"; 
            }
        }
    </script>
</body>
</html>
