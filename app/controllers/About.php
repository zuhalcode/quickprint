<?php 

class About extends Controller
{
    public function index()
    {
        $data['judul'] = 'Tentang Kami';
        $this->view('templates/header', $data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
}