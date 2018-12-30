<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('Login');
	}

	public function LoginProses()
	{
		$username=$this->input->post('user');
		$password=$this->input->post('pass');

		$where=array(
			'username'=>$username,
			'password'=>md5($password),
			'hak_akses'=>'1'
		);
		$cek=$this->Login_Model->Login('user',$where)->num_rows();

		if($cek>0)
		{
			$data_session=array(
				'username'=>$username,
				'status'=>'Login'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('Admin'));
		}
		else
		{
			redirect(base_url('Login'));
		}
	}
}
