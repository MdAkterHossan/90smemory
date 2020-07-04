<div class="container">
  
  <section>
    <?php 
    $attributes = array('id' => 'frmaddWebsiteContent','name' => 'frmaddWebsiteContent');
    echo form_open_multipart('addWebsiteContent',$attributes); ?>  
    <input type="hidden" name="hidEx1" id="hidEx1"/>
    
    <h1 style="text-align: center; font-weight:bold;">ADD CONTENT</h1>
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <label>Add Section Top:</label>
        <div class="form-group input-group">
          <textarea class="form-control" placeholder="Top Heading" name="webTopHeadingOne" id="webTopHeadingOne" type="text"></textarea>
          <textarea class="form-control" placeholder="Top Heading Two" name="webTopHeadingTwo" id="webTopHeadingTwo" type="text"></textarea>
        </div>
      </div> 
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <label>Add Second Section:</label>
        <div class="form-group input-group">
          <textarea class="form-control" placeholder="Mid Section" name="midSectionOne" id="midSectionOne" type="text"></textarea>
          <textarea class="form-control" placeholder="Mid Section Two" name="midSectionTwo" id="midSectionTwo" type="text"></textarea>
        </div>
      </div>                
    </div>  
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <input type="button" onClick="validateHeadingTop('frmaddWebsiteContent',0,'addTopHeading')" class="btn btn-info form-control" value="Add Top Heading"/>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <input type="button" onClick="validateMidHeading('frmaddWebsiteContent',0,'addMidHeading')" class="btn btn-success form-control" value="Add Mid Heading"/>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <label>Add Contact Section:</label>
        <div class="form-group input-group">
          <textarea class="form-control" placeholder="Contact Heading" name="contactHeadingOne" id="contactHeadingOne" type="text"></textarea>
          <textarea class="form-control" placeholder="Contact Second Heading" name="contactHeadingTwo" id="contactHeadingTwo" type="text"></textarea>
          <textarea class="form-control" placeholder="Contact Number" name="contactNumber" id="contactNumber" type="text"></textarea>
          <textarea class="form-control" placeholder="Contact Email" name="contactEmail" id="contactEmail" type="text"></textarea>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <label>Add Footer</label>
        <div class="form-group input-group">
          <input class="form-control" placeholder="Copyright" name="copyrightinfo" id="copyrightinfo" type="text" >
          <input class="form-control" placeholder="Developer Info" name="developerInfo" id="developerInfo" type="text" >
          <input class="form-control" placeholder="Developer Contact" name="developerContact" id="developerContact" type="text" >

        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <input type="button" onClick="validateContact('frmaddWebsiteContent',0,'addContact')" class="btn btn-info form-control" value="Add Contact"/>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-10 col-md-offset-1">
        <input type="button" onClick="validateFooterInfo('frmaddWebsiteContent',0,'addFooter')" class="btn btn-success form-control" value="Add Footer"/>
      </div>
    </div>
  </section>
     
  <section>
    
    <div class="row">
      <?php
      if($topHeading){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>Top Heading</h1>
          </div>
          <div class="panel-body">
            <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Top Heading One</th>
                <th>Top Heading Two</th>
                <th>Action</th>
                </tr>
              </thead>
                
              <tbody>
                <?php
                foreach ($topHeading as $row) {
                ?>                             
                <tr>
                <td><?=$row->webtopHeading_id?></td>  
                <td><?=$row->top_heading_one?></td>
                <td><?=$row->top_heading_two?></td> 
                <td>
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddWebsiteContent', <?=$row->webtopHeading_id?>, 'deleteTopHeading')"><i class="fa fa-times-circle"></i></button>

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
  <section>
    
    <div class="row">
      <?php
      if($midSection){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>Mid Heading</h1>
          </div>
          <div class="panel-body">
            <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Mid Heading One</th>
                <th>Mid Heading Two</th>
                <th>Action</th>
                </tr>
              </thead>
                
              <tbody>
                <?php
                foreach ($midSection as $row) {
                ?>                             
                <tr>
                <td><?=$row->web_mid_content_id?></td>  
                <td><?=$row->mid_heading_one?></td>
                <td><?=$row->mid_heading_two?></td> 
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddWebsiteContent', <?=$row->web_mid_content_id?>, 'deleteMidHeading')"><i class="fa fa-times-circle"></i></button>
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
  
  <section>
    <div class="row">
      <?php
      if($contactInfo){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>Contact Info</h1>
          </div>
          <div class="panel-body">
            <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Heading One</th>
                <th>Heading Two</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
                </tr>
              </thead>
                
              <tbody>
                <?php
                foreach ($contactInfo as $row) {
                ?>                             
                <tr>
                <td><?=$row->contact_id?></td>  
                <td><?=$row->contact_heading_one?></td>
                <td><?=$row->contact_heading_two?></td>
                <td><?=$row->contact_number?></td>
                <td><?=$row->contact_email?></td>
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddWebsiteContent', <?=$row->contact_id?>, 'deleteContact')"><i class="fa fa-times-circle"></i></button>
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
   <section>
    <div class="row">
      <?php
      if($footerInfo){
      ?>
      <div class="col-xs-12 col-md-12 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title text-center"><i class=""></i>Footer</h1>
          </div>
          <div class="panel-body">
            <table class="col-xs-12 col-md-12  table-responsive table table-striped table-bordered table-hover" id="dataTables-example">
              <thead class="bg-success">
                <tr>
                <th>ID</th>
                <th>Heading One</th>
                <th>Heading Two</th>
                <th>Contact</th>
                <th>Action</th>
                </tr>
              </thead>
                
              <tbody>
                <?php
                foreach ($footerInfo as $row) {
                ?>                             
                <tr>
                <td><?=$row->footer_id?></td>  
                <td><?=$row->copyright_info?></td>
                <td><?=$row->developer_info?></td>
                <td><?=$row->developer_contact?></td>
                <td><!-- <button type="button" class="btn btn-success btn-circle" onClick="processObject('frmaddpkg','<?=$row->c_pkg_id?>','editPackage')"><i class="fa fa-edit"></i></button> -->
                    <button type="button" class="btn btn-danger btn-circle" onClick="deleteObj('frmaddWebsiteContent', <?=$row->footer_id?>, 'deleteFooter')"><i class="fa fa-times-circle"></i></button>
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