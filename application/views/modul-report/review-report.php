<!DOCTYPE html>
<html>
<head>
    <title>Review Report</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead class="bg-danger text-white">
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Farhan</td>
                        <td>-</td>
                        <td>Ditolak Kemahasiswaan</td>
                        <td><button class="detail-button btn btn-info">Detail</button></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Tangguh</td>
                        <td>-</td>
                        <td>Diterima Kemahasiswaan</td>
                        <td><button class="detail-button btn btn-info">Detail</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
