<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class netadController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}


	public function index()
	{
		$data['content']='netad/home_page/home_content';
		$data['sidebar']='netad/home_page/home_sidebar';
		$data['header']='netad/home_page/home_header';
		$this->load->view('netad/home', $data);
	}

	public function login_action()
	{
		$email = $this->input->post('email_user');
		$password = $this->input->post('password_user');
		$where = array(
			'EMAIL' => $email,
			'PASSWORD' => $password
		);
		$check = $this->m_login->check_login("tbl_login", $where)->num_rows();
		if($check > 0){

			$data_session = array(
				'name' => $NAMA,
				'status'=> "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("netController"));


		}else{
			echo "Username dan password salah";
		}	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}	
	
}