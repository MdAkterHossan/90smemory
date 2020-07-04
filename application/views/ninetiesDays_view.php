
<link href="<?=base_url()?>assets/css/background2.css" rel="stylesheet" type="text/css">
  <!-- Call to Action Section -->
  <section class="page-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">৯০ এর দিনগুলি</h2>
      <!-- <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/"></a> -->
    </div>
  </section>
</body>
</html>


  <section class="page-section">
      <?php 
      $attributes = array('id' => 'frmninetiesDays','name' => 'frmninetiesDays');
      echo form_open_multipart('ninetiesDays',$attributes); ?> 
      <input type="hidden" name="hidEx1" id="hidEx1" />
      
       
    <div class="row" style="background-color:#b2beb5">
      <?php
      if($stories){
      ?><div class="container">
      <div class="col-lg-8 col-xs-12 col-md-8">
        <?php
        foreach ($stories as $row) {
        ?> <br> <br> <br>                             
        <p style="font-weight:bold; font-size:20px;"><?=$row->story_name?></p> 
          <p><?=$row->first_paragraph?></p>      
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