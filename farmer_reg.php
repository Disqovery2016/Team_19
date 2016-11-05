<html>
<head>
  <title>FarmAssist</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <style type="text/css">
  *[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}
</style>
</head>

<body>

	<?php include("header.php");?>
    <?php include("farm_nav.php");?>
<div class="container">
            <form method="post" class="form-horizontal" role="form">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Full Name:</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" id="name" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, Middel Name</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="location" class="col-sm-3 control-label">Location:</label>
                    <div class="col-sm-9">
                        <input name="location" type="text" id="location" placeholder="Your location" class="form-control">                 
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="farm" class="col-sm-3 control-label">Farm Area:</label>
                    <div class="col-sm-9">
                        <input name="farm" type="text" id="farm" placeholder="Your farm area in Acres" class="form-control">                 
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="crop" class="col-sm-3 control-label">Crops Name:</label>
                    <div class="col-sm-9">
                        <input name="crop" type="text" id="crop" placeholder="Which crop do you have" class="form-control">
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="uid" class="col-sm-3 control-label">User Id:</label>
                    <div class="col-sm-9">
                        <input name="uid" type="text" id="uid" placeholder="Create Your UID" class="form-control">
                    </div>
                </div>
				
                
                <div class="form-group">
                    <label for="pwd" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-9">
                        <input name="pwd" type="password" id="pwd" placeholder="Create Your Password" class="form-control">
                    </div>
                </div>              
                
                
				
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>




<?php
 include('db_config.php');
if (isset($_POST['register']))
{
	$name=$_POST['name'];
	$location=$_POST['location'];
	$farm=$_POST['farm'];
	$crop=$_POST['crop'];
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];

	
	if($name==''){echo "<script>alert('Please enter Equipment Name')</script>>";exit();}
	if($location==''){echo "<script>alert('Please entter location')</script>>";exit();}
	if($farm==''){echo "<script>alert('Please enter farm area')</script>>";exit();}
	if($crop==''){echo "<script>alert('Please enter Crop name')</script>>";exit();}
	if($uid==''){echo "<script>alert('Please enter UID')</script>>";exit();}
	if($pwd==''){echo "<script>alert('Please enter password')</script>>";exit();}
	
	
else
{ 
$query="insert into farmer_reg(name,location,farm,crop,uid,pwd)values('$name','$location','$farm','$crop','$uid','$pwd')";
		
	if(mysqli_query($db,$query))
	{
		echo "<script>alert('Registration Sucessfully')</script>";
	}
	}	
} 
?>