
<div class="container mb-5" style="margin-top: 6rem;">
    <h2 class="text-center text-DARK">DETAIL REPORT</h2>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <form>
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="NameInput" class="form-label">Name Student</label>
                        <input type="text" id="KeteranganInput" class="form-control" placeholder="farhanmulya" value="farhanmulya">
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
                        <input type="text" id="KeteranganInput" class="form-control" placeholder="Description" value="Blablabla">
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-lg-10 mt-3">
            <div class="mb-3">
                <a href="<?=base_url('Report/myreport')?>" class="btn btn-danger text-white w-25" id="backButton">Back</a>
            </div>
        </div>
    </div>
</div>

