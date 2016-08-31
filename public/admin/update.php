<?php
 require_once("../../includes/initialise.php");
 if (!$session->is_logged_in()) { redirect_to("login.php"); }

?>
<?php  include_layout_template("admin_header.php");?>
    <div id="main">
        <?php
            $user = User::find_by_id(5);
            $user->password = "1";
            $user->save();
        ?>
		    <br />
	</div>
<br />
<hr>
<a href="logout.php" >logout</a>


<?php  include_layout_template("admin_footer.php");?>	

	