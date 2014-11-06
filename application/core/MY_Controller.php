<?php
class MY_Controller extends CI_Controller {
	
	var $_data = array();
	
    public function __construct() {
		parent::__construct();
		
		$login = $this->session->userdata('logged_in');
		
		if (is_array($login)) {
			// admin

			echo "LOGIN";
			
			// $user_id = $login['id'];
			// $this->load->model('db_model');
			// $this->_data['user_privilege'] = $this->db_model->get_privilege($user_id);
			
			// if(!preg_match('/('.$this->config->item('site_languages_str').')/', uri_string())){
			// 	redirect('admin/'.$this->_data['user_privilege'][0]['language'].'/group_list');
			// }
			
			// $uri_parts = explode("/", uri_string());
			// $language = $uri_parts[1];
			// $site_languages = $this->config->item('site_languages');
			// for ($i=0;$i<count($site_languages);$i++){
			// 	if ($language == $site_languages[$i]['language']) {
			// 		$this->_data['language'] = $site_languages[$i];
			// 		break;
			// 	}
			// }
			
		} else {
			echo "LOGOUT";
			// // image site or have not login
			// $site_languages = $this->config->item('site_languages');
			
			// // set default language is english
			// $this->_data['language'] = $site_languages[0];
			// $this->_data['language_list'] = $site_languages;
			
			// $uri_parts = explode("/", uri_string());
			// $language = $uri_parts[0];			
			// for ($i=0;$i<count($site_languages);$i++){
			// 	if ($language == $site_languages[$i]['language']) {
			// 		$this->_data['language'] = $site_languages[$i];
			// 		break;
			// 	}
			// }
			
			// // image website
			// if(uri_string()!= "verifylogin"&&!preg_match('/admin/',uri_string())){
			// 	$language_folder = $this->_data['language']['folder'];
			// 	$view_language_folder = $this->_data['language']['folder'];
				
			// 	// set default language if there is not language file
			// 	if (!realpath(APPPATH."/language/".$this->_data['language']['folder'])){
			// 		$language_folder = $site_languages[0]['folder'];
			// 	}
			// 	// views language folder
			// 	if (!realpath(APPPATH."/views/".$this->_data['language']['folder'])){
			// 		$view_language_folder = $site_languages[0]['folder'];
			// 	}
				
			// 	$this->_data['language']['view_language_folder'] = $view_language_folder;
				
			// 	$this->lang->load('amp',$language_folder);
					
			// 	$this->_data['lang'] = $this->lang->language;
			// }
			
			
			
		}
		
		// $this->load->model('db_model','',TRUE);
	}

}
?>