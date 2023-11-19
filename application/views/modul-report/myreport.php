
    <div class="mycontainer">
        <div class="card">
            <div class="card-body">    
            <h2 class="text-center text-DARK">MY REPORT</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <a href="<?= base_url('Report/reportmhs') ?>" class="btn btn-primary">Tambah</a>
                            </div>
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
                                <?php 
                                $no =0;
                                    foreach ($data as $key => $value) { 
                                        $no++;
                                        $url = base_url("assets/bukti/".$value->bukti_laporan);
                                        $color = "warning";
                                        if ($value->status == "Submitted") {
                                            $color = "success";
                                        }
                                        echo "<tr>";
                                        echo "<td>$no</td>";
                                        echo "<td>$value->user</td>";
                                        echo "<td>$value->tanggal</td>";
                                        echo "<td><img src='$url' width='120px' alt='-'></td>";
                                        echo "<td>$value->keterangan</td>";
                                        echo "<td><span class='badge badge-$color text-white'>$value->status</span></td>";

                                        $action = " <a href='".base_url('Report/detailreport/'.$value->id)."' class='detail-button btn btn-info text-white '>Detail</a> &nbsp;";
                                        if ($value->status == "Save as Draft" ) {
                                            $action .= " <a href='".base_url('Report/editreport/')."' class='detail-button btn btn-warning text-white '>Edit</a> &nbsp;
                                            <a href='".base_url('Report/delete/'.$value->id)."' class='detail-button btn btn-danger text-white '>Delete</a>";
                                        }

                                        echo "<td>$action</td>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
  function redirectToDetail() {
    window.location.href = '<?= base_url("Report/detailreport") ?>';
  }
</script>    

