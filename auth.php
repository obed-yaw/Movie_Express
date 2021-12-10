<?php include_once('includes/load.php'); ?>
<?php
$req_fields = array('username','password' );

$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

if(empty($errors)){
  $user_id = authenticate($username, $password);
  if($user_id){
    
     $session->login($user_id);
    //Sign in time
     updateLastLogIn($user_id);
     $session->msg("s", "Welcome to Movie Express");
     redirect('home.php',false);

  } else {
    $session->msg("d", "Username/Password incorrect. Try again");
    redirect('index.php',false);
  }

} else {
   $session->msg("d", $errors);
   redirect('index.php',false);
}

?>