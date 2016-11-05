<html >
	<head>
        <title>Admin</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        
    </head>

<body>
<?php include("header.php");?>
<?php include("agent_nav2.php");?>
<h2 align="center"> Total farming equipments in our system </h2> 
<div class="container" style="background-color:#FCF" align="center">
	<p style="color:#C03"  align="center" <h2> Name Type Quantity Vender_ID</h2></p> <br/>
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
      
      
      <h2 align="center"> Queries from field agents </h2> 
<div class="container" style="background-color:#F9F" align="center">
	<p style="color:#C03"  align="center" </p> <br/>
		<div class="row">
			<div class="col-sm-12">
      
      <?php
	//include('db_config.php');
	$q="select count(*) \"total\"  from agent_q";
	$ros=mysqli_query($db,$q);
	$row=(mysqli_fetch_array($ros));
	$q="SELECT * FROM agent_q ORDER BY time DESC";
	$ros=mysqli_query($db,$q);
	
	echo  '<tbody>';
	echo '<table>';
	
	while($row=mysqli_fetch_array($ros))
	{
		echo '<tr >';
		echo '<td align=center>' . $row['name'];
	    echo '<td align=center>'. $row['email'];
		echo '<td align=center>' . $row['area'];
		echo '<td align=center>' . $row['complaint'];
		echo '</tr>';
		
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	
   
?>
      
				</div>
     	  </div>
      </div>

</body>


