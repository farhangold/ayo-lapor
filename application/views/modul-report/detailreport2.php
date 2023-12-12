
<div class="container mb-5"style="margin-top: 6rem;">
    <h2 class="text-center text-DARK">DETAIL REPORT</h2>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <form>
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="NameInput" class="form-label">Name Student</label>
                        <input type="text" id="KeteranganInput" class="form-control" placeholder="Name Student" value="farhanmulya">
                    </div>
                    <div class="mb-3">
                        <label for="NameInput" class="form-label">Date</label>
                        <input type="date" id="KeteranganInput" class="form-control" placeholder="Date" value="<?= date('Y-m-d')?>">
                    </div>
                    <div class="mb-3">
                        <label for="jenisinput" class="form-label">Type Fraction</label>
                        <input type="text" id="JenisInput" class="form-control" placeholder="Jenis Pelecehan" value="Fractions">
                    </div>
                    <div class="mb-3">
                        <label for="BuktiInput" class="form-label">Prof of Report</label>
                        <input type="text" id="BuktiInput" class="form-control" placeholder="Proof of Report" value="image.jpg">
                    </div>
                    <div class="mb-3">
                        <label for="KeteranganInput" class="form-label">Descriptipn</label>
                        <textarea class="form-control form-control-user summernote" id="keterangan" name="keterangan" placeholder="Description" disabled>BLablabla</textarea>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-lg-12 ">
            <div class="mb-3">
                <button type="button" class="btn btn-dark text-white btn-block w-50 mx-auto d-block" id="hubungiButton">Contact Student</button>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-danger text-white btn-block w-50 mx-auto d-block" id="tolakButton">Rejected Report</button>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-success text-white btn-block w-50 mx-auto d-block" id="tindakLanjutButton">Accepted Report</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('tolakButton').addEventListener('click', function() {
        alert('Rejected Report');
    });

    document.getElementById('tindakLanjutButton').addEventListener('click', function() {
        alert('Accepted Report');
    });
</script>

