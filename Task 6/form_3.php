<?php 
require_once "database.php";


if(isset($_POST['name']) && isset($_POST['password'])) {
  $name = $_POST['name'];
  $pass = $_POST['password'];
}

foreach($users_data as $user) {
 
  if($user["username"] != $name ) {
    echo "Wrong username or password";
    break;
  } if($user["pass"] != $pass){
    echo "Wrong password";
    break;
  }
  echo"done!";
  break;
}

?>

<!DOCTYPE html>
<html>
<fieldset>
<center>
<font size="+2">Personal Detail</font>
</center>
<form method="post">
<font size="+2">User name:</font><br>
  <input type="text" name="name" style="width: 400px; height:40px;"><br>
  <font size="+2">password:</font><br>
  <input type="text" name="password" style="width: 400px; height:40px;"><br><br>
  <input type="submit" style="background-color:purple;color:white;width:150px;height:40px;" value="Login">
  </form>

</fieldset>
</html>