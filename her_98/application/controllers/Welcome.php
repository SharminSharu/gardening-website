<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
// -----------------------------------------------------------

	// --------Dashboard-------------------------------------------
	public function index()
	{
		$this->load->view('admin/index');
	}
	public function dash()
	{
		$this->load->view('admin/dashboard');
	}

	
	// ----------------------About-------------------------
	public function ablist()
	{
		$data['ab'] = $this->Admin_model->about_list();
		$this->load->view('admin/about', $data);
	}

	public function about_add()
	{
		$data = $this->input->post();

		$this->Admin_model->saveabout($data);
		$this->load->view('admin/about', $data);
		redirect(base_url('welcome/ablist'), 'refresh');
	}
	public function about_del($id)
	{
		$this->Admin_model->ab_del($id);
		redirect(base_url('welcome/ablist'), 'refresh');
		
	}

	// -----------------------Contact---------------------------
	public function conlist()
	{
	      $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "Welcome/conlist";
        $config["total_rows"] = $this->Admin_model->get_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;

        $config['full_tag_open'] = '<ul class="pagination">';        
        $config['full_tag_close'] = '</ul>';     
        $config['first_link'] = 'First';      
        $config['last_link'] = 'Last';     
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['first_tag_close'] = '</span></li>';        
        $config['prev_link'] = '&laquo';        
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['prev_tag_close'] = '</span></li>';        
        $config['next_link'] = '&raquo';        
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['next_tag_close'] = '</span></li>';        
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['last_tag_close'] = '</span></li>';        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
        $config['cur_tag_close'] = '</a></li>';        
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['num_tag_close'] = '</span></li>';
    
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["con"] = $this->Admin_model->contact_list(5, $page);
        $data['page']=$page;

        $data["links"] = $this->pagination->create_links();
        $this->load->view('admin/contact', $data);
    }
	
		// $data['con'] = $this->Admin_model->contact_list();
		// $this->load->view('admin/contact', $data);

	
	public function ad_contact()
	{
		
		$data = $this->input->post();

		$this->Admin_model->savecontact($data);
		$this->load->view('admin/contact', $data);
		redirect(base_url('welcome/conlist'), 'refresh');

	}
	public function delete($id)
	{
		$this->Admin_model->deletecontact($id);
		// $this->session->set_flashdata('msg','successfully deleted!');
		//  redirect(base_url('admin/contact_list'),'refresh');
		redirect(base_url('welcome/conlist'), 'refresh');
	}

	// -----------------------Quote---------------------------
	public function quolist()
	{
		$data['quo'] = $this->Admin_model->quote_list();
		$this->load->view('admin/quote_list', $data);
	}

	// -----------------------Services list show---------------------------
	public function services_list()
	{
		$data['ser_list'] = $this->Admin_model->get_ser_list();
		$this->load->view('admin/services', $data);
	}
	// -----------------------Services------Image try 01---------------------

	public function serve()
	{
		$data = $this->input->post();
		$config['upload_path'] = './upload_something/';
		$config['allowed_types'] = 'gif|jpg|png|PNG|jpeg|JPG';
		$config['max_size'] = 1000000;
		$config['max_width'] = 150000;
		$config['max_height'] = 150000;
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);
		
		$this->upload->do_upload('icon');
		$info = $this->upload->data();
		$data['icon']   = $info['file_name'];
		$this->upload->do_upload('photo');
		$info = $this->upload->data();
		$data['photo']   = $info['file_name'];
		// print_r($data);
		// if (!$this->upload->do_upload('photo'))  {
		// 	$error['error'] = $this->upload->display_errors();
		
		// 	$this->load->view('admin/services', $error);
		// 	// print_r($error);
		// } else {

		// 	$info = $this->upload->data();
		// 	$data['photo']   = $info['file_name'];
		// 	$this->Admin_model->saveServices($data);
		// 	redirect(base_url('welcome/services_list'), 'refresh');
		// }
		$this->Admin_model->saveServices($data);
		redirect(base_url('welcome/services_list'), 'refresh');
	

}
	// -----------------------Services------Image try 02---------------------
	// public function serve()
	// {
		// Load the file uploading library

		// $this->load->library('upload');

		// $title = $this->input->post('title');
		// $details = $this->input->post('details');

		//------------icon section start----------------
		// $config['upload_path'] = './upload_something/';
		// $config['allowed_types'] = 'gif|jpg|png|PNG|jpeg|JPG';
		// $config['max_size'] = 1000000;
		// $config['max_width'] = 1500000;
		// $config['max_height'] = 1500000;
		// $config['encrypt_name'] = true;
		// $config['file_name'] = 'icon';

		// $this->upload->initialize($config);

		// $this->upload->do_upload('icon');

		// $info = $this->upload->data();
		// $icon = $info['file_name'];
		//------------icon section ends----------------


		//------------Photo section start----------------
	// 	$config['upload_path'] = './upload_something/';
	// 	$config['allowed_types'] = 'gif|jpg|png|PNG|jpeg|JPG';
	// 	$config['max_size'] = 1000000;
	// 	$config['max_width'] = 1500000;
	// 	$config['max_height'] = 1500000;
	// 	$config['encrypt_name'] = true;
	// 	$config['file_name'] = 'photo';

	// 	$this->upload->initialize($config);

	// 	$this->upload->do_upload('photo');
	//  // $image2_data = $this->upload->data();
	// 	$info_2 = $this->upload->data();
	// 	$photo = $info_2['file_name'];

		//------------photo section ends----------------

 	// 	$this->Admin_model->saveServices($photo, $icon, $title, $details);
	// 	redirect(base_url('welcome/services_list'),'refresh');

	// }
   


	// -----------------------Services-delete--------------------------
	public function services_delete($id)
	{
		$this->Admin_model->service_del($id);
		redirect(base_url('welcome/services_list'), 'refresh');
		
	}


	// -----------------------Services---- edit -----------------------
	
	// {

	// 	$data['ser_it'] = $this->Admin_model->getservicesedit($id);
	// 	$this->load->view('admin/services_edit', $data);
	// }
// -----------------------Team---------------------------

	public function tem_list()
	{
		$data['tem'] = $this->Admin_model->gettem();
		$this->load->view('admin/team', $data);
	}

	public function tem_ad()
	{
		$data = $this->input->post();
		$config['upload_path'] = './upload_something/';
		$config['allowed_types'] = 'gif|jpg|png|PNG|jpeg|JPG';
		$config['max_size'] = 1000000;
		$config['max_width'] = 150000;
		$config['max_height'] = 150000;
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('photo')) {
			$error['error'] = $this->upload->display_errors();
			$this->load->view('admin/team', $error);
			// print_r($error);
		} else {

			$info = $this->upload->data();
			$data['photo'] = $info['file_name'];
			$this->Admin_model->saveTeam($data);
			redirect(base_url('welcome/tem_list'), 'refresh');
		}
	}

	public function tem_del ($id)
	{
		$this->Admin_model->team_del($id);
		redirect(base_url('welcome/tem_list'), 'refresh');
		
	}
	// -----------------------Testimonial---------------------------

	public function test_list()
	{
		$data['test'] = $this->Admin_model->gettest();
		$this->load->view('admin/testimonial', $data);
	}

	public function test_ad()
	{
		$data = $this->input->post();
		$config['upload_path'] = './upload_something/';
		$config['allowed_types'] = 'gif|jpg|png|PNG|jpeg|JPG';
		$config['max_size'] = 1000000;
		$config['max_width'] = 150000;
		$config['max_height'] = 150000;
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('photo')) {
			$error['error'] = $this->upload->display_errors();
			$this->load->view('admin/testimonial', $error);
			// print_r($error);
		} else {

			$info = $this->upload->data();
			$data['photo'] = $info['file_name'];
			$this->Admin_model->saveTest($data);
			redirect(base_url('welcome/test_list'), 'refresh');
		}
	}

	public function test_del ($id)
	{
		$this->Admin_model->test_del($id);
		redirect(base_url('welcome/test_list'), 'refresh');
		
	}
	// -----------------------Portfolio--------------------------

	public function port_list()
	{
		$data['port'] = $this->Admin_model->getport();
		$this->load->view('admin/portfolio', $data);
	}

	public function port_ad()
	{
		$data = $this->input->post();
		$config['upload_path'] = './upload_something/';
		$config['allowed_types'] = 'gif|jpg|png|PNG|jpeg|JPG';
		$config['max_size'] = 1000000;
		$config['max_width'] = 150000;
		$config['max_height'] = 150000;
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('photo')) {
			$error['error'] = $this->upload->display_errors();
			$this->load->view('admin/portfolio', $error);
			// print_r($error);
		} else {

			$info = $this->upload->data();
			$data['photo'] = $info['file_name'];
			$this->Admin_model->savePort($data);
			redirect(base_url('welcome/port_list'), 'refresh');
		}
	}

	public function port_del ($id)
	{
		$this->Admin_model->port_del($id);
		redirect(base_url('welcome/port_list'), 'refresh');
		
	}



// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
	// ------------Template---------------
	public function indexs()
	{

		// $data['carousel'] = $this->Her_model->caro();
		$data['service'] = $this->Her_model->getservice();
		$data['about'] = $this->Her_model->getabout();
		$data['review'] = $this->Her_model->getreview();
		$data['team'] = $this->Her_model->getteam();
		$data['feature'] = $this->Her_model->getfeature();
		$data['fet'] = $this->Her_model->getfet();



		$this->load->view('her/head');
		// $this->load->view('her/carousel', $data);
		$this->load->view('her/carousel');
		$this->load->view('her/feature', $data);
		$this->load->view('her/about', $data);
		$this->load->view('her/feature_2', $data);
		$this->load->view('her/services', $data);
		$this->load->view('her/facts');
		// $this->load->view('her/quote', $data);
		$this->load->view('her/team', $data);
		$this->load->view('her/testimonial', $data);
		$this->load->view('her/foot', $data);


	}
//----------Service---------
	public function servicepage()
	{

		$data['service'] = $this->Her_model->getservice();
		// $this->load->view('her/services',$data);

		$this->load->view('her/servicepage', $data);
	}
//----------About---------
	public function aboutpage()
	{

		$data['about'] = $this->Her_model->getabout();
		// $this->load->view('her/services',$data);

		$this->load->view('her/aboutpage', $data);
	}
//----------project---------
	public function projectpage()
	{

		$data['pro'] = $this->Her_model->getproject();
		// $this->load->view('her/services',$data);

		$this->load->view('her/projectpage', $data);
	}
//----------Feature---------
	public function featurepage()
	{

		$data['feature'] = $this->Her_model->getfeature();
		$data['fet'] = $this->Her_model->getfet();
		// $this->load->view('her/services',$data);

		$this->load->view('her/featurepage', $data);
	}

//---------Team/Testimonial--------
	public function tr()
	{

		$data['team'] = $this->Her_model->getteam();
		$data['review'] = $this->Her_model->getreview();
		// $this->load->view('her/services',$data);

		$this->load->view('her/team & review', $data);
	}


//----------Contact--------
	public function contact()
	{
		$data = $this->input->post();

		$this->Her_model->savcontact($data);	
		$this->load->view('her/contact', $data);
	
	}
//--------Quote--------
	public function quote()
	{
		$data = $this->input->post();

		$this->Her_model->savquote($data);
		$this->load->view('her/quote', $data);

	}
	//----------Email--------
	public function email()
	{
		$data = $this->input->post();

		$this->Her_model->savemail($data);
		$this->load->view('her/foot', $data);

	}


}