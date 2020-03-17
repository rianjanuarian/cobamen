<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller {
	
		public function index() // penghubung fungsi model tampilan utama dan tampilannya
		{
			$this->load->view('home/index');
		}
		
		
	}
	
 