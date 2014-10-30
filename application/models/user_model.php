<?php 
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function login(){
        $username = $this->input->get('username');
        if (!$this->is_active_user() && $this->is_linux_user($username) ) {
            $this->input->get('password') == "123";
            $result = array('success' => true);
        } else {
            $result = array('success' => false, "message"=> "USER_NOT_EXIST");
        }
        return $result;
    }

    function is_linux_user($login_username){
        $result = false;
        $fp = fopen("/etc/passwd", "r");
        while(!feof($fp)){
            $line = fgets($fp);
            if (preg_match("/\/home\/.*bash/", $line)) {
                list($username) = explode(":", $line);
                if ($login_username == $username) {
                    $result = true;
                }
            }
        }
        return $result;
    }

    function is_active_user(){
        return false;
    }
}
?>
