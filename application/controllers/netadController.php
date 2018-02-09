<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class netadController extends CI_Controller {

	
	public function index()
	{
		$data['content']='netad/home_page/home_content';
		$data['sidebar']='netad/home_page/home_sidebar';
		$data['header']='netad/home_page/home_header';
		$this->load->view('netad/home', $data);
	}

}