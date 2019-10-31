<!DOCTYPE html>
<html>
<head>

 <?php require_once 'assets/links.php'?>

    <title>Hello, Dear!</title>
</head>
<body>

 <!--  <?php        
                echo "User id:".$_SESSION["id"];
            
        ?>
 -->
<?php require_once 'assets/boostrap.php'?>  


 <div class="container">

<form action="addUserData" method="post">


<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Surname</label>
    <input type="text" name="surname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your surname">
  </div>
<div class="form-group">
    <select class="form-control" name="gender">
  <option>Male</option>
  <option>Female</option>
</select>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Country</label>
    <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>


  <button type="submit" class="btn btn-primary btn_login">About me </button>
  
</form>
</div>
</div>

</body>
</html>