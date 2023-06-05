<?php
class Her_model extends CI_Model
{
// ----service-------
    public function getservice()
    {
        $data=$this->db->get('service');
        return $data->result();
    }
// ----carousel-------
    public function caro()
    {
        $data=$this->db->get('bg');
        return $data->result();
    }
    // ----about-------
    public function getabout()
    {
        $data=$this->db->get('about');
        return $data->result();
    }
// ----projects-------
    public function getproject()
    {
        $data=$this->db->get('project');
        return $data->result();
    }
    // ----Review-------
    public function getreview()
    {
        $data=$this->db->get('testimonial');
        return $data->result();
    }
// ----Team-------
    public function getteam()
    {
        $data=$this->db->get('team');
        return $data->result();
    }

    // ----feature-------
    public function getfeature()
    {
        $data=$this->db->get('feature');
        return $data->result();
    }

// ----feature_1-------
    public function getfet()
    {
        $data=$this->db->get('feature_1');
        return $data->result();
    }

// ---contact-------
    public function savcontact($data)
    {
      $this->db->insert('contact', $data);
    }
   
// ----Quote-------
    public function savquote($data)
    {
      $this->db->insert('quote', $data);
    }
// ----email-------
    public function savemail($data)
    {
      $this->db->insert('email', $data);
    }
  
}
