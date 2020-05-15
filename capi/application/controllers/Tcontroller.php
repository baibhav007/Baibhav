<?php

class Tcontroller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Tmodel');
	}


	function index(){
		$this->load->model('Tmodel');
		$users=$this->Tmodel->all();
		$data = array();
		$data['users'] = $users;
		$this->load->view('edit' , $data);
	}

	function list(){
		$this->load->model('Tmodel');
		$users=$this->Tmodel->record();
		$data = array();
		$data['users'] = $users;
		$this->load->view('list' , $data);
	}
	
		function create()
		{
			$this->load->model('Tmodel');
			$this->form_validation->set_rules( 'booker_name', 'Booker/s Name' , 'required');
			$this->form_validation->set_rules( 'booker_email', 'Booker/s Email' , 'required');
			$this->form_validation->set_rules( 'booker_contact', 'Booker/s Contact' , 'required');
			$this->form_validation->set_rules(  'corporate_ac_no' , 'Corporate A/C No' ,'required');
			$this->form_validation->set_rules( 'vechile_booked', 'Vehicle To Be Booked' , 'required');
			$this->form_validation->set_rules( 'booked_from', 'Vehicle Required from (Date)' , 'required');
			$this->form_validation->set_rules( 'booked_to', 'Vehicle Required to(Date)' , 'required');
			$this->form_validation->set_rules( 'city_requested',  'City where service Requested' , 'required');
			$this->form_validation->set_rules( 'reporting_address', 'Reporting Address' , 'required');
			$this->form_validation->set_rules( 'reporting_time', 'Reporting Time' , 'required');
			$this->form_validation->set_rules( 'duty_type', 'Duty type' , 'required');
			$this->form_validation->set_rules( 'estimated_usage', 'Estimated Usage' , 'required');
			$this->form_validation->set_rules( 'special_instruction', 'Special Instructions' , 'required');
		
			


			if($this->form_validation->run() == false){
				$this->load->view('create');

			}
			else {
				$formArray = array();
				$formArray['booker_name'] = $this->input->post('booker_name');
				$formArray['booker_email'] = $this->input->post('booker_email');
				$formArray['booker_contact'] = $this->input->post('booker_contact');
				$formArray['corporate_ac_no'] = $this->input->post('corporate_ac_no');
				$formArray['vechile_booked'] = $this->input->post('vechile_booked');
				$formArray['booked_from'] = date('Y-m-d');
				$formArray['booked_to'] = date('Y-m-d');
				$formArray['city_requested'] = $this->input->post('city_requested');
				$formArray['reporting_address'] = $this->input->post('reporting_address');
				$formArray['reporting_time'] = date('H:i:s');
				$formArray['duty_type'] =$this->input->post('duty_type');
				$formArray['estimated_usage'] = $this->input->post('estimated_usage');
				$formArray['special_instruction'] = $this->input->post('special_instruction');



				$this->Tmodel->create($formArray);
				//$this->session->set_flashed('success' , 'Record added!');
				redirect(base_url().'index.php/Tcontroller/edit');

				

			}

		}

		function edit()
		{
			$this->load->model('Tmodel');
				if ($this->input->post('submit')){
	           

				 	$userid=$this->input->post('checkboxes');
				// print_r($userid);
					for ($i =0; $i<sizeof($userid); $i++){
						$a = $userid[$i];	

					$data = $this->Tmodel->ap($a);
					foreach ($data as $row ) {
					$alpha =  $row ['id'];
					$ids = $alpha;		
					$formArray = array();
				//$formArray['id'] = $alpha;
				//$ids = $alpha;
				$formArray['status'] = $this->input->post('status');
			 	$formArray['remark'] = $this->input->post('remark');
			    $this->Tmodel->beta($formArray,$ids);	
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
					redirect(base_url().'index.php/Tcontroller/index');
				}
		}
	
		function admin()
		{
			$this->load->model('Tmodel');
			$this->form_validation->set_rules( 'booker_name', 'Booker/s Name' , 'required');
			$this->form_validation->set_rules( 'booker_email', 'Booker/s Email' , 'required');
			$this->form_validation->set_rules( 'booker_contact', 'Booker/s Contact' , 'required');
			$this->form_validation->set_rules(  'corporate_ac_no' , 'Corporate A/C No' ,'required');


			if($this->form_validation->run() == false){
				$this->load->view('admin');

			}
			else {
				$formArray = array();
				$formArray['booker_name'] = $this->input->post('booker_name');
				$formArray['booker_email'] = $this->input->post('booker_email');
				$formArray['booker_contact'] = $this->input->post('booker_contact');
				$formArray['corporate_ac_no'] = $this->input->post('corporate_ac_no');


				$this->Tmodel->admin($formArray);
				//$this->session->set_flashed('success' , 'Record added!');
				redirect(base_url().'index.php/Tcontroller/Ap');

				

			}

		}
	}

?>
