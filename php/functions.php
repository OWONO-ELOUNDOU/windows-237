<?php
    $upload_directory = "uploads/";

	function set_message($msg){
		if(!empty($msg)){
			$_SESSION['message'] = $msg;
		}else{
			$msg = "";
		}
	}
	
	function display_message(){
		if(isset($_SESSION['message'])){
			echo $_SESSION['message'] ;
			unset($_SESSION['message']);
		}
	}
	function display_message2($message, $type="success"){
			echo "<h3 class=\"bg-$type\">".$message.'</h3>';
		
	}
		//helper function
	
		function last_id(){
			global $connection;
			return mysqli_insert_id($connection);
		}
	
	
		function redirect($location){
			header("Location:$location");
		}
	
		function query($sql){
			global $connection;
			return mysqli_query($connection, $sql);
		}
	
		function confirm($result){
			global $connection;
			if(!$result){
				die("QUERY FAILED".mysqli_error($connection));
			}
		}
	
		function escape_string($string){
			global $connection;
			return mysqli_real_escape_string($connection, $string);
		}
	
		function fetch_array($result){
			return mysqli_fetch_array($result);
		}