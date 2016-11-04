<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>DYP School Of Engineering</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jq/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
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
<div class="container">
            <form method="post" class="form-horizontal" role="form">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name:</label>
                    <div class="col-sm-9">
                        <input name="full_name" type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, Middel Name</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                        <input name="email" type="email" id="email" placeholder="Enter Email" class="form-control">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="mobile" class="col-sm-3 control-label">Mobile:</label>
                    <div class="col-sm-9">
                        <input name="mobile" type="text" id="mobile" placeholder="Enter Mobile No" class="form-control">
                    </div>
                </div>
				<div class="form-group">
                    <label for="username" class="col-sm-3 control-label">iCard No:</label>
                    <div class="col-sm-9">
                        <input name="username" type="text" id="username" placeholder="ID Card no is your Login Id" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="passcode" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-9">
                        <input name="passcode" type="passcode" id="passcode" placeholder="passcode" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input name="dob" type="date" id="birthDate" class="form-control" placeholder="DD-MM-YYYY">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Branch" class="col-sm-3 control-label">Brach</label>
                    <div class="col-sm-9">
                        <select id="branch" class="form-control">
                            <option>Computer</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
				 <div class="form-group">
                    <label for="year" class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-9">
                        <select name="year" id="year" class="form-control">
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
							<option value="Third Year">Third Year</option>
							<option value="Final Year">Final Year</option>
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="semister" class="col-sm-3 control-label">Semister</label>
                    <div class="col-sm-9">
                        <select id="semister" class="form-control">
                            <option>First Semister</option>
							<option>Second Semister</option>
                        </select>
                    </div>
                </div>
				
				
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="gender" type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="gender" type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="gender" type="radio" id="uncknownRadio" value="Unknown">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
				
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
 include('db_config_student_reg.php');
if (isset($_POST['register']))
{
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$passcode=$_POST['passcode'];
	$dob=$_POST['dob'];
	/*$select = mysqli_real_escape_string($_POST['year']); */
	
	if($full_name==''){echo "<script>alert('Please enter full nae')</script>>";exit();}
	if($email==''){echo "<script>alert('Please enter emai')</script>>";exit();}
	if($mobile==''){echo "<script>alert('Please enter mobile')</script>>";exit();}
	if($username==''){echo "<script>alert('Please enter Your icar')</script>>";exit();}
	if($passcode==''){echo "<script>alert('Please enter password id')</script>>";exit();}
	if($dob==''){echo "<script>alert('Please enter dob')</script>>";exit();}
	/*if($branch==''){echo "<script>alert('Please enter Your branch')</script>>";exit();}
	
	if($semister==''){echo "<script>alert('Please enter semister')</script>>";exit();}
	if($gender==''){echo "<script>alert('Please enter Your gender')</script>>";exit();}*/
	
else
{ 
$query="insert into student(full_name,email,mobile,username,passcode,dob) values('$full_name','$email','$mobile','$username','$passcode','$dob')";
		
	if(mysqli_query($reg,$query))
	{
		echo "<script>alert('Registration Sucessfully')</script>";
	}
	}	
} 
?>