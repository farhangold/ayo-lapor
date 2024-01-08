    <div>
        <div class="row">
            <div class="col-md-7 justify-content-center">
                <div style="padding:100px;">
                    <div class="text-center">
                        <h1>Reporting Form</h1><br>
                        <h2>Let's Get Your Report</h2><br>
                    </div>
                    <div class="container mt-4">
                        <div class="card">
                            <div class="card-body">
                            <form class="user" method="POST" enctype="multipart/form-data" action="<?= base_url("Report/reportmhs") ?>">
                                <div class="form-group">
                                <label for="jenis_laporan">Type Report</label>
                                <select class="form-control" id="jenis_laporan" name="jenis_laporan">
                                    <option>--- Type Report ---</option>
                                    <option value="Fractions">Fractions</option>
                                    <option value="Violence">Violence</option>
                                </select>
                                <?= form_error('jenis_laporan', '<span class="text-danger">', '</span>') ?>
                                </div>
                                <div class="form-group">
                                <label for="bukti_laporan">Upload of Proof</label>
                                <input type="file" class="form-control-file" id="bukti_laporan" name="bukti_laporan">
                                </div>
                                <div class="form-group">
                                <label for="keterangan">Description</label>
                                <textarea class="form-control summernote" id="keterangan" name="keterangan" placeholder="Description"></textarea>
                                <?= form_error('keterangan', '<span class="text-danger">', '</span>') ?>
                                </div>
                                <div class="form-group">
                                <button type="submit" id="SaveButton" name="status" value="Save as Draft" class="btn btn-primary btn-block">
                                    Save As Draft
                                </button>
                                </div>
                                <div class="form-group">
                                <button type="submit" id="SendButton" name="status" value="Submitted" class="btn btn-success btn-block">
                                    Send Report
                                </button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 reportbg">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
