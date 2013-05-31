<?
class Admin_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function login($user, $password){

        $password = md5($password);

        $sql = "SELECT * FROM admins WHERE username = ?";
        $result = $this->db->query($sql, $user);

        if($result->num_rows() > 0) {

            $row = $result->row();

            if($row->username == $user && $row->password === $password) {

                $session_data = array(
                            'username' => $user,
                            'id' => $row->id,
                            'is_admin' => true
                    );
                $this->session->set_userdata($session_data);

                return TRUE;

            }

        }

        else {

            return FALSE;

        }

    }

    public function admin_user(){

        $user = $this->session->userdata("id");

        $sql = "SELECT * FROM admins WHERE `id` = ?";

        $result = $this->db->query($sql, $user);

        return $result;

    }

    

}

?>