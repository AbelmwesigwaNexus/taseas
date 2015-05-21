<?php
require "connection.php";
session_start(); // Starting Session



function Admin(){
	
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		
		return true;
		
		}else{
			return false;
			
			}
	
	
	}
function SignUp(){
	if(isset($_POST['username']) && isset($_POST['password'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password)){
			//echo"Hey yo can post now";
			$query = "SELECT * FROM administrator WHERE username='$username' AND password='$password'";
			
			if($query_run = mysql_query($query)){
				//echo "Working well abel";
				if(mysql_num_rows($query_run)==0){
					
					$sql="INSERT INTO administrator VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."')";
					if($sql_run = mysql_query($sql)){
						echo'Successfuly Posted';
						$login="INSERT INTO login VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."')";
						
						if($login_run = mysql_query($login)){
							}
						}
					
					}else{
						echo"User Exists,";
						
						}
				
				
				}else{
					echo "Not Working well abel";
					
					}
			
			}else{
				echo"Fill In All Fields";
				}
		}
	}
	
	
	function loginAdministrator(){
		if(isset($_POST['username']) && isset($_POST['password'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password)){
			$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
			if($query_run = mysql_query($query)){
				if(mysql_num_rows($query_run)==1){
					//echo"welcome please";
					$username = mysql_result($query_run,0,'username');
					$_SESSION['username'] = $username;
					if(isset($_SESSION['username']) && $_SESSION['username']=="allan"){
						header("Location:administrator.php");
						}else{
							header("Location:adminothers.php");
							
							}
					
				
					}else{
						echo"You not an admin here";
						}
				
				}
			
		}else{
			echo"Fill In all Fielsd";
				}
			}
		}


?>
