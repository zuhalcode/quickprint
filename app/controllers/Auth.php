<?php 

class Auth extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login Page';
        $this->view('templates/auth_header', $data);
        $this->view('auth/login',$data);
        $this->view('templates/auth_footer');
    }

    public function register()
    {
        if ($this->model('User_model')->insertData($_POST) > 0) {
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL);
        }else {
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function login()
    {
        $this->model('User_model')->getEmail($_POST);
    }
    
    public function logout()
    {
        header('Location: ' . BASEURL);
    }

    public function upload() {
        $file_name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $file_up_name = time().$file_name;
        $this->model('User_model')->insertCetak($_POST, $_FILES);
        header('Location: ' . BASEURL . '/home');
    }
}