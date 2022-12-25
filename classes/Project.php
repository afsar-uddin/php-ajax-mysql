<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}

	public function checkusername($username) {
		$query = "SELECT * FROM tbl_user WHERE username = '$username'";
		$getUser = $this->db->select($query);

		if($username == "") {
			echo '<span class="error">Enter username please!</span>';
			exit();
		} elseif($getUser) {
			echo "<span class='error'><b>$username</b> not available.</span>";
			exit();	
		} else {
			echo "<span class='success'><b>$username</b> username is available.</span>";
			exit();	
		}
 
	}

	
}
?>