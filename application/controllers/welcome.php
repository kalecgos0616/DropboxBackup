<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "bear2";
		$this->load->view('index');
	}

	public function login(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		echo "\$this->form_validation->run():".$this->form_validation->run();
		exit;

		//This method will have the credentials validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', '');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		echo "\$this->form_validation->run():".$this->form_validation->run();
		exit;

		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			echo "<script>alert('Invalid username or password');</script>";
			echo "<meta http-equiv='refresh' content='0;url=admin'>";
		}
		else
		{
			//Go to private area
			redirect('/admin/group_list', 'refresh');
		}
		exit;

		$this->load->model('User_model');

		$result = $this->User_model->login(); 
		
		echo json_encode($result);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
