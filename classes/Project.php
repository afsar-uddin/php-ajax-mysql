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

	public function checkskill($skill) {
		$query = "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%'";
		$getSkill = $this->db->select($query);

		$result = '';
		$result .= '<div class="skill"></ul>';
		if($getSkill) {
			while($data = $getSkill->fetch_assoc()) {
				$result .= '<li>'.$data['skill'].'</li>';
			}
		}else {
			$result .= '<li>No result found</li>';
		}

		$result .= '</ul></div>'; 

		echo $result;

		// var_dump($getSkill);
	}

	public function autorefresh($body) {
		$query = "INSERT INTO tbl_autorefresh(body) VALUES('$body')";
		$data = $this->db->insert($query);
	}

	public function getDataWithoutRefresh() {
		$query = "SELECT * FROM tbl_autorefresh ORDER BY id DESC";
		$getContent = $this->db->select($query);

		$result = '';
		$result .= '<div class="data-content"></ul>';
		if($getContent) {
			while($data = $getContent->fetch_assoc()) {
				$result .= '<li>'.$data['body'].'</li>';
			}
		}else {
			$result .= '<li>No result found</li>';
		}

		$result .= '</ul></div>'; 

		echo $result;
	}
 
	
}
?>