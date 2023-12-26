<!-- application/views/modul-profile/bug_report_form.php -->

<div class="mycontainer">
    <div class="card">
        <div class="card-body">    
            <h2 class="text-center text-DARK">Report Bug</h2>
                <div class="row">
                    <div class="col-md-12">
                                    <!-- Tampilkan pesan sukses jika ada -->
                                    <?php if(isset($success_message)): ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= $success_message ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Tampilkan pesan kesalahan jika ada -->
                                    <?php if(isset($error_message)): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $error_message ?>
                                        </div>
                                    <?php endif; ?>

                                    <form action="<?= base_url('Settings/submit_bug') ?>" method="post">
                                        <div class="form-group">
                                            <label for="bug_subject">Subject:</label>
                                            <input type="text" class="form-control" name="bug_subject" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bug_description">Description:</label>
                                            <textarea class="form-control" name="bug_description" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Bug Report</button>
                                    </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
</div>


<!-- Tambahkan jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Tambahkan Script JavaScript -->
<script>
    $(document).ready(function() {
    });
</script>