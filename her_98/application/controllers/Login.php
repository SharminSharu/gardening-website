<?php
class Login extends CI_Controller
{
  

    public function signin()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $data=$this->Admin_model->login($email,$password);
        if($data!=null){
            $this->session->set_userdata(['userID'=>$data->id,'name'=>$data->name]);
        }else{
            echo "Error";
        }
        redirect(base_url('Welcome/indexs'));
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Welcome/index'));
    }
}
