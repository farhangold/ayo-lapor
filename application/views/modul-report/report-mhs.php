    <div>
        <div class="row">
            <div class="col-md-7 justify-content-center">
                <div style="padding:100px;">
                    <div class="text-center">
                        <h1>Reporting Form</h1><br>
                        <h2>Let's Get Your Report</h2><br>
                    </div>
                    <form class="user" method="POST" enctype="multipart/form-data" action="<?= base_url("Report/reportmhs") ?>">
                        <div class="form-group row">
                            <label for="userType"></label>
                            <select select class="form-control" id="jenis_laporan" name="jenis_laporan">
                                <option>--- Type Report ---</option>
                                <option value="Pelecehan">Fractions</option>
                                <option value="Kekerasan">Violence</option>
                            </select>
                            <?= form_error('jenis_laporan', '<span class="text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group row">
                            <label for="bukti_laporan">Upload of Proof</label>
                            <input type="file" class="form-control-file" id="bukti_laporan" name="bukti_laporan">
                        </div>

                        <div class="form-group row">
                            <textarea class="form-control form-control-user summernote" id="keterangan" name="keterangan" placeholder="Description"></textarea>
                            <?= form_error('keterangan', '<span class="text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group row">
                            <button type="submit" id="SaveButton" name="status" value="Save as Draft" class="btn btn-primary text-white btn-user btn-block">
                                Save As Draft
                            </button>
                        </div>
                        <div class="form-group row">
                            <button type="submit" id="SendButton" name="status" value="Submitted" class="btn btn-success text-white btn-user btn-block">
                                Send Report
                            </button>
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
