<?php

namespace App\Controllers;
class Home extends BaseController{

    /**
     * @var \CodeIgniter\Database\BaseConnection
     */
    protected $db;

    function __construct() {

        $this->db = db_connect();
    }

	public function index(){

		return view('welcome_message');
	}

    public function login(){

        $validators = $this->validate([
            'userid' => 'required|min_length[3]|max_length[255]',
            'password'  => 'required|min_length[3]|max_length[255]',
        ]);

        if ($this->request->getMethod() === 'post' && $validators) {

            $userid = $this->request->getPost('userid');
            $password = $this->request->getPost('password');

            $sql =  "SELECT userid, password, cardnumber ";
            $sql .= "FROM borrowers WHERE userid = '{$userid}' LIMIT 1";

            $borrower = $this->db->query($sql)->getRow();

            if (isset($borrower)){

                //for koha 3.13 and earlier
                $old_hash = rtrim(base64_encode(pack('H*', md5($password))), '=');

                //for koha 3.14 and later
                $new_hash = crypt($password, $borrower->password);

                if( ($borrower->password === $old_hash) || ($borrower->password === $new_hash) ){
                    $session = session();

                    $session->set([
                        'userid'  => $borrower->userid,
                        'logged_in' => TRUE
                    ]);

                    session()->setFlashdata('login_status', 'user not found');

                    return redirect()->to("/home/index/");

                }  else {

                    session()->setFlashdata('login_status', 'user not found');

                    return redirect()->to(site_url('/home/login/'));
                }
            }
            session()->setFlashdata('login_status', 'Login failed');

        }
        session()->destroy();
        if( ! session()->has('login_status')) {

            session()->setFlashdata('login_status', 'Login required');
        }

        return view('login');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/home/login');
    }
}
