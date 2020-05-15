<?php

class Ac extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Am');
	}


	function index(){
		$this->load->model('Am');
		$users=$this->Am->all();
		$data = array();
		$data['users'] = $users;
		$this->load->view('edit' , $data);
	}

	
		function Av()
		{
			$this->load->model('Am');
			$this->form_validation->set_rules( 'name', 'Name' , 'required');
			$this->form_validation->set_rules( 'email', 'Email' , 'required');
			$this->form_validation->set_rules( 'mobile', 'Mobile' , 'required');
			$this->form_validation->set_rules(  'course' , 'Course' ,'required');
			

			if($this->form_validation->run() == false){
				$this->load->view('Av');

			}
			else {
				$formArray = array();
				$formArray['name'] = $this->input->post('name');
				$formArray['email'] = $this->input->post('email');
				$formArray['mobile'] = $this->input->post('mobile');
				$formArray['course'] = $this->input->post('course');
	

				$this->Am->Av($formArray);
				//$this->session->set_flashed('success' , 'Record added!');
				redirect(base_url().'index.php/Ac/edit');

			}

		}
	function edit()

		{
			$this->load->model('Am');
				if ($this->input->post('submit')){
	           

				 	$userid=$this->input->post('checkboxes');
				// print_r($userid);
					for ($i =0; $i<sizeof($userid); $i++){
						$a = $userid[$i];	

					$data = $this->Am->ap($a);
					foreach ($data as $row ) {
					$alpha =  $row ['id'];
					$ids = $alpha;		
					$formArray = array();
				//$formArray['id'] = $alpha;
				//$ids = $alpha;
				$formArray['status'] = $this->input->post('status');
			 	$formArray['remark'] = $this->input->post('remark');
			    $this->Am->beta($formArray,$ids);	
					}
				//echo $data['id'];

				//print_r($data);
					

				
				
				//$formArray = array();
				//$formArray['id'] = $alpha;
			//	$ids = $alpha;
			//	$formArray['status'] = $this->input->post('status');
			 //	$formArray['remark'] = $this->input->post('remark');
			 //	$this->Am->beta($formArray,$ids);
				}
				}
				else
				{
				redirect(base_url().'index.php/Ac/index');
				}
			
//				$this->load->model('Am');
			

//		 	if($this->form_validation->run() == false){
//					$this->load->view('index');

//			}
//			else {
//				$formArray = array();
//				$formArray['status'] = $this->input->post('status');
//			 	$formArray['remark'] = $this->input->post('remark');
//
//			$this->Am->Av($formArray);
//					//$this->session->set_flashed('success' , 'Record adsded!');
			//	 	redirect(base_url().'index.php/Ac/index');
//			}
		}
//				
	//	function Tl_check()
	//	{

	//		if ($this->input->post('xyz')){
	//			$userid=$this->input->post('checkbox');
	//			print_r($userid);
	//		}
	//		else
	//		{
	//			redirect(base_url().'index.php/Ac/index');
	//		}	
	//		
		// }	
		

		}	
	
?>