<div class="container mb-5" style="margin-top: 6rem;">
    <h2 class="text-center text-DARK">EDIT REPORT</h2>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <form method="POST" enctype="multipart/form-data" action="<?=current_url();?>">
                <div class="mb-3">
                    <label for="NameInput" class="form-label">Name Student</label>
                    <input type="text" id="KeteranganInput" disabled class="form-control" value="<?= $data->user ?> ">
                </div>
                <div class="mb-3">
                    <label for="NameInput" class="form-label">Date</label>
                    <input type="date" id="KeteranganInput" class="form-control" placeholder="Date" value="<?= $data->tanggal ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="jenisinput" class="form-label">Type Fraction</label>
                    <select select class="form-control" id="jenis_laporan" name="jenis_laporan">
                        <option>--- Type Report ---</option>
                        <option <?= $data->jenis_laporan == "Fractions" ? "selected":"" ?> value="Fractions">Fractions</option>
                        <option <?= $data->jenis_laporan == "Violence" ? "selected":"" ?> value="Violence">Violence</option>
                    </select>
                    <?= form_error('jenis_laporan', '<span class="text-danger">', '</span>') ?>
                </div>
                <div class="mb-3">
                    <label for="BuktiInput" class="form-label">Prof of Report</label><br>
                    <?php if(file_exists(base_url('assets/bukti/'.$data->bukti_laporan))){ ?>
                        <img src='<?= base_url('assets/bukti/'.$data->bukti_laporan) ?>' width='240px' alt='-'><br>
                    <?php } ?>
                    <input type="file" class="form-control-file" id="bukti_laporan" name="bukti_laporan">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control form-control-user summernote" id="keterangan" name="keterangan" placeholder="Description" ><?= $data->keterangan ?></textarea >
                </div>
                <div class="mb-3" >
                    <label for="status" class="form-label">Status</label>
                    <input type="text" id="status" class="form-control" placeholder="Status"value="<?= $data->status?>" disabled>
                </div>
        </div>
        <div class="col-lg-10 mt-3">
            <div class="mb-3 text-center">
                <a href="<?=base_url('Report/myreport')?>" class="btn btn-danger text-white w-25" id="backButton">Back</a>
                <button type="submit" class="btn btn-primary w-25"  name="status" value="Save as Draft" id="saveDraftButton">Save as Draft</button>
                <button type="submit" class="btn btn-success w-25"  name="status" value="Submitted" id="submitted">Send Report</button>
            </div>
        </div>
        </form>

    </div>
</div>

