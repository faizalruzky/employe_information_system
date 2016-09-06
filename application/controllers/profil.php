<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profil extends CI_Controller {

	

	public function index()
	{			
			$this->load->view('dashboard_admin/profil/about-us');
		
		
	}
}
?>