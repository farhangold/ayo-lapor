
<div class="container mb-5"style="margin-top: 6rem;">
    <h2 class="text-center text-DARK">DETAIL REPORT</h2>
    <div class="row justify-content-center">
        <div class="col-lg-12">
        <form>
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

            </form>
        </div>
        <div class="col-lg-12 ">
            <div class="mb-3">
                <button type="button" class="btn btn-danger text-white btn-block w-50 mx-auto d-block" id="tolakButton">Rejected Report</button>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-success text-white btn-block w-50 mx-auto d-block" id="tindakLanjutButton">Accepted Report</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    var jq = $.noConflict();
    document.getElementById('tolakButton').addEventListener('click', function() {
        var status = 'Rejected Report By Dosen Wali';
        var id = $("#id").val();
        var data = {"status":status,"id":id}
        jq.ajax({
            url:"<?= base_url('Report/changeStatus') ?>",
            method:"POST",
            data : data,
            success:function(x){
                alert("Report Successfully Rejected");
                location.href = "<?= base_url('Report/riwayatreportdosen') ?>";
            }
        });
    });

    document.getElementById('tindakLanjutButton').addEventListener('click', function() {
        var status = 'Accepted Report By Dosen Wali';
        var id = $("#id").val();
        var data = {"status":status,"id":id}
        jq.ajax({
            url:"<?= base_url('Report/changeStatus') ?>",
            method:"POST",
            data : data,
            success:function(x){
                alert("Report Successfully Accepted");
                location.href = "<?= base_url('Report/riwayatreportdosen') ?>";
            }
        });
    });
</script>

