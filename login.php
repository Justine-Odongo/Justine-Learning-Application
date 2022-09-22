<?php
 class Login extends mainController
 {
  public function index()
	{
		$db = new Database();
		$db->query("select * from users");
		
		$this->view('login');
    
   } 
  
}