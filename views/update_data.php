<?php $result = $_REQUEST['UserInfo']; 
//var_dump($result);
?>

<!DOCTYPE html>
<html>
<head>

<?php require_once 'assets/links.php'?>

    <title>Hello, <?php echo $result['name']; ?></title>
</head>
<body>

 <!--  <?php        
                echo "User id:".$_SESSION["id"];
            
        ?>
 -->
<?php require_once 'assets/boostrap.php'?>  

 <div class="container">

<form action="updateUserData" method="post">


<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['name'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Surname</label>
    <input type="text" name="surname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['surname'];?>">
  </div>
<div class="form-group">
       <select class="form-control" name="gender">
  <option <?php if($result['gender'] == 'Male'){ echo 'selected';} ?>>Male</option>
  <option <?php if($result['gender'] == 'Female'){ echo 'selected';} ?>>Female</option>
</select>

  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Country</label>
    <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['country'];?>">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['city'];?>">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary btn_login">About me </button>
  
</form>
</div>


</body>
</html>