
<div class="container">
  <section>
    <?php 
		$attributes = array('id' => 'frmaddStory','name' => 'frmaddStory');
		echo form_open_multipart('addStory',$attributes); ?>  
		<input type="hidden" name="hidEx1" id="hidEx1"/>
		
    <h1 style="text-align: center; font-weight:bold;">ADD STORY</h1>
		
    <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-10 col-md-offset-1">
				<div class="form-group input-group">
					<input class="form-control" placeholder="Story Name" name="textHeading" id="textHeading" type="text" >
          <textarea class="form-control" placeholder="1st Paragraph" name="firstParagraph" id="firstParagraph" type="text"></textarea>
				</div>
			</div> 
		</div>
		

    <div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
				<input type="button" onClick="validateText('frmaddStory',0,'addNintyStory')" class="btn btn-success form-control" value="Submit"/>
			</div>
		</div>
  </section>
  
  <section>
    

    <div class="row">
      <?php
      if($story){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>All Story</h1>
          </div>
          <div class="panel-body">
            <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Story Name</th>
                <th>Story</th>
                <th>Action</th>
                </tr>
              </thead>
                
              <tbody>
                <?php
                foreach ($story as $row) {
                ?>                             
                <tr>
                <td><?=$row->id?></td>  
                <td><?=$row->story_name?></td> 
                <td><?=$row->first_paragraph?></td>
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddStory', <?=$row->id?>, 'deleteStory')"><i class="fa fa-times-circle"></i></button>
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

<script type="text/javascript" src="<?=base_url()?>assets/tinymce/init-tinymce.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/tinymce/tinymce.min.js"></script>

<link href="<?=base_url()?>assets/tinymce/skins/content.min.css" rel="stylesheet">
<!-- <link href="<?=base_url()?>assets/tinymce/skins/content/dark/content.min.css" rel="stylesheet"> -->

<link href="<?=base_url()?>assets/tinymce/plugins/plugin.min.css" rel="stylesheet">




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






  <script src="https://cdn.tiny.cloud/1/8dysmcnrgow9neodw6lyfhtcaiswyyq0nmy30zhe8vuaut1c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>