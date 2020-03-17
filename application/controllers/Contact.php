<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Contact extends CI_Controller {
	
		public function index() // penghubung dari model dari kontak dan tampilan kontak di menu utama
		{
			$this->load->view('home/contact');
		}
	}
	
	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */