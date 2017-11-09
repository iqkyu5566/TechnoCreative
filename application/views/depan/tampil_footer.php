<footer class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-justify">
                    <img id="_logo7" itemprop="logo" src="<?php echo base_url("assets/images/$data_owner[logo_perusahaan]") ?>" alt="kursus php" title="kursus web programming">
                    <p><?php echo $data_owner['ket_perusahaan']; ?></p>                <br>
                </div>
                <div class="col-md-3">
                    <h2 class="footer-title">Syafrudin Ode</h2>
                    <div class="single_comments">
                        <img src="<?php echo base_url("assets/images/yogi.png"); ?>" width="70">
                        <p><?php echo $data_owner['owner1']; ?></p> <br>
                    </div>              <br>
                </div>

                <div class="col-md-3">
                    <h2 class="footer-title">Ilham Julian Effendi</h2>
                    <div class="single_comments">
                        <img src="<?php echo base_url("assets/images/ilham.png"); ?>" width="70">
                        <p><?php echo $data_owner['owner2']; ?></p> <br>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>