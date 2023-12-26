<div class="mycontainer">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center text-DARK">NEWS</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="<?= base_url('Berita/add') ?>" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                    <br>
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead class="text-center" >
                            <tr>
                            <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">NO</th>
                                <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Title</th>
                                <th style="background-color:#E54B4B;" class="text-white text-center" scope="col">Created At</th>
                                <th style="background-color:#E54B4B;" class="text-white text-center w-25" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(isset($data) && is_array($data)){
                                $no = 0;
                                foreach ($data as $key => $value) { 
                                        $no++;
                                        
                                        echo "<tr>";
                                        echo "<td>$no</td>";
                                        echo "<td>$value->title</td>";
                                        echo "<td>$value->created_at</td>";
                                        $action = " <a href='".base_url('Berita/detail/'.$value->id)."' class='detail-button btn btn-info text-white '>Detail</a> &nbsp;
                                        <a href='".base_url('Berita/edit/'.$value->id)."' class='detail-button btn btn-warning text-white '>Edit</a> &nbsp;
                                        <a href='".base_url('Berita/delete/'.$value->id)."' class='detail-button btn btn-danger text-white '>Delete</a> &nbsp;
                                                    ";
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
    

