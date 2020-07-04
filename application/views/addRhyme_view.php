
<div class="container">
  <section>
    <?php 
		$attributes = array('id' => 'frmaddRhyme','name' => 'frmaddRhyme');
		echo form_open_multipart('addRhyme',$attributes); ?>  
		<input type="hidden" name="hidEx1" id="hidEx1"/>
		<h1 style="text-align: center; font-weight:bold;" >ADD RHYME</h1>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-10 col-md-offset-1">
        <div class="form-group input-group">
          <input class="form-control" placeholder="Rhyme Name" name="rhymeHeading" id="rhymeHeading" type="text" > 
          <input class="form-control" placeholder="Writer Name" name="rhymeWriter" id="rhymeWriter" type="text" >
           <textarea class="form-control" placeholder="Full Rhyme" name="rhymefull" id="rhymefull" type="text"></textarea>
        </div>
      </div> 
    </div>
		  

		

    <div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-12 col-md-offset-1">
				<input type="button" onClick="validateAddRhyme('frmaddRhyme',0,'addNinetiesRhyme')" class="btn btn-success form-control" value="Submit"/>
			</div>
				<!--    <div class="col-xs-12 col-md-6">
				<input type="button" value="Search" class="btn btn-danger form-control" onClick="formsubmit('frmregister','searchAdmins')"/>
				</div> -->
		</div>
  </section>
  <section>
    <div class="row">
      <?php
      if($rhyme){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>All Rhyme</h1>
          </div>
          <div class="panel-body">
            <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Rhyme Name</th>
                <th>Writer Name</th>
                <th>Full Rhyme</th>                
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($rhyme as $row) {
                ?>                             
                <tr>
                <td><?=$row->rhyme_id?></td>  
                <td><?=$row->rhyme_name?></td> 
                <td><?=$row->rhyme_writerName?></td>
                <td><?=$row->rhyme_full?></td>
<!--                 <td><?=$row->rhyme_1st_line?></td>
                <td><?=$row->rhyme_2nd_line?></td>
                <td><?=$row->rhyme_3rd_line?></td>  
                <td><?=$row->rhyme_4th_line?></td> 
                <td><?=$row->rhyme_5th_line?></td>
                <td><?=$row->rhyme_6th_line?></td>
                <td><?=$row->rhyme_7th_line?></td>  
                <td><?=$row->rhyme_8th_line?></td> 
                <td><?=$row->rhyme_9th_line?></td>
                <td><?=$row->rhyme_10th_line?></td>
                
                <td><?=$row->rhyme_11th_line?></td>  
                <td><?=$row->rhyme_12th_line?></td> 
                <td><?=$row->rhyme_13th_line?></td>
                <td><?=$row->rhyme_14th_line?></td>
                <td><?=$row->rhyme_15th_line?></td>
                <td><?=$row->rhyme_16th_line?></td>
                <td><?=$row->rhyme_17th_line?></td>
                <td><?=$row->rhyme_18th_line?></td>  
                <td><?=$row->rhyme_19th_line?></td> 
                <td><?=$row->rhyme_20th_line?></td>
                
                <td><?=$row->rhyme_21st_line?></td>
                <td><?=$row->rhyme_22nd_line?></td>  
                <td><?=$row->rhyme_23rd_line?></td> 
                <td><?=$row->rhyme_24th_line?></td>
                <td><?=$row->rhyme_10th_line?></td>
                <td><?=$row->rhyme_25th_line?></td>  
                <td><?=$row->rhyme_26th_line?></td> 
                <td><?=$row->rhyme_27th_line?></td>
                <td><?=$row->rhyme_28th_line?></td>
                <td><?=$row->rhyme_29th_line?></td>
                <td><?=$row->rhyme_30th_line?></td> -->
                <td>  <!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                   <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddRhyme', <?=$row->rhyme_id?>, 'deleteRhyme')"><i class="fa fa-times-circle"></i></button> 
            <!--       <input type="button" value="UPDATE STATUS" class="btn btn-success" onClick="processObject('frmaddpkg',<?=$row->c_pkg_id?>,'updateStatus')"/> --> 
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