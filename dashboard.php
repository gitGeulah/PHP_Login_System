<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

  Page::ForceLogin();
  
  $User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
    <h2>Welcome: <?php echo $User->email; ?> </h2>
    <p>Dashboard here; you are signed in as user: <?php echo $User->user_id; ?></p>
      <div class="uk-margin">
			        <button class="uk-button uk-button-default" onclick="window.location.href='php_login_course/logout.php';" style="margin-top:5%;">Logout</button>
      </div>
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
