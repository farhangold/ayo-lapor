<style>
    .custom-card {
        height: 200px; 
    }

    .border-edge {
        border-radius: 100; 
    }
</style>

<div class="mycontainer">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center text-dark">NEWS</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($data as $key => $value) { ?>
            <div class="col-md-4" style="margin-top: 20px">
                <div class="card mx-auto custom-card border-20 border-edge">
                    <div class="card-body text-center">
                        <h3 class="news-title"><?= $value->title ?></h3>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-12">
                                <a href="<?= base_url('Berita/show/'.$value->id) ?>" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-12 text-left">
                                <p><?= "$value->created_by - $value->created_at" ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.detail-button').click(function(){
                window.location.href = '<?= base_url("report/detailreport2") ?>';
            });
        });
    </script>