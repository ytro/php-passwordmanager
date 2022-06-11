<?php

/* --
Author: Yann Trottier
File  : models/password_model.php
Desc. : Queries database to perform tasks relative to password management, 
		such as creating, deleting or retrieving passwords.
*/


class Password_model extends Model {

	function __construct(){
		parent::__construct();
	}
	
	// Create a new password
	function new_password($id = NULL, $name, $login, $password, $url, $notes){
		$password_ID = $this->query("INSERT INTO passwords (password_id, password_name, login, password, url, notes) 
									VALUES ('$id', '$name', '$login', '$password', '$url', '$notes')");
		return $password_ID;
	}
	// Delete password from database
	function delete_password($id){
		$this->query("DELETE FROM passwords WHERE password_id = '$id'");
	}
	
	//Access a password's details
	function get_details($id){
		$result = $this->query("SELECT * FROM passwords WHERE password_id = '$id'");
		return $result;
	}
	
	//Retrieve all passwords
	function get_all() {
		$results = $this->query("SELECT * FROM passwords");
		return $results;
	}
	
	//Retrieve the master password
	function get_MP(){
		$MP = $this->query("SELECT Master_password FROM master WHERE Master_id = '1'");
		return $MP[0]['Master_password'];
	}
	
	//Check if password entry exists in database
	function check_exists($id){
		$result = $this->query("SELECT password_id FROM passwords WHERE password_id = '$id'");
		$n = count($result);
		return $n;
	}
}
