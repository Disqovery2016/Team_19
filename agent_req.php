<html >
	<head>
        <title>NavBar</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        
    </head>

<body>
<?php include("header.php");?>
<?php include("agent_nav2.php");?>
<div class="container" style="background-color:#CCF" align="center">
	<p style="color:#C03"  align="center"><h5 style="font-weight:900"color:#C03" >Name Type Quantity Vender_ID</h5></p>
		<div class="row">
			<div class="col-sm-12">
<?php
	include('db_config.php');
	$q="select count(*) \"total\"  from product_reg";
	$ros=mysqli_query($db,$q);
	$row=(mysqli_fetch_array($ros));
	$q="SELECT * FROM product_reg ORDER BY id DESC";
	$ros=mysqli_query($db,$q);
	
	echo  '<tbody>';
	echo '<table>';
	
	while($row=mysqli_fetch_array($ros))
	{
		echo '<tr >';
		echo '<td align=center>' . $row['name'];
	    echo '<td align=center>'. $row['type'];
		echo '<td align=center>' . $row['quantity'];
		echo '<td align=center>' . $row['id'];
		echo '</tr>';
		
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	
   
?>

		</div>
       </div>
      </div>
     
	<div class="container" style="background-color:#808080">
    	<form method="post" class="form-horizontal" role="form">
        <h2 align="center" style="color:#C09">Order for farmer</h2>
        <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">Vender Id:</label>
                    <div class="col-sm-9">
                        <input name="id" type="text" id="id" placeholder="Vender Id for Purchase" class="form-control" >           
                    </div>
        </div>  
        
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Equipment Name:</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" id="name" placeholder="Enter Equipment Name" class="form-control">                 
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="uname" class="col-sm-3 control-label">Ordered User Name:</label>
                    <div class="col-sm-9">
                        <input name="uname" type="text" id="uname" placeholder="Name of ordered farmer" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="location" class="col-sm-3 control-label">Address of Farmer:</label>
                    <div class="col-sm-9">
                        <input name="location" type="text" id="location" placeholder="Location of equipment ordered Farmer" class="form-control">
                    </div>
                </div>
                
                
                    
               <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button name="register" type="submit" class="btn btn-primary btn-block">Place Order</button>
                    </div>
                </div>
           </form> <!-- /form -->
           
    	 	
	</div>
<?php include("footer.php");?>
</body>
</html>


<?php
 include('db_config.php');
if (isset($_POST['register']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$location=$_POST['location'];
	

	
	if($id==''){echo "<script>alert('Please enter vender id')</script>>";exit();}
	if($name==''){echo "<script>alert('Please entter Equipment name')</script>>";exit();}
	if($uname==''){echo "<script>alert('Please enter farmer name')</script>>";exit();}
	if($location==''){echo "<script>alert('Please enter address of farmer')</script>>";exit();}
	
	
	
else
{ 
$query="insert into order_a(id,name,uname,location)values('$id','$name','$uname','$location')";
		
	if(mysqli_query($db,$query))
	{
		echo "<script>alert('Order Place Sucessfully')</script>";
	}
	}	
} 
?>

