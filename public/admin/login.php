<?php

require_once("../../includes/initialise.php");

if($session->is_logged_in()) {
  redirect_to("index.php");
}

// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { // Form has been submitted.

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  $_SESSION['username'] = $username;
  
  // Check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);
	
	  if ($found_user) {
	    $session->login($found_user);
	    redirect_to("index.php");
	  } else {
	    // username/password combo was not found in the database
	    $message = "Username/password combination incorrect.";
	  }	  
	} else { // Form has not been submitted.
	  $username = "";
	  $password = "";
	}
?>
<?php $page = "green"; include_layout_template("admin_header.php");?>
   <div class="clearfix"></div>

   <section class="page_content">
	<div class="container innerContents">
      
        <h2 class="secondaryTitle">Photo Gallery</h2>

        <span class="image-bg">
        	<span style="background-image: url(../images/02_preview.jpg);" class="image-shop-scroll"></span>
        </span>

		<aside class="form_elements">
            <form class="form-horizontal" action="login.php" method="post">				
			  <div class="form-group">					   
				    <div class="col-sm-5">
				      <input type="text" name="username" placeholder="Username" class="form-control" required>
				    </div>					   
			  </div>
			   <div class="form-group">
				    <div class="col-sm-5">
				      <input type="password" name="password" placeholder="Password" class="form-control" required>
				    </div>					  
			  </div>				 
			  <button class="btn btn-average" name="submit" type="submit">login</button>
			</form>            	
        </aside>
      
    </div><!-- / END CONTAINER -->
  </section>	
 
<?php  include_layout_template("admin_footer.php");?>
   
<?php if(isset($database)) { $database->close_connection(); } ?>
