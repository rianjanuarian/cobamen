<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
	
		public function index() // penghubung antara model login dan tampilan login 
		{
			$this->load->view('user/login');
		}
	
	}
	
