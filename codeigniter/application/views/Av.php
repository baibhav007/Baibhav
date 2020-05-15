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
	<div class="container">
  <h2> Form</h2>
  <hr>
  <form  method="post" class="form-horizontal" action="<?php echo base_url().'index.php/Ac/Av';?>">
    <div class="form-group">
      <label class="control-label col-sm-2" >Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  required="true" id="text"  name="name">
        <?php //echo form_error('name');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" required="true" id="email" name="email">
        <?php //echo form_error('email');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Mobile</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" required="true"id="text" name="mobile">
        <?php //echo form_error('mobile');?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Course.</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" required="true" id="text" name="course">
        <?php //echo form_error('course');?>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
