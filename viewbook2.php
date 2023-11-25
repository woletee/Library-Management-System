<?php
include "dbclass.php";
$obj=new database();
$obj->displayall("tblbook");
?>


<!DOCTYPE html>
<html>
<head>

<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<a href="logout.php"><button  class="btn btn-primary" style="width:120px;height:70px ;font-size:  155.5%;font-weight:900;border-width:2px;">Log out</button></a>
</body>
</html>
