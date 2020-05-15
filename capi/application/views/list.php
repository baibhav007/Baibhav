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
  <h2>Users</h2>     
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
      <!--  <th>Employee ID</th>
        <th>Ticket No.</th> -->
        <th>Vechicle From Date</th>
        <th>Vechicle To Date</th>
        <th>city Where Requested</th>
        <th>Reporting Address</th>
        <th>Reporting Time</th>
        <th>Duty Type</th>
        <th>Estimate Usage</th> 
        <th>Special Instruction</th>
      <!--  <th>Status</th> -->
      </tr>
    </thead>
    <?php if(!empty($users)) { foreach($users as $user) { ?>
    <tr>
      <td> <?php echo $user['id']?>
       <!-- <div class="checkbox">
          <label><input type="checkbox" value=""></label> 
        </div> -->
      </td>
   <!--   <td> 1234</td>
      <td> alpha</td>
       <td><?php echo $user['booker_name']?></td>
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
  <!--    <td> yes</td> -->

    </tr>
  <?php } } else {?>
  <tr>
    <td colspan="5">Records not found</td>
  </tr>
<?php } ?>
  </table>
</div>
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
  <label class="control-label col-sm-1">Status</label>
    <div class="col-sm-1"> 
      <select class="form-control">
        <option>--Select--</option>
        <option>Approve</option>
        <option>Reject</option>     
      </select>  
    </div>
</div>

<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
       
      </div>
</div> 

<br>
<br>
<br>
<br>
<br>
<br>


<div class="container">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item "><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>-->
<p>*Note :- A mail will go to admin/Hr/vendor about booking details</p>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Go To Super Admin</button>
       
      </div>
</div>
</body>
</html>