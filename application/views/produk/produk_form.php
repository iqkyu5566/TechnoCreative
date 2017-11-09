<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Produk <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Produk <?php echo form_error('nama_produk') ?></label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk" value="<?php echo $nama_produk; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kategori <?php echo form_error('id_kategori') ?></label>
            <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ket Produk <?php echo form_error('ket_produk') ?></label>
            <input type="text" class="form-control" name="ket_produk" id="ket_produk" placeholder="Ket Produk" value="<?php echo $ket_produk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Produk <?php echo form_error('foto_produk') ?></label>
            <input type="text" class="form-control" name="foto_produk" id="foto_produk" placeholder="Foto Produk" value="<?php echo $foto_produk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Harga Produk <?php echo form_error('harga_produk') ?></label>
            <input type="text" class="form-control" name="harga_produk" id="harga_produk" placeholder="Harga Produk" value="<?php echo $harga_produk; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('produk') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>