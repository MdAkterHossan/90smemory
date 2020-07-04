

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Nineties Memory Admin Panel</a>
        </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <br><br><br><br><br><br><br><br>
            <li><a href="<?=base_url()?>index.php/addStory"><i class="fa fa-fw fa fa-book"></i>Add Story</a></li>
            <li><a href="<?=base_url()?>index.php/addPhotoGallery"><i class="fa fa-fw fa fa-image"></i>Add Photo</a></li>

             <li><a href="<?=base_url()?>index.php/addRhyme"><i class="fa fa-fw fa fa-book"></i>Add Rhyme</a></li>
             <li><a href="<?=base_url()?>index.php/addAdmin"><i class="fa fa-fw fa fa-users"></i>Add Admin</a></li>
             <li><a href="<?=base_url()?>index.php/addWebsiteContent"><i class="fa fa-fw fa fa-gear"></i>Website Content</a></li>
             <li><a href="<?=base_url()?>index.php/login/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
                 
        </ul>
    </div>
    <!-- /.navbar-collapse -->
    </nav>













<div class="container">
  <section>
    <?php 
    $attributes = array('id' => 'frmaddAdmin','name' => 'frmaddAdmin');
    echo form_open_multipart('addAdmin',$attributes); ?>  
    <input type="hidden" name="hidEx1" id="hidEx1"/>
    
    <h1 style="text-align: center; font-weight:bold;">ADD ADMIN</h1>
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <div class="form-group input-group">
          <input class="form-control" placeholder="Name" name="adminName" id="adminName" type="text" >
          <textarea class="form-control" placeholder="Address" name="adminAddress" id="adminAddress" type="text"></textarea>
          <input class="form-control" placeholder="Joining Date" name="regDate" id="regDate" type="date" >
          <input class="form-control" placeholder="Phone Number" name="adminPhone" id="adminPhone" type="text" >
          <input class="form-control" placeholder="Password" name="adminPass" id="adminPass" type="password" >
          
         </div>
      </div> 
    </div>
    

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <input type="button" onClick="validateAdmin('frmaddAdmin',0,'addAdmin')" class="btn btn-success form-control" value="Submit"/>
      </div>
    </div>
  </section>
  
  <section>
    

    <div class="row">
      <?php
      if($allAdmins){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>All Admins</h1>
          </div>
          <div class="panel-body">
            <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Admin Name</th>
                <th>Address</th>
                <th>REg Date</th>
                <th>Phone</th>
                <th>Action</th>
                </tr>
              </thead>
                
              <tbody>
                <?php
                foreach ($allAdmins as $row) {
                ?>                             
                <tr>
                <td><?=$row->usr_id?></td>  
                <td><?=$row->usr_name?></td> 
                <td><?=$row->usr_add?></td>
                <td><?=$row->usr_reg_date?></td>
                <td><?=$row->usr_phone?></td>
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddAdmin', <?=$row->usr_id?>, 'deleteAdmin')"><i class="fa fa-times-circle"></i></button>
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