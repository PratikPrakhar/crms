<!DOCTYPE html>
<html lang="">

<?php
session_start(); 
include('header.php');
include('dbconnect.php');
    if(isset($_SESSION['staffid'])){

    	if($_SESSION['role']=='Admin'){
    	
      header("Location: admin/");
    }
     elseif($_SESSION['role']=='CBI'){
    	
      header("Location: CBI/");
    }
    elseif($_SESSION['role']=='Jail-Superinintendent'){
    	
      header("Location: officer/");
    }
	elseif($_SESSION['role']=='Police'){
    	
		header("Location: police/");
	}
	elseif($_SESSION['role']=='Judge'){
    	
		header("Location: judge/");
	}
		
      
    }


 
?>
	




<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="panel panel-success" style="background-image: linear-gradient(to bottom, #201c4e 0, #958fd6 100%);">>
		<div class="panel-heading" style="background-image: linear-gradient(to right, #adebad 0, #196619 100%);">
			<h3 class="panel-title">Please Login Here</h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" action="logincheck.php" method="post" role="form" >
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="un" style="color:white;">Staff Number:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="username" id="un" placeholder="Enter Username" autofocus="" required="">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd" style="color:white;">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password" required="">
			    </div>
			  </div>
			 
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name="login" class="btn btn-default">Login
			      <span class="glyphicon glyphicon-check" ></span>
			      </button>
			    </div>
			  </div>

			  	 <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			     <?php
  		if(isset($_SESSION['error'])){
  			echo "
			
  				<span class='alert alert-danger text-center mt-10'>
			  		".$_SESSION['error']." 
			  	</span>
				
  			";
  			unset($_SESSION['error']);
  		}
  	?>
			    </div>
			  </div>


			</form>
		</div>
	</div>
</div>
<div class="col-md-3">


 
  	</div>




<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>



</body>
</html>