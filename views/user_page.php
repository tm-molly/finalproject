<?php $result = $_REQUEST['UserInfo']; 
//var_dump($result);
?>

<!DOCTYPE html>
<html>
<head>

    <?php require_once 'assets/links.php'?>
<title>Hello, <?php  echo $result['name'];?></title>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
<?php require_once 'assets/boostrap.php'?>  
 <div class="nav-item">
        <form action="logout" method="post">
  <button type="submit" class="btn btn-primary btn_login">Log out</button>
</form>
      </div>
</nav>


<div class="container-fluid">
    <div class="row rowclass">
    <div class="col-sm-2 links_list"><div class="navigationBar">
           <ul>
             <li><a href="update_data">Profile</a></li>
             <li><a href="newfriends.php">New Friends</a></li>
             <li><a href="follows.php">Follows</a></li>
             <li><a href="followers.php">Followers</a></li>
            </ul>
        </div>
</div>

    <div class="col-sm-8">
<div class="photo">
	<img src="images/logo.png">

<form action="follow.php" method="post"><button type="submit" class="btn btn-primary btn_follow">Follow </button></form>

</div>

	<form action="tweet.php" method="post">
  <div class="form-group">
  
    <p>Write your post:  </p>

    <textarea class="form-control" aria-label="With textarea" name="tweet_post"></textarea>
   <!--  <input type="text" class="form-control" name="tweet_post"> -->
  </div>
  
  <div ><button type="submit" class="btn btn-primary btn_login">Twitted </button>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
   --></div>

</form>
<div>
  <table border="1">
  
<!-- <?php
if(isset($tweets)){
     

    foreach ($tweets as $row) {?>

<tr>
    <td><?php print $row['tweet']; ?></td>
    <td><?php print $row['post_date'];?></td>
      </tr>
  
<?php }}?>
 -->
</table>
</div>
    </div>

    <div class="col-sm-2 deleteclass">

    <p>You want delete your page?</p>
     <form action="delete.php" method="post">
  <div ><button type="submit" class="btn btn-primary btn_login">Delete</button>
  </div>
</form>
    </div>
  </div>
</div>
</body>
</html>