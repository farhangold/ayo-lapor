<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>My Report</title>
<style>
	body, p {
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    }
    .btn.button.border-danger:active {
        background-color: #E54B4B; 
        color: white; 
    }

    .centered-container {
        text-align: center;
        margin-top: 20px; 
        font-size: 20px;
    }
    .border-container {
        border-style: ridge;
        max-width: 1080px;
        margin: 1% auto;
        text-align: left;
        font-weight: bold;
        font-size: 20px;
        padding-left: 80px;
        position: relative;
    }
    .name {
        margin: 0;
    }
    .date {
        color: #B9B7BD;
        font-size: 12px;
        margin: 0;
    }
    .date-box {
        margin-top: 10px;
        padding-top: 5px;
    }
    .waiting-box {
        border: 1px solid #F8F9FA; 
        border-radius: 4px; 
        padding: 5px 10px; 
        display: inline-block; 
        font-size: 15px;
        width: 335px;
        height: 45px;
        top: 525px;
        left: 224px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    .ellipsis-icon {
        position: absolute;
        top: 10px;
        right: 100px; /* Ubah posisi ikon ellipsis */
        color: #E54B4B;
        font-size: 70px;
    }
    .entity-container {
        margin-top: 20px; 
    }
    .button {
        color: #E54B4B;
        padding: 5px 33px;
        margin: 8px;
        font-size: 25px;
    }
</style>
</head>
<body style="text-align: center;">
    <div class="container">
        <div class="centered-container">
            <button class="btn btn-light button border-danger">Waiting Confirmation</button>
            <button style="color: white;" class="btn btn-danger button">Report Success</button>
            <button class="btn btn-light button border-danger">Report Rejected</button>
            <button class="btn btn-light button border-danger">Draft Report</button>
            <hr class="my-4">
        </div>
        <div class="border-container mb-3">
            <p class="name">Lord Tangguh</p>
            <p class="date">20 Mei 2023</p>
            <div class="date-box">
                <div class="waiting-box border shadow p-3 mb-5 bg-body rounded text-danger">Menunggu Tindak Lanjut Kemahasiswaan</div>
            </div>
            <div class="ellipsis-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
            </div>
        </div>
        <div class="border-container">
            <p class="name">Lord Kepin</p>
            <p class="date">20 Mei 2023</p>
            <div class="date-box">
                <div class="waiting-box border shadow p-3 mb-5 bg-body rounded text-danger">Menunggu Tindak Lanjut Dosen</div>
            </div>
            <div class="ellipsis-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
            </div>
        </div>
        <div class="border-container">
            <p class="name">Lord Farhan</p>
            <p class="date">20 Mei 2023</p>
            <div class="date-box">
                <div class="waiting-box border shadow p-3 mb-5 bg-body rounded text-success">Sudah Ditindak Lanjuti Oleh Dosen Wali</div>
            </div>
            <div class="ellipsis-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
            </div>
        </div>
        <div class="border-container">
            <p class="name">Lord Ghaza</p>
            <p class="date">20 Mei 2023</p>
            <div class="date-box">
                <div class="waiting-box border shadow p-3 mb-5 bg-body rounded text-warning">Save As Draft</div>
            </div>
            <div class="ellipsis-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
            </div>
        </div>
        <div class="border-container">
            <p class="name">Lord Fathur</p>
            <p class="date">20 Mei 2023</p>
            <div class="date-box">
                <div class="waiting-box border shadow p-3 mb-5 bg-body rounded text-success">Selesai</div>
            </div>
            <div class="ellipsis-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
            </div>
        </div>
    </div>
</body>
</html>
