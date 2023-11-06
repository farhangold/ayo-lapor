<!DOCTYPE html>
<html>
<head>
    <title>Ayo Lapor-Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .reportbg {
            background-image: url("<?= base_url('assets/images/pana.png') ?>");
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
                        <h1>Reporting Form</h1><br>
                        <h2>Let's Get Your Report</h2><br>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <label for="userType"></label>
                            <select select class="form-control" id="userType">
                                <option value="Selected">Type Report</option>
                                <option value="Pelecehan">Fractions</option>
                                <option value="Kekerasan">Violence</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="fileUpload">Upload of Proof</label>
                            <input type="file" class="form-control-file" id="fileUpload" name="fileUpload">
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-user" id="keterangan" aria-describedby="keterangan" placeholder="Description">
                        </div>
                        <div class="form-group row">
                            <a id="SaveButton"onclick="savedraft()" class="btn btn-primary text-white btn-user btn-block">
                                Save As Draft
                            </a>
                        </div>
                        <div class="form-group row">
                            <a id="SendButton"onclick="submit()" class="btn btn-success text-white btn-user btn-block">
                                Send Report
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 reportbg">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function submit() {
            var userType = $("#userType").val();
            var keterangan = $("#keterangan").val();
            var fileUpload = $("#fileUpload").val();

            if (userType === "Pelecehan" || userType === "Kekerasan" && keterangan !== "" && fileUpload !== "") {
                alert("Reporting Success");
            } else if(userType === "Pelecehan"||userType === "Kekerasan" && keterangan == "" && fileUpload !== "") {
                alert("Masukan Keterangan");
            }else if(userType === "Pelecehan"||userType === "Kekerasan" && keterangan !== "" && fileUpload == ""){
                alert("Masukan Bukti");
            }else if(userType === "Pelecehan"||userType === "Kekerasan" && keterangan == "" && fileUpload == ""){
                alert("Masukan Bukti dan Keterangan");
            }
        }


        function savedraft() {
            var userType = $("#userType").val()
            console.log(userType)
            if (userType === "Pelecehan") {
                alert("The report is saved in draft"); 
            }else if (userType === "Kekerasan") {
                alert("The report is saved in draft");
            }
        }
    </script>
</body>
</html>

