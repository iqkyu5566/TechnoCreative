<div class="artikel">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
              <div class="panel panel-default">
                 <div class="text-center">
                    <h2><a href="#"> Tutorial</a></h2>
                </div>
                <div class="panel-body">
                    <?php foreach ($data_tutorial as $key => $value) { ?>

                       <div class="single_comments">
                        <img src="<?php echo base_url("assets/images/blog/$value[gambar_tutorial]"); ?>" width="100" alt="">
                        <a href="#"><p><?php echo $value['judul_tutorial']; ?></p></a>
                        <p><i class="fa fa-clock-o"></i> Posted on <?php echo $value['tanggal']; ?> <i class="fa fa-tag"></i> <?php echo $value['id_kategori']; ?></p>
                    </div>

                    <?php } ?>

                </div>
            </div>

        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
             <div class="text-center">
                <h2><a href=".">Codeigniter</a></h2>
            </div>
            <div class="panel-body">
                    <?php foreach ($data_tutorial as $key => $value) { ?>

                       <div class="single_comments">
                        <img src="<?php echo base_url("assets/images/blog/$value[gambar_tutorial]"); ?>" width="100" alt="">
                        <a href="#"><p><?php echo $value['judul_tutorial']; ?></p></a>
                        <p><i class="fa fa-clock-o"></i> Posted on <?php echo $value['tanggal']; ?> <i class="fa fa-tag"></i> <?php echo $value['id_kategori']; ?></p>
                    </div>

                    <?php } ?>

                </div>
        </div>
    </div>

    <div class="col-md-4">
      <div class="panel panel-default">
         <div class="text-center">
            <h2><a href=".">Dari Komunitas</a></h2>
        </div>
        <div class="panel-body">
                    <?php foreach ($data_tutorial as $key => $value) { ?>

                       <div class="single_comments">
                        <img src="<?php echo base_url("assets/images/blog/$value[gambar_tutorial]"); ?>" width="100" alt="">
                        <a href="#"><p><?php echo $value['judul_tutorial']; ?></p></a>
                        <p><i class="fa fa-clock-o"></i> Posted on <?php echo $value['tanggal']; ?> <i class="fa fa-tag"></i> <?php echo $value['id_kategori']; ?></p>
                    </div>

                    <?php } ?>

                </div>
    </div>
</div>
</div>
</div>
</div>