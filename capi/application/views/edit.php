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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Indovision Services Pvt. Ltd. </a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2 class="text-left">Users</h2>     
  <label>Select All:</label>
      <input type="checkbox" id="checkAll"/>
     
     <br><br>
            <table id="" class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Id </th>
        <th>Employee ID</th>
        <th>Ticket No.</th> 
        <th>Vechicle From Date</th>
        <th>Vechicle To Date</th>
        <th>City Where Requested</th>
        <th>Reporting Address</th>
        <th>Reporting Time</th>
        <th>Duty Type</th>
        <th>Estimate Usage</th> 
        <th>Special Instruction</th>
        <th>Status</th> 
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody class="checksContainer">
      <?php if(!empty($users)) { foreach($users as $user) { ?>
    <tr>
     <td><form method="post" action="<?php echo base_url('index.php/Tcontroller/edit'); ?>" > <input type="checkbox" name="checkboxes[]" value=" <?php echo $user['id']?>" class="checkboxes"> <?php echo $user['id']?></td>
     <!-- <div class="checkbox">
          <label><input type="checkbox" value=""></label> 
      </div> -->
      <td> 1234</td>
      <td> alpha</td>
    <!--  <td><?php echo $user['booker_name']?></td>
      <td><?php echo $user['booker_email']?></td>
      <td><?php echo $user['booker_contact']?></td>
      <td><?php echo $user['corporate_ac_no']?></td>
      <td><?php echo $user['vechile_booked']?></td>-->
      <td><?php echo $user['booked_from']?></td>
      <td><?php echo $user['booked_to']?></td>
      <td><?php echo $user['city_requested']?></td>
      <td><?php echo $user['reporting_address']?></td>
      <td><?php echo $user['reporting_time']?></td>
      <td><?php echo $user['duty_type']?></td>
      <td><?php echo $user['estimated_usage']?></td> 
      <td><?php echo $user['special_instruction']?></td>
      <td><label class="label label-default"><?php echo $user['status']?></label></td> 
      <td><?php echo $user['remark']?></td>

    </tr>
  <?php } } else {?>
  <tr>
    <td colspan="5">Records not found</td>
  </tr>
<?php } ?>
  </table>
  </div>
  </tbody>
    
<!-- <div class="form-group">
      <label class="control-label col-sm-2" >Status</label>
      <div class="col-sm-4">          
      </div>
    </div>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">--Select--
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Approve</a></li>
    <li><a href="#">Reject</a></li>
  </ul>
</div> -->

<!--<div class="form-group" >
  <label class="control-label col-sm-2">Status</label>
    <div class="col-sm-2 "> 
      <select class="form-control" name="status" id="status" >
        <option>--Select--</option>
        <option  value="Approve">Approve</option>
        <option value="Reject">Reject</option>     
      </select> 
      <?php echo form_error ('status');?> 
    </div>
</div>
<div>
</div>
<form action="" style="width: 50px; margin: auto">    
<div class="container">
  <button type="submit"class="btn btn-success">Submit</button>
</div>    
</form>

<form accept="" style=" width: 10px; margin: 10px;">
<div class="container" text="center" >
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item "><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>
</form>
 <form id="" action="" method="POST">
         <div class="row">
           <div class="col-lg-1">
             <label for="name">
               Action
             </label>
           </div>
           <div class="col-lg-2">
             <div class="form-group">
              <select class="form-control" name="status">
                <option>--Select</option>
                <option value="Approve">Approve</option>
                <option value="Reject">Reject</option>
              </select>
             </div>
           </div>
           <div class="col-lg-1">
             <label for="name">
               Remarks
             </label>
           </div>
           <div class="col-lg-2">
             <div class="form-group">
               <textarea class="form-control" name="remarks" placeholder="Enter Remarks"></textarea>
             </div>
           </div>
           <div class="col-lg-3">
             <div class="form-group">
               <input type="hidden" name="param" value="">
               <input type="hidden" name="action" value="nextstep">
               <input type="hidden" id="" name="r" />
               <a  name="submit" class="btn btn-success btnSubmit">Submit</a>
             </div>
           </div>
           <div class="col-lg-1"></div>
         </div>
        </form> -->


    <script>
        $(function(){
          $("#checkAll").change(function () {
            $(".checksContainer input:checkbox").prop('checked', $(this).prop("checked"));
          });
        });  
    </script>

  <!--  <script>
      $(function(){
          var allVals = [];
        $('.btnSubmit').click(function(){
              
          $("input:checkbox[name=checkboxes]:checked").each(function(){
                allVals.push($(this).val()); 
          });
         var reqID = allVals.join(", ");
          $('#reqID').val(reqID);  
          allVals = []; // flush array value, This is mandatory for a reason.
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
    </script> -->
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
   <!-- <form  method="post" class="form-horizontal" action="<?php echo base_url().'index.php/Tcontroller/edit';?>">
    <div class="form-group">
      <label class="control-label col-sm-1">Status</label>
      <div class="col-sm-2">         
        <select class="form-control" name="status" id="text" >
          <option>--Select--</option>
          <option value="Approve">Approve</option>
          <option value="Reject">Reject</option>     
        </select> 
        <?php echo form_error('status');?>
      </div>
    </div>
  div class="col-lg-1">
      <label for="name">
        Remarks
      </label>
    </div>
    <div class="col-lg-2">
      <div class="form-group">
        <textarea class="form-control" id="text" name="remark"  placeholder="Enter Remarks"></textarea>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2">Remark</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" required="true"id="text" name="remark">
        <?php echo form_error('remark');?>
      </div>
    </div>-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" value="send"  class="btn btn-success">Submit</button>
      </div>
    </div> 
 </form>
</table>
</div>
</div>
</body>
</html>