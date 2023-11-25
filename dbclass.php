<?php
class database{
	private $host="localhost";
	private $user="root";
	private $pass="";
	private $db="lmsdb";
	private $tbname="tblbook";
	public function connect(){
		$conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		return $conn;		
	}
	public function indexxx($username,$password){
		$conn=$this->connect();
		$sql="select * from login where username='".$username."' AND password='".$password."'  ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		header("location:Adminoper.html");
		echo "you have succefully login <button></button>";
	}
	else{
		echo "incorrect username and password";
	}

	}
	public function saveRecords($Author,$ColumnNumber,$ID,$PublisheDate,$Publisher,$ShelfNumber,$Title ){
		$conn=$this->connect();
		$query="INSERT into tblbook (Author, ColumnNumber, ID, PublisheDate ,Publisher, ShelfNumber, Title) values('$Author','$ColumnNumber','$ID','$PublisheDate','$Publisher','$ShelfNumber','$Title'    )";
		$sql=mysqli_query($conn,$query);	
		if($sql==true){
		echo "<div style='padding:20px;background-color:yellow'>Data Entered succefullyy</div>";
		}
		else
			
			{
           die(mysqli_error($conn));
		   }
	}
	public function displayall($tbname)
{
	
$conn=$this->connect();

$quer=mysqli_query($conn,"select * from tblbook");		
echo "<div class='container'>
<table class='table table-bordered table-striped'
<tr>
<th>ID</th>
<th>Author</th>
<th>ColumnNumber</th>
<th>PublisheDate</th>
<th>Publisher</th>
<th>ShelfNumber</th>
<th>Title</th></tr>";
		
while($res=mysqli_fetch_array($quer))
{
echo "
<tr>
<td>".$res['ID']."</td>
<td>".$res['Author']."</td>
<td>".$res['ColumnNumber']."</td>

<td>".$res['PublisheDate']."</td>
<td>".$res['Publisher']."</td>
<td>".$res['ShelfNumber']."</td>
<td>".$res['Title']."</td>
</tr>";
}
 "</table>";
}
public function update($Author,$ColumnNumber,$ID,$PublisheDate,$Publisher,$ShelfNumber,$Title ){
		$conn=$this->connect();
		$query="update  tblbook set Author='$Author', ColumnNumber='$ColumnNumber' ,PublisheDate='$PublisheDate' ,Publisher='$Publisher', ShelfNumber='$ShelfNumber', Title='$Title' where ID=$ID";
		$sql=mysqli_query($conn,$query);
		if($sql==true){
		header("location:viewbook.php");
		echo "<div style='padding:20px;background-color:yellow'>Updated succefullyy</div>";
		}
		else
			
			{
           die(mysqli_error($conn));
		   }
	}
public function remove($ID){
	$conn=$this->connect();
    $sql="delete from tblbook    where ID=$ID";
    $result=mysqli_query($conn,$sql);
   if($result){
		echo "<div style='padding:20px;background-color:yellow'>deleted succefullyy</div>";
	

     }
}
}
?>
