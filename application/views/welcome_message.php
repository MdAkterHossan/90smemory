<?php 
$attributes = array('id' => 'frmwelcome','name' => 'frmwelcome');
echo form_open_multipart('Welcome',$attributes); ?> 
<input type="hidden" name="hidEx1" id="hidEx1" />

<!DOCTYPE html>
<html lang="en">
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <?php
          if($topHeadingData){
          ?>
          <?php
          foreach ($topHeadingData as $row) {
          ?> 
          <h1 class="text-uppercase text-white font-weight-bold"><?=$row->top_heading_one?></h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5"><?=$row->top_heading_two?></p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about"></a>
        </div>
        <?php
        }
        ?>
        <?php
        }
        ?>
      </div>
    </div>
  </header>
  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <?php
          if($MidHeadingData){
          ?>
          <?php
          foreach ($MidHeadingData as $row) {
          ?> 
          <h2 class="text-white mt-0"><?=$row->mid_heading_one?></h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4"><?=$row->mid_heading_two?></p>

          <?php
          }
          ?>
          <?php
          }
          ?>
         <!--  <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
        </div>
      </div>
    </div>
  </section>
    <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <?php
          if($contactInfo){
          ?>
          <?php
          foreach ($contactInfo as $row) {
          ?> 
          <h2 class="mt-0"><?=$row->contact_heading_one?></h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5"><?=$row->contact_heading_two?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div><?=$row->contact_number?></div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com"><?=$row->contact_email?></a>
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