<div class="container">
    <br><br>
    <h2 class="text-center text-DARK">DETAIL REPORT</h2>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <form>
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="jenisinput" class="form-label">Jenis Pelecehan</label>
                        <input type="text" id="JenisInput" class="form-control" placeholder="Jenis Pelecehan">
                    </div>
                    <div class="mb-3">
                        <label for="BuktiInput" class="form-label">Bukti</label>
                        <input type="text" id="BuktiInput" class="form-control" placeholder="Video.mp4">
                    </div>
                    <div class="mb-3">
                        <label for="KeteranganInput" class="form-label">Keterangan</label>
                        <input type="text" id="KeteranganInput" class="form-control" placeholder="Blablabla">
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-lg-7">
            <div class="mb-3">
                <button type="button" class="btn btn-dark text-white btn-block" id="hubungiButton">Hubungi Mahasiswa</button>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-danger text-white btn-block" id="tolakButton">Tolak Laporan</button>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-success text-white btn-block" id="tindakLanjutButton">Tindak Lanjut</button>
            </div>
        </div>
    </div>
</div>

<script>

        document.getElementById('tolakButton').addEventListener('click', function() {
            alert('Laporan Ditolak');
        });

        document.getElementById('tindakLanjutButton').addEventListener('click', function() {
            alert('Laporan Ditindak Lanjuti');
        });
    </script>

