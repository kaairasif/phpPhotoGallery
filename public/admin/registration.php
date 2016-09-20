<?php

require_once("../../includes/initialise.php");

if($session->is_logged_in()) {
  redirect_to("index.php");
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

        <?php 
        // Remember to give your form's submit tag a name="submit" attribute!
		if (isset($_POST['submit'])) { // Form has been submitted.
			
			$user = new User();
			
			$user->first_name = trim($_POST['first_name']);
			$user->last_name  = trim($_POST['last_name']);
			$user->username   = trim($_POST['username']);
			//$email      = trim($_POST['email']);
			$user->password   = trim($_POST['password']);
			$user->create();
			} else { // Form has not been submitted.
				$first_name = "";
				$last_name = "";
				$username  = "";
				//$email     = "";
				$password  = "";
			}

        ?> 
		<aside class="form_elements">
            <form class="form-horizontal" action="registration.php" method="post">	
               <div class="form-group">					   
				    <div class="col-sm-5">
				      <input type="text" name="first_name" placeholder="first_name" class="form-control" required>
				    </div>					   
			  </div>
			  <div class="form-group">					   
				    <div class="col-sm-5">
				      <input type="text" name="last_name" placeholder="last_name" class="form-control" required>
				    </div>					   
			  </div>
			  <div class="form-group">					   
				    <div class="col-sm-5">
				      <input type="text" name="username" placeholder="Username" class="form-control" required>
				    </div>					   
			  </div>			
				<!--<div class="form-group">					   
				    <div class="col-sm-5">
				      <input type="email" name="email" placeholder="email" class="form-control" required>
				    </div>					   
			  	</div> -->
			  <div class="form-group">
				    <div class="col-sm-5">
				      <input type="password" name="password" placeholder="Password" class="form-control" required>
				    </div>					  
			  </div>				 
			  <button class="btn btn-average" name="submit" type="submit">Create</button>
			</form><br>   
			<p>If you are already member ? <br/>
			<a class="btn btn-primary" href="login.php">login</a> </p>        	
        </aside>
      
    </div><!-- / END CONTAINER -->
  </section>	
 
<?php  include_layout_template("admin_footer.php");?>
   
<?php if(isset($database)) { $database->close_connection(); } ?>
