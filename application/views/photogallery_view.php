<!DOCTYPE html>
<html lang="en">

<head>
  <title>নাইনটিজ মেমরি</title>
</head>
<body id="page-top">

<link href="<?=base_url()?>assets/css/background2.css" rel="stylesheet" type="text/css">
  <!-- About Section -->
  <section class="page-section bg-info" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">আবার যদি শৈশব ফিরে পেতাম</h2>
         <!--  <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
        </div>
      </div>
    </div>
  </section>
  
  <section class="page-section">
    <?php 
    $attributes = array('id' => 'frmviewgallery','name' => 'frmviewgallery');
    echo form_open_multipart('photogallery',$attributes); ?> 
    <input type="hidden" name="hidEx1" id="hidEx1" />
    <div style="background-color:#2E4053 ">
      <div class="container">
        
        <div class="row">
          
          <?php
          if($photo){
          ?>
          <?php
          foreach ($photo as $row) {
          ?>
        
          <div class=" card col-xs-12 col-md-3  col-sm-12">                             
            <img src="<?=base_url().$row->gallery_img?>" alt="..." class="img-thumbnail"> 
            
            <div class="card-body">
              <p class="card-text"><?=$row->gallery_desc?></p> 
            </div>

          </div>
          <?php
          }
          ?>
          <?php
          }
          ?>
        </div>
      </div>  
    </div>
  </section>

</body>

</html>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="<?=base_url()?>assets/js/scripts.js"></script>