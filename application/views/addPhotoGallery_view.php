<div class="container">
<section>
  <?php 
  $attributes = array('id' => 'frmaddPhotoGallery','name' => 'frmaddPhotoGallery');
  echo form_open_multipart('addPhotoGallery',$attributes); ?>  
  <input type="hidden" name="hidEx1" id="hidEx1"/>
  
  <h1 class="heading">ADD Photo</h1>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-10 col-md-offset-1">
      <input type="file" name="galleryimages" id="galleryimages"  data-buttonName="btn-primary"/> 
        <textarea class="form-control" placeholder="Description" name="gallerydes" id="gallerydes" type="text"></textarea>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-10 col-md-offset-1">
      <input type="button" onClick="validateaddGallery('frmaddPhotoGallery',0,'addPhotoGallery')" class="btn btn-success form-control" value="Submit" />
    </div>
    <!--<div class="col-xs-12 col-md-6">
    <input type="button" value="Search" class="btn btn-danger form-control" onClick="formsubmit('frmregister','searchAdmins')"/>
    </div> -->
  </div>
</section>
  
<section>
  <div class="row">
    <?php
    if($gallery){
    ?>
  
    <div class="col-lg-12 col-md-12 col-sm-12 col-md-offset-1">
      <div class="panel panel-default">
        
        <div class="panel-heading">
          <h1 class="panel-title text-center"><i class=""></i>All Photo</h1>
        </div>
        
        <div class="panel-body">
          <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
            <thead class="bg-success">
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
              foreach ($gallery as $row) {
              ?>                             
              <tr>
                <td><?=$row->image_id?></td>  
                <td><img src="<?=base_url().$row->gallery_img?>" alt="..." style="height:50px" class="img-thumbnail"></td> 
                <td><?=$row->gallery_desc?></td>
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddPhotoGallery', <?=$row->image_id?>, 'deleteImage')"><i class="fa fa-times-circle"></i></button>
                <!--    <input type="button" value="UPDATE STATUS" class="btn btn-success" onClick="processObject('frmaddpkg',<?=$row->c_pkg_id?>,'updateStatus')"/> -->
                </td> 
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
              <?php
              }
              ?>
      </div>
    </div>
  </div>
</section>
</div>





<?=$message?>

</form>
</body>
</html>

<script type="text/javascript">
$('.form_datetime').datetimepicker({
//language:  'fr',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
forceParse: 0,
showMeridian: 1
});
$('.form_date').datetimepicker({
// language:  'fr',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 2,
minView: 2,
forceParse: 0
});
$('.form_time').datetimepicker({
// language:  'fr',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1,
startView: 1,
minView: 0,
maxView: 1,
forceParse: 0
});
</script>
<script type="text/javascript">
//    $('input[type=file]').bootstrapFileInput();
$(":file").filestyle({buttonName: "btn-primary"});
//$(":file").filestyle({input: false});
// for data table
$(document).ready(function() {
$('#dataTables-example').dataTable();
});
</script> 

  <link href="<?=base_url()?>assets/adminPanelcss/css/style.css" rel="stylesheet" type="text/css">




<!-- Modal -->
<div class="modal fade alertModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Alert</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div id="alert"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal" autofocus>Close</button>
</div>
</div>
</div>
</div>