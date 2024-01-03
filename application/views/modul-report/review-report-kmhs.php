<div class="mycontainer">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center text-DARK">REVIEW REPORT</h2>
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
                                <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Report Type</th>
                                <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Report Evidence</th>
                                <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Description</th>
                                <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Status</th>
                                <th style="background-color:#E54B4B;" class="text-white text-center w-25" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(isset($data) && is_array($data)){
                                $no = 0;
                                foreach ($data as $key => $value) { 
                                        $no++;
                                        $url = base_url("assets/bukti/".$value->bukti_laporan);
                                        $color = "info";
                                        if ($value->status == "Accepted Report By Dosen Wali") {
                                            $color = "success";
                                        }elseif ($value->status == "Rejected Report By Dosen Wali"){
                                            $color = "danger";
                                        }elseif ($value->status == "Rejected Report By Kemahasiswaan"){
                                            $color = "danger";
                                        }elseif ($value->status == "Accepted Report By Kemahasiswaan"){
                                            $color = "success";
                                        }elseif ($value->status == "Finish"){
                                            $color = "success";
                                        }
                                        echo "<tr>";
                                        echo "<td>$no</td>";
                                        echo "<td>$value->user</td>";
                                        echo "<td>$value->tanggal</td>";
                                        echo "<td>$value->jenis_laporan</td>";
                                        echo "<td><img src='$url' width='120px' alt='-'></td>";
                                        echo "<td>$value->keterangan</td>";
                                        echo "<td><span class='badge badge-$color text-white'>$value->status</span></td>";
                                        $action = " <a href='".base_url('Report/detailreport3/'.$value->id)."' class='detail-button btn btn-info text-white '>Detail</a> &nbsp;";
                                        if( $value->status == "Accepted Report By Kemahasiswaan"){ 
                                            $action = " <a href='".base_url('Report/detailreport/'.$value->id)."' class='detail-button btn btn-info text-white '>Detail</a> &nbsp;";
                        
                                        }
                                                                                // if ($value->status == "Save as Draft" ) {
                                        //     $action .= " <a href='".base_url('Report/editreport/'.$value->id)."' class='detail-button btn btn-warning text-white '>Edit</a> &nbsp;
                                        //     <a href='".base_url('Report/delete/'.$value->id)."' class='detail-button btn btn-danger text-white '>Delete</a>";
                                        // }

                                        echo "<td>$action</td>";
                                }
                            } else {
                                echo "No data available";
                            }
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.detail-button').click(function(){
                window.location.href = '<?= base_url("report/detailreport2") ?>';
            });
        });
    </script>
    

