<?php
  require_once('includes/load.php');
  //Check what level user has permission to view this page
   page_require_level(1);
?>
<?php
  $delete_id = delete_by_id('user_groups',(int)$_GET['id']);
  if($delete_id){
      $session->msg("s","Group has been deleted.");
      redirect('group.php');
  } else {
      $session->msg("d","Group deletion failed try again.");
      redirect('group.php');
  }
?>
