<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{	
		$this->session->set_userdata(array('login' => false));
		$this->load->view('login');
	}

	public function login_process(){
		
		$input['user_id'] = $this->input->post('username');
		$input['password'] = $this->input->post('password');
		
		$this->load->model('user_model');
		$id = $this->user_model->get_user_id($input);
		if($id > 0){
			$this->session->set_userdata(array('id' => $id));
			$this->session->set_userdata(array('login' => true));
			$data['result_message'] = "Login is successful.";
		} else {
			$data['result_message'] = "Login is failed.";
		}
		
		$this->load->view('login_result', $data);
	}
	
	public function register(){
		$this->session->set_userdata(array('login' => false));
		$this->load->view('register');		
	}
	
	public function register_process(){
		$input['user_id'] = $this->input->post('username');
		$input['password'] = $this->input->post('password');
		$input['email'] = $this->input->post('email');
		
		$this->load->model('user_model');
		$id = $this->user_model->add_user_info($input);

		if($id > 0){
			$data['message'] = "Register is success.";
		} else {
			$data['message'] = "Register is failed.";
		}
		$this->load->view('register_result', $data);
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */