<?php require_once("../includes/initialise.php"); ?> 

<?php 
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

<?php include('layouts/header.php'); ?>
<section class="container inner_container">
 

  <?php foreach($photos as $photo): ?>
  <div style="float:left; margin-right:20px">
  	 <a href="photo.php?id=<?php echo $photo->id; ?>">
  	 	<img src="<?php echo $photo->image_path(); ?>" width="200">
  	 </a>
  	 <p><?php $photo->caption; ?></p>
  </div>

  <?php endforeach; ?>
  <div class="clearfix"></div>

    <ul class="pagination"> 
      <?php if($pagination->total_pages() > 1 ) { ?>
      <li>
        <?php 
          if($pagination->has_previous_page()) {
            echo "<a href=\"index.php?page=";
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
              echo "<li> <a href=\"index.php?page={$i}\">{$i}</a></li>";
            }          
           }
      ?>
      <li>
        <?php 
           if($pagination->has_next_page()) {
            echo "<a href=\"index.php?page=";
            echo $pagination->next_page();
            echo "\"><span aria-hidden='true'>&raquo;</span> </a> ";
           }
         ?>
      </li>  
      <?php  } ?>    
    </ul> 

  <a href="admin" title="login">Login</a>

  <?php
       /*if($pagination->total_pages() > 1 ) {

         if($pagination->has_previous_page()) {
          echo "<a href=\"index.php?page=";
          echo $pagination->previous_page();
          echo "\">&laquo; Previous </a> &nbsp;";
         }
         
         for($i=1; $i <= $pagination->total_pages(); $i++) {
          if($i == $page){
            echo "&nbsp; <span class=\"selected\">{$i}</span> &nbsp;";
          }else {
            echo " &nbsp; <a href=\"index.php?page={$i}\">{$i}</a> &nbsp;";
          }          
         }

         if($pagination->has_next_page()) {
          echo "<a href=\"index.php?page=";
          echo $pagination->next_page();
          echo "\">&nbsp; Next &raquo; </a> ";
         }


       }
*/
    ?>


</section>

	
    
<?php include('layouts/footer.php'); ?>