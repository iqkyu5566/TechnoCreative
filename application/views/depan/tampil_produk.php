<div class="col-md-8">
                <div class="text-left">
                    <h2>PRODUK TECHNOCREATIVE</h2>
                </div>
                <?php foreach ($data_produk as $key => $value) {

                 ?>
                 <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                     <div class="harga">
                        <h5>
                            <?php
                            $angka = $value['harga_produk'];
                            $angka_format = number_format($angka,0,",",".");
                            ?>
                            <span class="price"><?php echo "Rp. ".$angka_format; ?></span>
                        </h5>
                    </div>
           
                    <img class="foto_produk" src="<?php echo base_url("./assets/images/produk/$value[foto_produk]"); ?>" width="100%" height="150" />

                    <a href="#"><h7><?php echo $value['nama_produk']; ?></h7></a>
                </div>
                <?php } ?>


          <div class="col-sm-8">
                    <ul class="pagination pagination-lg">
                     <?php 
                    for ($i=1; $i <= $jumlahhalaman; $i++)
                    { 
                        echo "<li><a href=".base_url("Home/index/$i").">$i</a></li>";
                    }
                    ?>                    
                </ul>
          </div>

            </div>