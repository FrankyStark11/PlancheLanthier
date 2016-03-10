
<?php
session_start();
	include_once("../app/models/Home.php");
	class Admin extends Controller
	{
		public function Login(){
			parent::view('Admin/LoginAdmin');
		}	

		public function Administration(){
			parent::view('Home/Index');
		}
	}
?>