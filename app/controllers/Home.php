
<?php
session_start();
	include_once("../app/models/Admin.php");
	class Admin extends Controller
	{
		public function Accueil(){
			parent::view('Home/Index');
		}	
	}
?>