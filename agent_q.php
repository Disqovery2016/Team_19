<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<title>Field Agent Query</title>
	</head>
    
    
<body>

	<?php include("header.php");?>
    <?php include("agent_nav.php");?>

	<div class="container bg-danger">
		<div class="row">
     	    <div class="col-sm-2"></div>       
             <div class="col-sm-8">
    <h2 align="center" style="color:#F00;">Field Agent Query</h2>
    
    
  <form class="form-horizontal" method="POST">
   	<div class="form-group">
      <label class="control-label col-sm-2" for="name">Agent Name:</label>
     	 <div class="col-sm-10">
         <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
     	 </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="area">Area:</label>
      <div class="col-sm-10">
        <input type="text" name="area" class="form-control" id="area" placeholder="Enter Your Field Area">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="complaint">Query</label>
      <div class="col-sm-10">
        <textarea type="text" name="complaint" class="form-control" rows="5" id="complaint" placeholder="Enter your query"></textarea>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary" id="submit">Submit</button>
      </div>
    </div>
</form>

                
             </div>
      		<div class="col-sm-2"></div>
      	</div>
	</div>


<br />
</body>
<?php include("footer.php");?>
</html>



<?php
include('db_config.php');


if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];	
	$area=$_POST['area'];
	$complaint=$_POST['complaint'];
	
	if($name==''){echo "<script>alert('Please enter Name')</script>>";exit();}
	if($email==''){echo "<script>alert('Please enter E-Mail id')</script>>";exit();}	
	if($area==''){echo "<script>alert('Please enter Your Message')</script>>";exit();}
	if($complaint==''){echo "<script>alert('Please enter Name')</script>>";exit();}
	
else
{
	$query="insert into agent_q(name,email,area,complaint) values('$name','$email','$area','$complaint')";
		
	if(mysqli_query($db,$query))
	{
		echo "<script>alert('Query send Sucessfully ')</script>";
	}
	}	
} 
?>
