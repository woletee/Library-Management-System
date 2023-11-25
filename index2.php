<?php 
include
('logs.php'); // Includes Login Script





if(isset($_SESSION['login_user'])){
header("location:Home.html ");
}
?>

<!DOCTYPE html>

<html>
<body background="lib.jpg" class="login" style="color:blue;background-color:pink;text-align: center">
<div >
<section class="">
<form name="form1" action="" method="POST" style="color:green;width:510px;height:500px;background-color:Aqua;margin-left:420px;margin-top:70px">
<img src="b1.jpg"  style="width:120px;height:120px" >
<h1 style="font-family:">Library Managemnt System</h1>
<div>
<input type="text" name="username" placeholder="User name" required="" style="width:200px;height:40px;border-width:2px;color:black;font-weight:bold"><br><br>
</div>
<div>
<input type="password" name="password" placeholder="password" required="" style="width:200px;height:40px;border-width:2px;color:black;font-weight:bold"><br><br>
</div
<div>
<a href="Adminoper.html"><input type="submit" type="submit" name="submit" value="login " style="width:120px;height:43px; color:black;border-width:2px;fontsize:50px;background-color:yellow;margin-left:130px;font-size:  155.5%;font-weight:900;border-width:2px;margin-left:80px"  ></a>

</p>
<a href="Home.html"><input type="button" value="Back" name="submit2"  style="width:120px;height:43px ;font-size:  155.5%;font-weight:900;border-width:2px;background-color:yellow;margin-left:80px "/></a>

</div>
<div>
</div>
</form>
</section>
</div>
</body>
</html>
