<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<title>Expert Suggestion</title>
	</head>

<body>

<?php include("header.php");?>
<?php include("lord_nav.php");?>
	<div class="container">
            <form method="post" class="form-horizontal" role="form">
                <h2>Get expertize advise here</h2>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Your Name:</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" id="name" placeholder="Your Name" class="form-control" autofocus>
                      
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="mob" class="col-sm-3 control-label">Mobile Number:</label>
                    <div class="col-sm-9">
                        <input name="mob" type="number" id="mob" placeholder="Your Mobile Number" class="form-control">                 
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="area" class="col-sm-3 control-label">Total Farm Area:</label>
                    <div class="col-sm-9">
                        <input name="area" type="text" id="area" placeholder="Enter your Farm Area" class="form-control">                 
                    </div>
                </div>
                
              <div class="form-group">
     			 <label class="control-label col-sm-2" for="question">Question:</label>
     			 <div class="col-sm-10">
       			 <textarea type="text" name="question" class="form-control" rows="5" id="question" placeholder="Ask about your farming problem"></textarea>
     			 </div>
    		</div>
            
             <div class="form-group">
      			<div class="col-sm-offset-2 col-sm-10">
        		<button type="submit" name="submit" class="btn btn-primary" id="submit">Submit</button>
      		</div>
    	</div>
            <a href="tel:777-500-700-19">777-50-700-19</a>
            
      </form>



</body>
</html>