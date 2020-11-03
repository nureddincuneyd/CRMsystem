<?php 
include 'connect.php';

/**
 * Blog get, set, update and delete
 */
class Blog
{
	public $blogId;
	public $title;
	public $content;
	public $fimage;
	public $authorId;


	/* --START-- Add Blog and get Blog/Blogs functions */
	function addUser($prName, $title, $content, $fimage, $authorId)
	{

	}

	function getUsers(){

	}

	function getUser($blogId){

	}
	/* --END-- Add User and get Blog/Blogs functions */

	/* --START-- Update Blog function */
	function updateUser($blogId, $title, $content, $fimage, $authorId){

	}
	/* --END-- Update Blog function */

	/* --START-- Delete Blog function */	
	function deleteUser($blogId){
		
	}
	/* --END-- Delete Blog function */
}

?>