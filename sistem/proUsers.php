<?php 
include 'connect.php';

/**
 * Users get, set, update and delete
 */
class Users
{
	public $userId;
	public $mail;
	public $fullname;
	public $username;
	public $pass;
	public $avatar;
	public $pertype;


	/* --START-- Add User and get User/Users functions */
	function addUser($mail, $fullname, $username, $pass, $avatar, $pertype)
	{

	}

	function getUsers(){

	}

	function getUser($userId){

	}
	/* --END-- Add User and get User/Users functions */

	/* --START-- Update User function */
	function updateUser($id, $mail, $fullname, $username, $pass, $avatar, $pertype){

	}
	/* --END-- Update User function */

	/* --START-- Delete User function */	
	function deleteUser($id){
		
	}
	/* --END-- Delete User function */
}

?>