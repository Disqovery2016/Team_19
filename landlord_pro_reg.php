

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
<?php include("lord_nav.php");?>
<div class="container">
            <form method="post" class="form-horizontal" role="form">
                <h2>Equiment Registration Form</h2>
                <div class="form-group">
                    <label for="equiment name" class="col-sm-3 control-label">Equipment Name:</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" id="name" placeholder="Equipment Name" class="form-control" autofocus>
                      
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="equiment type" class="col-sm-3 control-label">Equipment Type:</label>
                    <div class="col-sm-9">
                        <input name="type" type="text" id="type" placeholder="Equipment Type" class="form-control">                 
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">Lander ID:</label>
                    <div class="col-sm-9">
                        <input name="id" type="text" id="id" placeholder="Lander Id" class="form-control">
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity of Equipment:</label>
                    <div class="col-sm-9">
                        <input name="quantity" type="text" id="quantity" placeholder="Number of Equipment" class="form-control">
                    </div>
                </div>
				
			
                
                <div class="form-group">
                    <label for="disc" class="col-sm-3 control-label">Equipment Description:</label>
                    <div class="col-sm-9">
                    <textarea id="disc" name="disc" rows="5" cols="57"  placeholder="Equipment Type"></textarea>
                        
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
	$type=$_POST['type'];
	$id=$_POST['id'];
	$quantity=$_POST['quantity'];
	$disc=$_POST['disc'];

	
	if($name==''){echo "<script>alert('Please enter Equipment Name')</script>>";exit();}
	if($type==''){echo "<script>alert('Please entter Eq. Type')</script>>";exit();}
	if($id==''){echo "<script>alert('Please enter Landload id')</script>>";exit();}
	if($quantity==''){echo "<script>alert('Please enter quantity')</script>>";exit();}
	if($disc==''){echo "<script>alert('Please enter description')</script>>";exit();}
	
	
else
{ 
$query="insert into product_reg(name,type,id,quantity,disc)values('$name','$type','$id','$quantity','$disc')";
		
	if(mysqli_query($db,$query))
	{
		echo "<script>alert('Registration Sucessfully')</script>";
	}
	}	
} 
?>






