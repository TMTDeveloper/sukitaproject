<?php 

class netController extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
		}
	}

	function index(){
		$this->load->view('net/net_dashboard');
	}




}

 ?>