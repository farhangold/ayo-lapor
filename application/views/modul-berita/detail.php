
<div class="container mb-5" style="margin-top: 6rem;">
    <h2 class="text-center text-DARK">DETAIL NEWS</h2>
    <div class="row justify-content-center">
        <div class="col-lg-10">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input readonly type="text" id="title" class="form-control" placeholder="Title" value="<?= $data->title ?>" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descriptipn</label>
                        <textarea disabled class="form-control form-control-user summernote" id="description" name="description" placeholder="Description" ><?= $data->description ?></textarea>
                    </div>
                 
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    </script>