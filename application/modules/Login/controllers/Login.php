<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login  extends CI_Controller{
	
	public function index(){
		
		if($this->session->userdata("user_logged_in")){
			
			
			
			}
		else{		
			
			$data = array(
			"title" => "Login",
			"template" => "login",
			"body_class" => "hold-transition login-page"
			);				
			
			$this->load->view("site",$data);
					
			}
	
	}
	
}

?>