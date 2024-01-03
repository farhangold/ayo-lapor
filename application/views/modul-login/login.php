
    <div>
        <div class="row">
            <div class="col-md-7 justify-content-center">
                <div style="padding:150px;">
                    <div class="text-center">
                        <h1>Login to AyoLapor </h1><br>
                        <h2>Welcome to AyoLapor! Let's Report and Build a Better Future</h2><br>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <label for="userType"></label>
                            <select class="form-control" id="userType">
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Dosen Wali">Dosen Wali</option>
                                <option value="Kemahasiswaan">Kemahasiswaan</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Masukkan Username SSO Anda">
                        </div>
                        <div class="form-group row">
                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                        </div>
                       <br>
                        <div class="form-group row">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    var j = jQuery.noConflict();
    
    function submit() {
        var datapost = {
            role: $("#userType").val(),
            username: $("#username").val(),
            password: $("#password").val()
        }
        
        j.ajax({
            url: "<?= base_url('login/check_login') ?>",
            method: "POST",
            data: datapost,
            success: function (d) {
                var data = JSON.parse(d);
                if (data.status == false) {
                    alert(data.message)
                }else{
                    // alert(data.message)
                     window.location.href = "<?= base_url('Dashboard/DasboardPage') ?>"; 
                }
            }
        });

        // Rest of your code
    }
</script>

