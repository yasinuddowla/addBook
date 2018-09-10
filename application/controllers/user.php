<?php 

	class User extends CI_Controller{
		public function index(){
			$data['users'] = $this->user_model->get_users();
			$data['main_view'] = 'user_view';

			$this->load->view('layouts/main', $data);
		}
		public function register(){
			$data['main_view'] = 'register';

			$this->load->view('layouts/main', $data);
		}
		public function add_user(){
			$data['name'] = $this->input->post('name');
			$data['phone'] = $this->input->post('phone');
			$data['address'] = $this->input->post('address');
			
			$this->user_model->insert($data);

			redirect('user');
		}


	}



 ?>