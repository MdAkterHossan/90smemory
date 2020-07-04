<!DOCTYPE html>
<html lang="en">
<head>
<title>নাইনটিজ মেমরি</title>
</head>
<body id="page-top">

   <link href="<?=base_url()?>assets/css/background2.css" rel="stylesheet" type="text/css">
  <!-- Call to Action Section -->
  <section class="page-section bg-success text-white">
    <div class="container text-center">
      <h2 class="mb-4">৯০ এর ছড়া ও কবিতা</h2>
      <!-- <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/"></a> -->
    </div>
  </section>
</body>
</html>
<section class="page-section">
  


    <?php 
    $attributes = array('id' => 'frmninetiesRhyme','name' => 'frmninetiesRhyme');
    echo form_open_multipart('ninetiesRhyme',$attributes); ?> 
    <input type="hidden" name="hidEx1" id="hidEx1" />
    
      <div  style="background-color:#b2beb5 "><br>
        <div class="container">
      <div class="row">

        <?php
        if($rhymes){
        ?>
        <?php
        foreach ($rhymes as $row) {
        ?>
        <div class="col-lg-4 col-md-4 col-sm-12"> <hr><br>                            
          <p style="font-weight:bold; font-size:20px;"><?=$row->rhyme_name?></p> 
          <p><a style="color:green">লেখক :</a><?=$row->rhyme_writerName?></p>
          <p><?=$row->rhyme_full?></p><br> 
        </div> 
        <?php
        }
        ?>
        <?php
        }
        ?> 
      </div> 
    </div>  </div>
  </section>
<embed src="<?=base_url()?>assets/music/song2.mp3" width="180" height="90" loop="false" autostart="false" hidden="true" />


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