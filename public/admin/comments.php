<?php require_once("../../includes/initialise.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("login.php"); } ?>

<?php 
  if(empty($_GET['id'])) {
    $session->message("No photograph ID was provided.");
    redirect_to('index.php');
  }
  
  $photo = Photograph::find_by_id($_GET['id']);
  if(!$photo) {
    $session->message("The photo could not be located.");
    redirect_to('index.php');
  }
  $comments = $photo->comments();

?>

<?php include_layout_template('admin_header.php'); ?>
<section class="container inner_container">
	<a href="list_photos.php">&laquo; Back</a><br /><br />
	
	<?php echo output_message($message); ?>

	<a href="../<?php echo $photo->image_path(); ?>"><img src="../<?php echo $photo->image_path(); ?>" width="100" alt=""></a>
	<h2>Comments on <?php echo $photo->filename; ?></h2>

	<div id="comments">
		 <?php foreach ($comments as $comment): ?>
	     <div class="comment">
	     	<div class="author">
	     		<?php echo htmlentities($comment->author); ?> wrote:
	     	</div>
	     	<div class="body">
	     		<?php echo strip_tags($comment->body, '<strong><em><p>') ?>
	     	</div>
	     	<div class="meta-info">
	            <?php echo datetime_to_text($comment->created); ?>       		
	     	</div>
	     	<div class="actions">
	     		<a class="text-danger" href="delete_comment.php?id=<?php echo $comment->id; ?>">Delete Comment</a>
	     	</div>
	     </div>

		 <?php endforeach; ?>	
		 <?php if(empty($comments)) { echo "No Comments"; } ?>
	</div>
</section>

<?php include_layout_template('admin_footer.php'); ?>