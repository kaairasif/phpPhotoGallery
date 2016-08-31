<?php require_once("../../includes/initialise.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>

<?php 
// find all the photos
//$photos = Photograph::find_all();

 //1. The current page number ($current_page)
 $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

 //2. records per page($per_page)
 $per_page = 3;

 //3. total record count($total count) 
 $total_count = Photograph::count_all();

 // find all photos
 // use pagination instead
 //$photos = Photograph::find_all();

 $pagination = new Pagination($page, $per_page, $total_count);
 
 // instead of finding all records, just find the records
 // for this page

 $sql = "SELECT * FROM photographs ";
 $sql .= "LIMIT {$per_page} ";
 $sql .= "OFFSET {$pagination->offset()}";
 $photos = Photograph::find_by_sql($sql); 
 
 //need to add ?page=$page to all links we want to 
 //maintain the current page (or store $page in $session) 

?>

<?php include_layout_template('admin_header.php'); ?>
<section class="container inner_container">

    <?php 
       //  function recur($n) {        	
       //       if ($n===0) return 0;
       //       $e = $n%2 == 0 ? $n : 0;  
       //            	echo "n = ".$n."  e = ".$e."<br />" ;        
       //       return recur($n-1) + $e ;
       // }

       // echo recur(10);
       // echo "<br />";

       // function recursion($str) {      
       // 	if( strlen($str) === 0 ) return 0;
       // 	echo $str."<br />";
       // 	return recursion( substr( $str ,  0 ,  strlen($str)-1 ) );
       // }
       // echo recursion("Bangladesh");
    ?>

	<span class="pull-right">Logged in as <?php  if(isset($_SESSION['username'])){ echo "<b>" . $_SESSION['username'] . "</b>"; } ?></span>
    <h2 class="inner_page_title">Photograph</h2>
    <?php echo output_message($message); ?>
    <div class="pull-right">
    	 <?php 
	      	echo "Shwoing <strong>{$per_page} </strong> entries per page";
	     ?>
    </div>
	<table class="table table-bordered pGallery">
	  <tr>
	    <th>Image</th>
	    <th>Filename</th>
	    <th>Caption</th>
	    <th>Size</th>
	    <th>Type</th>
	    <th>Comments</th>
	    <th>Remove</th>
	  </tr>
	<?php foreach($photos as $photo) : ?> 
	  <tr>
		<td><a href="../<?php echo $photo->image_path(); ?>"><img src="../<?php echo $photo->image_path(); ?>" width="100" alt=""></a></td>
		<td><?php echo $photo->filename; ?></td>
		<td><?php echo $photo->caption; ?></td>
		<td><?php echo $photo->size_as_text(); ?></td>
		<td><?php echo $photo->type; ?></td>
		<td>
		 <a href="comments.php?id=<?php echo $photo->id; ?>">
		  <?php echo count($photo->comments());  ?>
		 </a> 
		</td>
		<td><a   data-toggle="tooltip" data-placement="top" title="want to delete this?" class="text-danger" href="delete_photo.php?id=<?php echo $photo->id ?>"><i  onclick="return confirm('Are you sure you want to delete this photograph?')" class="fa fa-trash" aria-hidden="true"></i>
            </a></td>
	  </tr>
	<?php endforeach?>
	</table>
	<br />
	<div class="row">
		<div class="col-md-6"><a class="btn btn-primary" href="photo_upload.php">Upload a new photograph</a></div>
		<div class="col-md-6"><a class="btn btn-danger pull-right" href="logout.php" >logout</a> </div>
	</div>	
     

    
    <!-- dynamic pagination for any kind of entries -->
	 <ul class="pagination"> 
      <?php if($pagination->total_pages() > 1 ) { ?>
      <li>
        <?php 
          if($pagination->has_previous_page()) {
            echo "<a href=\"list_photos.php?page=";
            echo $pagination->previous_page();
            echo "\"><span aria-hidden='true'>&laquo;</span> </a> &nbsp;";
           } 
         ?>
      </li> 
      <?php 
          for($i=1; $i <= $pagination->total_pages(); $i++) {
            if($i == $page){
              echo "<li class=\"active\"><a href='#'>{$i}</a></li>";
            }else {
              echo "<li> <a href=\"list_photos.php?page={$i}\">{$i}</a></li>";
            }          
           }
       ?>
      <li>
        <?php 
           if($pagination->has_next_page()) {
            echo "<a href=\"list_photos.php?page=";
            echo $pagination->next_page();
            echo "\"><span aria-hidden='true'>&raquo;</span> </a> ";
           }
         ?>
      </li>  
      <?php  } ?>    
    </ul> 

</section>

<?php include_layout_template('admin_footer.php'); ?>