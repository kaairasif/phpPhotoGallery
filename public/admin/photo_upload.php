<?php
require_once('../../includes/initialise.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>


<?php
	$max_file_size = 1048576; // expressed in bytes
	                          //     10240 =  10 KB
	                          //    102400 = 100 KB
	                          //   1048576 =   1 MB
	                          //  10485760 =  10 MB

	$message = "";

	if(isset($_POST['submit'])) {
		$photo = new Photograph();
        $photo->caption = $_POST['caption'];
        $photo->attach_file($_FILES['file_upload']);
        if($photo->save()){
           //success 
           $session->message("<strong>{$photo->filename}</strong> uploaded successfully");
           redirect_to("list_photos.php");
        } else {
        	//failure
           $message = join("<br />", $photo->errors);
        }
	}
?>


<?php include_layout_template('admin_header.php'); ?>

<section class="container inner_container">
	  <h2 class="inner_page_title">Photo Upload</h2>
	  <?php echo output_message($message); ?>


	   <!-- <div class="content">
			<div class="box">
				<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
				<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
			</div>
	    </div> -->


	  <form action="photo_upload.php" class="uoloadPhotograph" enctype="multipart/form-data" method="POST">
	    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
	    <!-- <p><input type="file" name="file_upload" /></p> -->

        <input type="file" name="file_upload" id="file-2" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
		<label for="file-2"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>

	    <div class="form-row">
		    <p><input class="col-sm-6 mt20 col-md-6" type="text" name="caption" placeholder="Caption." required/></p>
		    <div class="clearfix"></div>
		    <button type="submit" class="btn btn-info mt20" name="submit"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
	    </div>
	  </form>
	  <a href="list_photos.php" class="btn btn-warning mt20">List Photos</a>  <br /><br />


      <div class="slickSlider">      	
		  <div>
		    <div class="c_content">
		    	Carousel content goes here
		    </div>
		  	<img src="../images/Home_carousel.png" alt="">		  	
		  </div>
		  <div>
		    <div class="c_content">
		    	Carousel content goes here
		    </div>
		  	<img src="../images/costomer-page.jpg" alt="">
		  </div>
		  	
      </div> 

</section>

<?php include_layout_template('admin_footer.php'); ?>
