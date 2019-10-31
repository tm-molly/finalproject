<!DOCTYPE html>
<html>
<head>
<?php require_once 'assets/links.php'?>
    <title>Log in</title>
</head>
<body>

<?php require_once 'assets/boostrap.php'?>

<div class="container">
<div class="card text-left card_style">

  <div class="card-body">
    <h5 class="card-title">Log in to Twitter	</h5>
  
    <form action="log_in" method="post">
      <div class="form-group">
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div >
      <button type="submit" class="btn btn-primary btn_login">Log in </button>
    	<a href="register_newuser" class="btn btn-primary btn_login">Registration</a>
      </div>
    </form>

  </div>
  
  <div class="card-footer text-muted">
   <p>New to Twitter? Sign up now »</p>
   <p>Already using Twitter via text message? Activate your account »</p>
  </div>

</div>
</div>

</body>
</html>