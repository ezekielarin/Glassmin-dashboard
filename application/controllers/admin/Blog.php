<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language','file','download'));
		$this->load->library('grocery_CRUD');


		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

	}
	public function _example_output($output = null)
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('example.php',(array)$output);
		$this->load->view('admin/layout/footer');
	}public function manage()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('blog');
			$crud->set_subject('Blog');
			$crud->required_fields('phone');
			$crud->set_field_upload('image','uploads/images');
			$crud->columns('title','post','tag','address','image');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
			
			$user = $this->ion_auth->user()->row();
			$user_id = $data['user_id'] = $user->id;
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->join('users','users.id = blog.user_id', 'on');
			$data['blogs'] = $this->db->get()->result();
			//$data['blog'] = $this->db->query("SELECT * FROM blog join('users', 'users.id = blog.user_id', 'left')")->result();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/blog/home', $data);
		$this->load->view('admin/layout/footer');
		}
	}
    public function edit($id)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
         

			$user = $this->ion_auth->user()->row();
			$user_id = $data['user_id'] = $user->id;
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->where('id',$id);
			//$this->db->join('users','users.id = blog.user_id', 'on');
			$data['blog'] = $this->db->get()->row();

			//$data['blog'] = $this->db->query("SELECT * FROM blog WHERE id=$id join('users','users.id = blog.user_id', 'left')")->row();
		
			
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/blog/edit_post', $data);
		$this->load->view('admin/layout/footer');
		}
	}


    public function new_post()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else
		{
			$user = $this->ion_auth->user()->row();
			$user_id = $data['user_id'] = $user->id;
			
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/nav');
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/blog/new_post', $data);
		$this->load->view('admin/layout/footer');
		}
	}

	public function update()
	{
			
			$update = $this->input->post('update');
		//	$id = $this->input->post('id');	
       if ($update) {
       	$id = $this->input->post('id');	
       
				$data = array(
					'post' => $this->input->post('post'), 
					'title' => $this->input->post('title'), 
					'tag' => $this->input->post('tag'), 
					'slug' => url_title($this->input->post('title')), 
					
				);
				$this->db->where('id', $id);
		$query = $this->db->update('blog', $data);
		
			redirect('admin/blog/edit/'.$id);
       }

	}

	public function add()
	{
			
				$data = array(
					
					'user_id' => $this->input->post('user_id'), 
					'post' => $this->input->post('post'), 
					'title' => $this->input->post('title'), 
					'tag' => $this->input->post('tag'), 
					'post_date' => time("d-m-y H:S:i"), 
					'slug' => url_title($this->input->post('title')), 
					
				);
				$config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10224;
                $config['max_height']           = 8648;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('picture'))
                {
                	$data['image'] = $this->upload->data('file_name');

                   $this->db->insert('blog',$data);

                   redirect('admin/blog');

                }else{
                	echo "error";
                  echo $this->upload->display_errors();
                  
                }
	}



	public function update_img()
	{

		      $id = $this->input->post('id');
		        $config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 10224;
                $config['max_height']           = 8648;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('picture'))
                {
                	$img = $this->upload->data('file_name');
                   $this->img_up($img);

                   redirect('admin/blog/edit/'.$id);

                }else{
                	echo "error";
                  echo $this->upload->display_errors();
                  
                }
                
	}

	public function img_up($img)
	{
		$data = array(
                   	'id' => $this->input->post('id'),
                   	'photo' => $img, 
                   );

                   $this->db->where('id',$data['id']);
                   $this->db->update('excos', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('excos');
        redirect('admin/excos');
	}
}
