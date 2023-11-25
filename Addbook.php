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
	
	$obj->saveRecords($Author, $ColumnNumber,$ID,$PublisheDate,$Publisher ,$ShelfNumber, $Title  );
}

?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body  background="lib.jpg" class=""  style="color:green;background-color:pink;text-align: center">
<section>
<form name="form5" action="" method="POST"  style="color:green;width:510px;height:590px;background-color:Aqua;margin-left:420px;margin-top:20px">
<h1>Please Fill the Following information!</h1>
<div>
<input type="text" placeholder="Enter Book Author" name="Author"  required="" style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter column number"  required="" name="ColumnNumber" style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Book ISBN" name="ID"  required="" style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Published Date" name="PublisheDate"  required="" style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Publisher" name="Publisher"  required="" style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter shelf number" name="ShelfNumber" required=""  style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<div>
<input type="text" placeholder="Enter Book Title" name="Title"   required="" style="width:300px;height:40px;border-width:2px;color:black;font-weight:bold"/><br><br>
</div>
<a href="Adminoper.html"><button class="btn  btn-warning" type="button" value="Back"   style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px;margin-right:50px">Back</button></a>
<button  class="btn btn-warning" type="submit" value="insert" name="sb" style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px">Insert</button>
</div>
</form>
</body>
</section>
</html>






 

 



 





