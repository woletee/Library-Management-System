<?php
class student{
	private $host="localhost";
	private $user="root";
	private $pass="";
	private $db="lmsdb";
	private $tbname="student";
	
	public function connect(){
		$conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		return $conn;		
	}
		public function login2($username1,$pass1){
		$conn=$this->connect();
		$sql="select * from student where username1='".$username1."' AND pass1='".$pass1."'  ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		header("location:viewbook2.php");
		echo "you have succefully login <button></button>";		
	}
	else{
		echo "incorrect username and password";
	}
	
	}
	public function insert_stud($fname,$lname,$pass1,$username1 ){
		$conn=$this->connect();
		$query="INSERT into student (fname, lname, pass1, username1 ) values('$fname','$lname','$pass1','$username1')";
		$sql=mysqli_query($conn,$query);	
		if($sql==true){
		echo "<div style='padding:20px;background-color:yellow'>Registred  succefullyy</div>";
		}
		else
			
			{
           die(mysqli_error($conn));
		   }
	}

}
?>
