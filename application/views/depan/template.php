<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechnoCreative</title>
    <link rel="shortcut icon" href="<?php echo base_url("./icon.png"); ?>" type="image/x-icon" />
    <link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css") ?>">
    <link href="<?php echo base_url("assets/css/prettyPhoto.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/style.css") ?>" rel="stylesheet" />  
</head>
<body>
    <header>        
      <!-- menu navigasi -->
      <?php include 'tampil_menu.php'; ?>
      <!-- menu navigasi -->
  </header>

  <?php echo $home; ?>

  <!-- footer -->
  <?php include 'tampil_footer.php'; ?>
  <!-- footer -->

  <footer>
    <div class="footer">
        <div class="container">
            <div class="social-icon">
                <div class="col-md-4">
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>   
                </div>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <div class="copyright">
                &copy; CV.TECHNO CREATIVE.
                    <div class="credits">
                        <a href="">Design by: Team Techno Creative</a>
                    </div>
                </div>
            </div>                      
        </div>

        <div class="pull-right">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>      
    </div>
</footer>

<script src="<?php echo base_url("assets/js/jquery-2.1.1.min.js") ?>"></script>  
<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.prettyPhoto.js") ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.isotope.min.js") ?>"></script>  
<script src="<?php echo base_url("assets/js/wow.min.js") ?>"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url("assets/js/functions.js") ?>"></script>

<script>
    $('.carousel').carousel({
        interval: 6000 //changes the speed
    })
</script>

</body>
</html>