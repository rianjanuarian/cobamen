<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Pricing extends CI_Controller {
	
		public function index() // penghubung antara model harga dengan tampilan harga paket
		{
			$this->load->view('home/pricing');
		}
	}
	
	