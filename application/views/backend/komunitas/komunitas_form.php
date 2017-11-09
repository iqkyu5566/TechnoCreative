</div>
<!-- Main content -->
        <section class='content'>
          <div class='row'>
          <div class='col-xs-9'>

          <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'><strong>TAMBAH DATA KOMUNITAS</strong></h3>

<!-- start: DATE/TIME PICKER PANEL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-external-link-square"></i>
                                    DATA KOMUNITAS
                                    <div class="panel-tools">
                                        <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                        </a>
                                        <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <a class="btn btn-xs btn-link panel-refresh" href="#">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <a class="btn btn-xs btn-link panel-expand" href="#">
                                            <i class="fa fa-resize-full"></i>
                                        </a>
                                        <a class="btn btn-xs btn-link panel-close" href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <form action="<?php echo $action; ?>" method="post">   
                                    <p>
                                        <?php echo form_error('judul_komunitas') ?>
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="clip-user"></i> </span>
                                        <input type="text" class="form-control" name="judul_komunitas" id="judul_komunitas" placeholder="Judul Komunitas" value="<?php echo $judul_komunitas; ?>" />
                                    </div>
                                    <p>
                                        <?php echo form_error('gambar_komunitas') ?>
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="clip-globe"></i> </span>
                                        <input type="text" class="form-control" name="gambar_komunitas" id="gambar_komunitas" placeholder="Gambar Komunitas" value="<?php echo $gambar_komunitas; ?>" />
                                    </div>
                                    <p>
                                        <?php form_error('isi_komunitas') ?>
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="clip-stack-empty"></i> </span>
                                        <textarea class="form-control" rows="3" name="isi_komunitas" id="isi_komunitas" placeholder="Isi Komunitas"><?php echo $isi_komunitas; ?></textarea>
                                    </div>
                                    
                                    <p>
                                        <?php echo form_error('url_komunitas')?>
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="clip-foursquare"></i> </span>
                                       <input type="text" class="form-control" name="url_komunitas" id="url_komunitas" placeholder="Url Komunitas" value="<?php echo $url_komunitas; ?>" />
                                    </div>
                                    
                                    <p>
                                        <?php echo form_error('id_kategori') ?>
                                    </p>
                                    <div class="input-group">
                                       <span class="input-group-addon"> <i class="clip-radio-checked"></i> </span>
                                       <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" />
                                    </div>

                                    <p>
                                        <?php echo form_error('status_komunitas') ?>
                                    </p>
                                    <div class="input-group">
                                       <span class="input-group-addon"> <i class="clip-radio-checked"></i> </span>
                                       <input type="text" class="form-control" name="status_komunitas" id="status_komunitas" placeholder="Status Komunitas" value="<?php echo $status_komunitas; ?>" />
                                    </div>

                                    <p>
                                        <?php echo form_error('tanggal') ?>
                                    </p>
                                    <div class="input-group">
                                       <span class="input-group-addon"> <i class="clip-radio-checked"></i> </span>
                                       <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
                                    </div>

                                    <p>
                                        <?php echo form_error('waktu') ?>
                                    </p>
                                    <div class="input-group">
                                       <span class="input-group-addon"> <i class="clip-radio-checked"></i> </span>
                                       <input type="text" class="form-control" name="waktu" id="waktu" placeholder="Waktu" value="<?php echo $waktu; ?>" />
                                    </div>
                                </div>
                                    
                            </div>

                           <input type="hidden" name="id_komunitas" value="<?php echo $id_komunitas; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('adminweb/komunitas') ?>" class="btn btn-default">Cancel</a>
                            
                            <!-- end: DATE/TIME PICKER PANEL -->
                           
                    </form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->