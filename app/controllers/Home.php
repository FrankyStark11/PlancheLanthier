
<?php
session_start();
	include_once("../app/models/Home.php");
	class Home extends Controller
	{
		public function Accueil(){
			parent::view('Home/Index');
		}	

		public function Contact(){
			parent::view('Home/Contact');
		}

		public function APropos(){
			parent::view('Home/APropos');
		}

		public function Creations(){
			parent::view('Home/Creations');
		}

		public function AjouterCommande(){
			parent::view('Home/AjouterCommande');
		}
	}
?>