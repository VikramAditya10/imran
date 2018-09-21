<?php
class DB{
	var $con;
	function __construct(){
		$this->con = mysqli_connect('localhost', 'root', '','imran');
		if (!$this->con) 
    die("Connection failed: " . mysqli_connect_error());
	}
	function execute_query($sql){
		$result=mysqli_query($this->con, $sql);
		if (!$result) {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
return $result;
}
	function fetch_result($result){
	return	mysqli_fetch_assoc($result);
}
function num_rows($result){
	return mysqli_num_rows($result);
}
	}
	
	
?>