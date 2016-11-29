<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main  extends CI_Controller{
	
	public function index(){
		
		if($this->session->userdata("user_logged_in")){			
			
			
			}
			
		else{
						
			
			redirect("login");
					
		}
	
	}
	
}

?>