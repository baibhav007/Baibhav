<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h2 class="text-left">Users</h2>     
 <!-- <label>Select All:</label>
   <input type="checkbox" id="checkAll"/> -->
     
  <!--<script type="text/javascript">
    function do_this(){
      var checckboxes = document.getElementByName('id[]');
      var button = document.getElementById('toggle');
      if (button.value == 'select'){
        for (var i in checkboxes){
          checkboxes[i].checked = 'FALSE';
        }
        button.value = 'Deselect';
      }else{
        for (var i in checkboxes){
          checckboxes[i].checked = '';
        }
        button.value = 'select';
      }
     }
  </script> -->
     
     <br><br>
        <div class="">
            <table  class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Id </th>
        <th>Name</th>
        <th>Email</th> 
        <th>Mobile</th>
        <th>Course</th>
        <th>Status</th> 
        <th>Remarks</th>
      </tr>
    </thead>

    <tbody class="checksContainer">
      <?php if(!empty($users)) { foreach($users as $user) { ?>
    <tr>
      <td><form method="post" action="<?php echo base_url('index.php/Ac/edit'); ?>" > <input type="checkbox" name="checkboxes[]" value=" <?php echo $user['id']?>" class="checkboxes"> <?php echo $user['id']?></td>
           <!-- <div class="checkbox">
          <label><input type="checkbox" value=""></label> 
      </div> -->
      <td><?php echo $user['name']?></td>
      <td><?php echo $user['email']?></td>
      <td><?php echo $user['mobile']?></td>
      <td><?php echo $user['course']?></td>
      <td><?php echo $user['status']?></td>
      <td><label class="label label-default"><?php echo $user['remark']?></label></td>

    </tr>
  <?php } } else {?>
  <tr>
    <td colspan="5">Records not found</td>
  </tr>
<?php } ?>
  </table>
  </div>
  </tbody>
   <script>
        $(function(){
          $("#checkAll").change(function () {
            $(".checksContainer input:checkbox").prop('checked', $(this).prop("checked"));
          });
        });  
    </script>

    <script>
      $(function(){
          var allVals = [];
        $('.btnSubmit').click(function(){
              
        $("input:checkbox[name=checkboxes]:checked").each(function(){
                allVals.push($(this).val()); 
          });
        var reqID = allVals.join(", ");
        $('#reqID').val(reqID);  
        allVals = []; 
        if(reqID !=""){
         if(confirm('Are you sure you want to Proceed?')){
               $('#actionForm').submit();
             }
            else
               return false;
            }
            else{
            alert('Please select any record');
           return false;
            }
          });
              
        });
    </script> 
<?php echo form_open ('welcome/message'); ?>
    <div class="form-group">
      <label class="control-label col-sm-1">Status</label>
      <div class="col-sm-2">         
        <select class="form-control" name="status" id="text" >
          <option>--Select--</option>
          <option value="Approve">Approve</option>
          <option value="Reject">Reject</option>     
        </select> 
        <?php //echo form_submit(['name'=> 'submit' , 'value' => 'Send' , 'class'=>'login']);?>
      </div>
    </div>
    <div class="col-lg-1">
      <label for="name">
        Remarks
      </label>
    </div>
    <div class="col-lg-2">
      <div class="form-group">
        <textarea class="form-control" id="text" name="remark"  placeholder="Enter Remarks"></textarea>
      </div>
       <div>
        <?php //echo form_submit (['name'=> 'submit' , 'value' => 'Send' , 'class'=>'login']);?>
      </div>
      <div>
        <?php //echo form_error ('message' , '<div class ="text-danger">' , '</div>');?>
      </div>
      <div>
        <?php// echo form_error ('t_id' , '<div class ="text-danger">' , '</div>');?>
      </div>
    </div>
   
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  name="submit"  value="Send" class="btn btn-success">Submit</button>
      </div>
   </div>
</form>
</table>
</div>
</div>
</body>
</html>