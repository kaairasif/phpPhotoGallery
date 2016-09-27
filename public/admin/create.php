<?php
 require_once("../../includes/initialise.php");
 if (!$session->is_logged_in()) { redirect_to("login.php"); }

?>
<?php  include_layout_template("admin_header.php");?>
    <div id="main">		        
        <?php
          if (isset($_POST['submit'])) { // Form has been submitted.
            
            $user = new User();

            $user->username = trim($_POST['username']);
            $user->password = trim($_POST['password']);
            $user->first_name = trim($_POST['first_name']);
            $user->last_name = trim($_POST['last_name']);
            $user->create();
            
            } else { // Form has not been submitted.
              echo "user not created";
              $username = "";
              $password = "";
              $first_name = "";
              $last_name = "";
            }
        ?>
		<br />
    <form action="create.php" method="post">
       <input type="text" name="username" placeholder="username"><br />
       <input type="password" name="password" placeholder="password"><br />
       <input type="text" name="first_name" placeholder="First name"><br />
       <input type="text" name="last_name" placeholder="last name"><br />
       <input type="submit" name="submit" value="submit"> 
    </form>
	</div>
<br />
<hr>
<a href="logout.php" >logout</a>


<?php  include_layout_template("admin_footer.php");?>	

	