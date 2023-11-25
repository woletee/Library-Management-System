<?php
if(isset($_POST['delete'])){
 include "dbclass.php";
 
 
$ID =$_POST['ID'];

$obj1=new database();



$obj1->remove($ID);

}
?>

<!DOCTYPE html>
<html>
<head>
<head>

<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
</head>
<body>
<div class="">
</div>

<body background="lib.jpg" class=""   style="color:green;background-color:pink;text-align: center; ">
<section>
<form name="form7" action="" method="POST" style="color:green;width:510px;height:590px;background-color:Aqua;margin-left:420px;margin-top:30px">

<h1 style="">Delete Book</h1>
<div>
<input type="text" placeholder="Enter Book ISBN to be deleted" name="ID" required=""  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>

<a href="Adminoper.html"><button class="btn btn-warning" type="button" value="Back"   style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px;margin-right:50px">Back</button></a>
<button class="btn btn-warning" type="submit" value="Delete" name="delete"  style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px">Delete</button>

</div>
</form>
</section>


</body>
</html>
