
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
      <div class="col-xs-12 col-md-12">
        <?php
        foreach ($stories as $row) {
        ?>                             
        <p style="font-weight:bold; font-size:20px;"><?=$row->story_name?></p> 
        <p><?=$row->story_details?></p>
        <?php
        }
        ?>
        <?php
        }
        ?>
      </div>  
    </div> </div>
  </section>

</body>

</html>