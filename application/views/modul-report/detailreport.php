
<?php
$user = $this->db->get_where('users',['username'=>$this->session->userdata('username')])->row();
?>
<div class="container mb-5" style="margin-top: 6rem;">
    <h2 class="text-center text-DARK">DETAIL REPORT</h2>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <form>
                <?php if ($data != null) { ?>
                    <input type="hidden" name="id" id="id" value="<?= $data->id ?>">
                    <div class="mb-3">
                        <label for="NameInput" class="form-label">Name Student</label>
                        <input type="text" id="KeteranganInput" class="form-control" value="<?= $data->user ?> " disabled>
                    </div>
                    <div class="mb-3">
                        <label for="NameInput" class="form-label">Date</label>
                        <input type="date" id="KeteranganInput" class="form-control" placeholder="Date" value="<?= $data->tanggal ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jenisinput" class="form-label">Type Fraction</label>
                        <input type="text" id="JenisInput" class="form-control" placeholder="Jenis Pelecehan"value="<?= $data->jenis_laporan ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="BuktiInput" class="form-label">Prof of Report</label><br>
                        <img src='<?= base_url('assets/bukti/'.$data->bukti_laporan) ?>' width='240px' alt='-' disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control form-control-user summernote" id="keterangan" name="keterangan" placeholder="Description" ><?= $data->keterangan ?></textarea >
                    </div>
                    <div class="mb-3" >
                        <label for="status" class="form-label">Status</label>
                        <input type="text" id="status" class="form-control" placeholder="Status"value="<?= $data->status?>" disabled>
                    </div>
                    <?php }else{ ?>
                        <div class="mb-3">
                        <label for="NameInput" class="form-label">Name Student</label>
                        <input type="text" id="KeteranganInput" class="form-control" placeholder="Name Student" value="han" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="NameInput" class="form-label">Date</label>
                        <input type="date" id="KeteranganInput" class="form-control" placeholder="Date" value="<?= date('Y-m-d')?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jenisinput" class="form-label">Type Fraction</label>
                        <input type="text" id="JenisInput" class="form-control" placeholder="Jenis Pelecehan" value="Fractions" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="BuktiInput" class="form-label">Prof of Report</label><br>
                        <img src='<?= base_url('assets/images/1.1.png') ?>' width='240px' alt='-' disabled>
                    </div>  
                    <div class="mb-3">
                        <label for="KeteranganInput" class="form-label">Descriptipn</label>
                        <textarea class="form-control form-control-user summernote" id="keterangan" name="keterangan" placeholder="Description" ></textarea disabled>
                    </div>
                    <div class="mb-3" >
                        <label for="status" class="form-label">Status</label>
                        <input type="text" id="status" class="form-control" placeholder="Status"value="Finish" disabled>
                    </div>    
                    <?php } ?>
                 
            </form>
        </div>
        <div class="col-lg-10 mt-3">
            <div class="mb-3">
            <?php if (strtolower($user->role) == "mahasiswa") { ?>
                <a href="<?=base_url('Report/myreport')?>" class="btn btn-danger text-white w-25" id="backButton">Back</a>
           
               <?php }else if(strtolower($user->role) == "kemahasiswaan"){ ?>
                <a href="<?=base_url('Report/riwayatreportkmhs')?>" class="btn btn-danger text-white w-25" id="backButton">Back</a>
                    <?php if( $data->status == "Accepted Report By Kemahasiswaan"){ ?>
                    <a id="finishButton" class="btn btn-success text-white w-25">Finish</a>
                    <?php } ?>     
                <?php }else{ ?>
                <a href="<?=base_url('Report/riwayatreportdosen')?>" class="btn btn-danger text-white w-25" id="backButton">Back</a>

                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var jq = $.noConflict();
        document.getElementById('finishButton').addEventListener('click', function() {
        var status = 'Finish';
        var id = $("#id").val();
        var data = {"status":status,"id":id}
        jq.ajax({
            url:"<?= base_url('Report/changeStatus') ?>",
            method:"POST",
            data : data,
            success:function(x){
                alert("Report Finish");
                location.href = "<?= base_url('Report/riwayatreportkmhs') ?>";
            }
        });
    });
    </script>