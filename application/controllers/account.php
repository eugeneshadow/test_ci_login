<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{	
		$id = $this->input->get('id');
		if($this->session->userdata('login') == false){
			redirect('login/index');	
		}		
		$this->load->model('user_model');
		$data['info'] = $this->user_model->get_user_data($id);
		
		$this->load->view('account_info', $data);
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */