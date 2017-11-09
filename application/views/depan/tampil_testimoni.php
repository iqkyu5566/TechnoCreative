<div class="col-md-4">
                <div class="panel panel-default">
                 <div class="text-center">
                    <h2>Testimoni</h2>
                </div>
                <div class="panel-body">
                    <?php foreach ($data_testimoni as $value) :
                    # code...
                     ?>
                     <div class="single_comments">
                        <img src="<?php echo base_url("assets/images/testimoni/$value[foto_testimoni]"); ?>" alt="">
                        <div class="entry-meta small muted">
                            <span><a href="#"><i class="fa fa-user"></i> <?php echo $value['nama_testimoni']; ?></a></span>
                            <span><a href="#"><i class="fa fa-tag"></i> <?php echo $value['email_testimoni']; ?></a></span>
                        </div>
                        <p><?php echo $value['pesan_testimoni']; ?></p>
                        <p><i class="fa fa-clock-o"></i> Posted on <?php echo $value['tanggal']; ?></p>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>