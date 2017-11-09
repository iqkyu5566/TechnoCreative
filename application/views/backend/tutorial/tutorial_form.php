
        <h2 style="margin-top:0px">Tutorial <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Judul Tutorial <?php echo form_error('judul_tutorial') ?></label>
            <input type="text" class="form-control" name="judul_tutorial" id="judul_tutorial" placeholder="Judul Tutorial" value="<?php echo $judul_tutorial; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gambar Tutorial <?php echo form_error('gambar_tutorial') ?></label>
            <input type="text" class="form-control" name="gambar_tutorial" id="gambar_tutorial" placeholder="Gambar Tutorial" value="<?php echo $gambar_tutorial; ?>" />
        </div>
	    <div class="form-group">
            <label for="isi_tutorial">Isi Tutorial <?php echo form_error('isi_tutorial') ?></label>
            <textarea class="form-control" rows="3" name="isi_tutorial" id="isi_tutorial" placeholder="Isi Tutorial"><?php echo $isi_tutorial; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Url Tutorial <?php echo form_error('url_tutorial') ?></label>
            <input type="text" class="form-control" name="url_tutorial" id="url_tutorial" placeholder="Url Tutorial" value="<?php echo $url_tutorial; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kategori <?php echo form_error('id_kategori') ?></label>
            <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tutorial') ?>" class="btn btn-default">Cancel</a>
	</form>
   