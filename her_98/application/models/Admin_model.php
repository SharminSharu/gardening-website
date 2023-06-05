<?php
class Admin_model extends CI_Model
{

// --------------------login-------------------------
public function login($email,$password)
{
    return $this->db->where('email',$email)
                ->where('password',$password)
                ->get('users')->row();
}
// --------------------About-------------------------

public function about_list()
{
    $data=$this->db->get('about');
        return $data->result();

}
public function saveabout($data)
{
    $this->db->insert('about', $data);
}
public function ab_del($id)
{
   $this->db->where('id',$id)->delete('about');
}
   // ---------------------Services------------------------ 
//    public function saveServices($photo,$icon,$title,$details)
//    {
//        $this->db->insert('service',['photo'=>$photo,'icon'=>$icon,'title'=>$title,'details'=>$details]);
//    }
public function saveServices($data)
{
    $this->db->insert('service',$data);
}
    public function get_ser_list()
    {
        $data=$this->db->get('service');
        return $data->result();

    }

    public function service_del($id)
    {
       $this->db->where('id',$id)->delete('service');
    }
    // -------------------contact--------------------------
    public function contact_list($limit, $start)
    {
        $this->db->limit($limit, $start);
        $data=$this->db->get('contact');
        return $data->result();
    }
    public function get_count()
    {
        return $this->db->count_all("contact");
    }
        // $data=$this->db->get('contact');
        // return $data->result();
    
    public function savecontact ($data)
    {
      $this->db->insert('contact', $data);
    }
    public function deletecontact($id)
    {
       $this->db->where('id',$id)->delete('contact');
    }
   // -------------------Quote--------------------------
    public function quote_list()
    {
        $data=$this->db->get('quote');
        return $data->result();
    }

   // -------------------Team-------------------------
    public function saveTeam($data)
    {
        $this->db->insert('team', $data);
    }
    public function gettem()
    {
        $data=$this->db->get('team');
        return $data->result();
    }

    public function team_del($id)
    {
       $this->db->where('id',$id)->delete('team');
    }

       // -------------------Testimonial-------------------------
       public function saveTest($data)
       {
           $this->db->insert('testimonial', $data);
       }
       public function gettest()
       {
           $data=$this->db->get('testimonial');
           return $data->result();
       }
   
       public function test_del($id)
       {
          $this->db->where('id',$id)->delete('testimonial');
       }
            // -------------------Portfolio------------------------
            public function savePort($data)
            {
                $this->db->insert('project', $data);
            }
            public function getport()
            {
                $data=$this->db->get('project');
                return $data->result();
            }
        
            public function port_del($id)
            {
               $this->db->where('id',$id)->delete('project');
            }
     

       // -------------------contact--------------------------
	
   

}