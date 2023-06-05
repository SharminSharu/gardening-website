<?php 

class Her extends CI_Controller
{
    public function index()
    {
        $this->load->view('her/index');
    }
    public function carousel()
    {
        $data['carousel']=$this->Her_model->caro();
        $this->load->view('her/carousel', $data);
    }
    public function services()
    {
        $data['service']=$this->Her_model->getservice();
        $this->load->view('her/services',$data);
    }
}
