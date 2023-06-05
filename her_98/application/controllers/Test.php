<?php

class Test extends CI_Controller
{
    public function team_save()
    {
        $data=$this->input->post();
        print_r($data);
    }
}
