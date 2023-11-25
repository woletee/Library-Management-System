<?php


if(isset($_POST['submit']))
{	
    include "studclass.php";
	
	$fname=$_POST['fname'];
	$lname =$_POST['lname'];
	$pass1 =$_POST['pass1'];
	$username1=$_POST['username1'];

	$obj=new student();
	
	$obj->insert_stud($fname, $lname,$pass1,$username1);
}

?>
<body  background="lib.jpg"   style="color:blue;background-color:pink;text-align: center;">
<head>

<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<section>
<form name="form2" action="" method="POST" style="color:green;width:510px;height:600px;background-color:Aqua;margin-left:420px;margin-top:30px">

<img src="user.jpg"  style="width:120px;height:120px" ><h2>User Registration Form</h2>
<div>
<input type="text" placeholder="First Name" name="fname" required=""  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Last Name" name="lname" required=""  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<input type="password" placeholder="password" name="pass1" required=""  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>

<div>
<input type="text" placeholder="user name" name="username1" required=""  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<a href="Home.html"><button  class="btn btn-warning" type="submit" value="Register" name="submit" required="" style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px">Register</button></a>

<a href="Home.html"><button class="btn btn-warning" type="button" value="Back" name="submit2"  style="width:120px;height:70px ;font-size:155.5%;font-weight:900;border-width:2px;margin-left:80px ">Back</button></a>
</div>
</form>
</section>
</body>

 

 



 





