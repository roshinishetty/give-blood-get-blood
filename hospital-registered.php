<?php
require 'global_vars.php';
$con = connect_to_db();

#if(!isset($_COOKIE["username"]) || ($_COOKIE["username"]=='0'))
 #  {header("location:index.php");}
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Home</title>
      <link rel="stylesheet" href="home_css/home_components.css">
      <link rel="stylesheet" href="home_css/home_responsee.css">
      <link rel="stylesheet" href="home_css/home_template-style.css">
      <link rel="stylesheet" href="home_css/home_table.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>

   <body >
      <header>
         <nav>
            <div class="line">
               <div class="s-14 l-2">
                  <p class="logo"><strong>Home</p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li><a href="hospital-register.html">Account</a></li>
					 <li><a href="hospital-registered.php">Conduct a Blood Camp</a></li>
               <li><a href="" class="btn btn-link btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Add Blood Units</a></li>

					 <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Blood Units</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Blood Group</label>
          <input type="text" id="orangeForm-name" class="form-control validate">
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
		   <label data-error="wrong" data-success="right" for="orangeForm-email">No. of blood bags</label>
          <input type="email" id="orangeForm-email" class="form-control validate">
         
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="orangeForm-pass">Expiry Date</label>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Submit</button>
      </div>
    </div>
  </div>
</div>
 <li><a href="" class="btn btn-link btn-rounded mb-4" data-toggle="modal" data-target="#DeleteBloodUnits">Delete Blood Units</a></li>
 <div class="modal fade" id="DeleteBloodUnits" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Delete Blood Units</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Blood Group</label>
          <input type="text" id="orangeForm-name" class="form-control validate">
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
		   <label data-error="wrong" data-success="right" for="orangeForm-email">No. of blood bags</label>
          <input type="email" id="orangeForm-email" class="form-control validate">
         
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Submit</button>
      </div>
    </div>
  </div>
</div>
					      <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
	  <div class="start">

<table class="container">
   <thead>
      <tr>
         <th><h1>Blood group</h1></th>
         <th><h1>Available units</h1></th>
         <th><h1>Expiry Date</h1></th>
      </tr>
   </thead>
   <!-- <tbody>
      <?php
         #   $query = "select event.event_name as ename, event.event_description as des, event_cat.category_nam as cname, event.event_date as date, event.event_time as time, user.user_contact as contact from event inner join event_cat on event.event_id = event_cat.event_id inner join user on event.event_by = user.user_name";
     # $result = mysqli_query($con, $query);
     # while($row = mysqli_fetch_assoc($result))
      #{
       #  echo "<tr>";
        # echo "<td>".$row['ename']."</td>";
        # echo "<td>".$row['des']."</td>";
  
     # }
     # ?>
   </tbody> -->
</table>
	   
	  </div>
   </body>
</html>