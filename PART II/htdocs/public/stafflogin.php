
<?php require_once('../private/initialize.php') ?>

<!-- If user has already logged in, redirect to index.php-->
<?php if(check_cookie()){redirect_to("index.php");}?>

<!-- Define Title -->
<?php $page_title = 'Staff Login'; ?>

<!-- Common header for all pages -->
<?php include(SHARED_PATH . '/header.php') ?>
<div class="row" >
      <div class="col-sm-4" ></div>
      <div class="col-sm-4 " >
      	<br>

      	<form action="staff-loging-in.php" method="POST">
		    <div class="form-group">
		      <label for="username">Username:</label>
		      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
		      <br>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
		      
		    </div>
		    <div class="text-center">
		    	<button type="submit" class="btn btn-primary">Login</button>
			</div>
		</form>
</div><div class="col-sm-4 " ></div>
<!-- Common footer for all pages -->
<?php include(SHARED_PATH . '/footer.php') ?>




