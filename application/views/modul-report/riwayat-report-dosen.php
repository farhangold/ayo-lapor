

<div class="mycontainer mb-5"style="margin-top: 1rem;">
        <h2 class="text-center text-DARK">HISTORY REPORT</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- <div class="col-md-2">
                        <a href="<?= base_url('Report/reportmhs') ?>" class="btn btn-primary">Tambah</a>
                    </div> -->
                </div>
                <br>
                <table id="myTable" class="table table-bordered table-hover">
                    <thead class="text-center" >
                        <tr>
                        <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">NO</th>
                        <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Name</th>
                        <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Date</th>
                        <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Bukti Laporan</th>
                        <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Keterangan</th>
                        <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Status</th>
                        <th style="background-color:#E54B4B;" class="text-white text-center w-25" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th >1</th>
                        <td>Farhan</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-danger text-white">Rejected By Dosen Wali</span></td>
                        <td><button class="detail-button btn btn-info">Detail</button></td>
                        </tr>
                        <tr>
                        <th >1</th>
                        <td>Tangguh</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-danger text-white">Rejected By Kemahasiswaan</span></td>
                        <td><button class="detail-button btn btn-info">Detail</button></td>
                        </tr>
                        <tr>
                        <th >1</th>
                        <td>Ghaza</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><span class="badge badge-success text-white">Finish</span></td>
                        <td><button class="detail-button btn btn-info">Detail</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function(){
        $('.detail-button').click(function(){
            window.location.href = '<?= base_url("report/detailreport") ?>';
        });
    });
</script>

