<?php


if(isset($_POST['sb']))
{	
    include "dbclass.php";
	$Author=$_POST['Author'];
	$ColumnNumber =$_POST['ColumnNumber'];
	$ID =$_POST['ID'];
	$PublisheDate=$_POST['PublisheDate'];
	$Publisher =$_POST['Publisher'];
	$ShelfNumber =$_POST['ShelfNumber'];
	$Title=$_POST['Title'];
	$obj=new database();
	$obj->update($Author, $ColumnNumber,$ID,$PublisheDate,$Publisher ,$ShelfNumber, $Title  );
}
?>
<html>
<head>

<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body  background="lib.jpg" class=""   style="color:green;background-color:pink;text-align: center; ">
<section>
<form name="form5" action="" method="POST" style="color:green;width:510px;height:590px;background-color:Aqua;margin-left:420px;margin-top:20px">
<h1>Please Fill the Following information!</h1>
<div>
<input type="text" placeholder="Enter Book Author" name="Author"  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter column number" name="ColumnNumber" style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Book ISBN" name="ID"  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Published Date" name="PublisheDate"  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Publisher" name="Publisher"  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter shelf number" name="ShelfNumber"  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Book Title" name="Title"   style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>

</html>
<a href="Adminoper.html"><button type="button" class="btn btn-warning" value="Back"   style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px;margin-right:50px">Back</button></a>
<a href="update='.ID.'"><button type="submit" class="btn btn-warning" value="update" name="sb" style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px">Update</button><a>
</div>
</form>
</section>
</body>






 

 



 





