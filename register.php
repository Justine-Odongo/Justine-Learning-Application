<?php
 class Register extends mainController
 {
  public function index()
	{
        $data['errors']=[];
        $user=new User_model();
        $userInfo=$user->validateUser($_POST);
        if($userInfo)
        {
            $user->insert($_POST);
        }
       //Variable Data is for Sending our errors to the Sign up Page passed via the view function
        
        $data['errors']=$user->errors();
		$this->view('register', $data);

   } 
  
}