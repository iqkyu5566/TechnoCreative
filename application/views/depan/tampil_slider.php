<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1" class=""></li>
            <li data-target="#main-slider" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <?php foreach ($data_slider as $key => $value) {
                     ?>
                     <div class="item <?php if ($key==0){echo "active"; } ?>">
                     <img src="<?php echo base_url("assets/images/slider/$value[gambar]"); ?>">
                  </div>
                  <?php } ?>
              </div>
          </div>
      </div><!--/.carousel-inner-->
  </div><!--/.carousel-->
</section>