<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h2>Taxi Form</h2>
  <hr>
  <form  method="post" class="form-horizontal" action="<?php echo base_url().'index.php/Tcontroller/create';?>">
    <div class="form-group">
      <label class="control-label col-sm-2" >Booker/s Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  required="true" id="text"  name="booker_name">
        <?php echo form_error('booker_name');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Booker/s Email</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" required="true" id="email" name="booker_email">
        <?php echo form_error('booker_email');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Booker/s Contact</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" required="true"id="text" name="booker_contact">
        <?php echo form_error('booker_contact');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Corporate A/C No.</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" required="true" id="text" name="corporate_ac_no">
        <?php echo form_error('corporate_ac_no');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Vehicle To Be Booked</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="text" required="true" name="vechile_booked">
        <?php echo form_error('vechile_booked');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Vehicle Required from (Date)</label>
      <div class="col-sm-4">          
        <input type="Date" class="form-control" id="Date" required="true" name="booked_from">
        <?php echo form_error('booked_from');?>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Vehicle Required to(Date)</label>
      <div class="col-sm-4">          
        <input type="Date" class="form-control" id="Date" required="true" name="booked_to">
        <?php echo form_error('booked_to');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2"> City where service Requested</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="text" required="true"  name="city_requested">
        <?php echo form_error('city_requested');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Reporting Address</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="text"  required="true" name="reporting_address">
        <?php echo form_error('reporting_address');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Reporting Time</label>
      <div class="col-sm-4">          
        <input type="time" class="form-control" id="time"  required="true" name="reporting_time">
        <?php echo form_error('reporting_time');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Duty type</label>
      <div class="col-sm-4"> 
        <select class="form-control" name="duty_type" id="text">
          <option>--Select--</option>
          <option value="Local">Local</option>
          <option value="Outstation">Outstation</option>     
        </select>  
        <?php echo form_error('duty_type');?> 
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Estimated Usage</label>
      <div class="col-sm-4">         
        <select class="form-control" name="estimated_usage" id="text" >
          <option>--Select--</option>
          <option value="Half Day">Half Day</option>
          <option value="Full Day">Full Day</option>
          <option value="Transfer">Transfer</option>     
        </select> 
        <?php echo form_error('estimated_usage');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Special Instruction</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="text"  required="true" name="special_instruction">
        <?php echo form_error('special_instruction');?>
      </div>
    </div>
    <br> 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>