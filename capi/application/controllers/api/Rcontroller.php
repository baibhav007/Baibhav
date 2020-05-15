<?php

require APPPATH.'libraries/REST_Controller.php';

class Rcontroller extends REST_Controller{

  public function __construct(){

    parent::__construct();
    //load database
    $this->load->database();
    $this->load->model(array("api/Rmodel"));
   	$this->load->library(array("form_validation"));
     $this->load->helper("security");
}


 public function index_post(){

  $booker_name = $this->security->xss_clean($this->input->post("booker_name"));
  $booker_email = $this->security->xss_clean($this->input->post("booker_email"));
  $booker_contact =$this->security->xss_clean($this->input->post("booker_contact"));
  $corporate_ac_no =$this->security->xss_clean($this->input->post("corporate_ac_no"));
  $vechile_booked  = $this->security->xss_clean($this->input->post("vechile_booked"));
  $booked_from  = $this->security->xss_clean($this->input->post("booked_from"));
  $booked_to = $this->security->xss_clean($this->input->post("booked_to"));
  $city_requested = $this->security->xss_clean($this->input->post("city_requested"));
  $reporting_address =$this->security->xss_clean($this->input->post("reporting_address"));
  $reporting_time  = $this->security->xss_clean($this->input->post("reporting_time"));
  $duty_type  = $this->security->xss_clean($this->input->post("duty_type"));
  $estimated_usage  = $this->security->xss_clean($this->input->post("estimated_usage"));
  $special_instruction  = $this->security->xss_clean($this->input->post("special_instruction"));
  
   
 	$this->form_validation->set_rules( "booker_name", "Booker/s Name" , "required");
	$this->form_validation->set_rules( "booker_email", "Booker/s Email" ,"required");
	$this->form_validation->set_rules( "booker_contact", "Booker/s Contact" , "required");
	$this->form_validation->set_rules(  "corporate_ac_no" , "Corporate A/C No" ,"required");
	$this->form_validation->set_rules( "vechile_booked", "Vehicle To Be Booked" , "required");
	$this->form_validation->set_rules( "booked_from", "Vehicle Required from (Date)" , "required");
	$this->form_validation->set_rules( 'booked_to', 'Vehicle Required to(Date)' , 'required');
	$this->form_validation->set_rules( 'city_requested',  'City where service Requested' , 'required');
	$this->form_validation->set_rules( 'reporting_address', 'Reporting Address' , 'required');
  $this->form_validation->set_rules( 'reporting_time', 'Reporting Time' , 'required');
	$this->form_validation->set_rules( 'duty_type', 'Duty type' , 'required');
	$this->form_validation->set_rules( 'estimated_usage', 'Estimated Usage' , 'required');
	$this->form_validation->set_rules( 'special_instruction', 'Special Instructions' , 'required');
		
    // checking form submittion have any error or not
    if($this->form_validation->run() === FALSE){

      // we have some errors
      $this->response(array(
        "status" => 0,
        "message" => "All fields are needed"
      ) , REST_Controller::HTTP_NOT_FOUND);
    }else{

      if(!empty($booker_name) && !empty($booker_email) && !empty($booker_contact) && !empty($corporate_ac_no) &&!empty($vechile_booked) && !empty($booked_from) && !empty($booked_to) && !empty($city_requested ) && !empty($reporting_address) && !empty($reporting_time) && !empty($duty_type) && !empty($estimated_usage) && !empty($special_instruction) ){
        // all values are available
        $record = array(
          "booker_name" => $booker_name,
          "booker_email" => $booker_email,
          "booker_contact" => $booker_contact,
          "corporate_ac_no" => $corporate_ac_no,
          "vechile_booked" => $vechile_booked,
          "booked_from" => $booked_from,
          "booked_to" => $booked_to,
          "city_requested" => $city_requested,
        "reporting_address" => $reporting_address,
          "reporting_time" => $reporting_time,
         "duty_type" => $duty_type,
          "estimated_usage" => $estimated_usage,
         "special_instruction" => $special_instruction
        );

        if($this->Rmodel->insert_record($record)){

          $this->response(array(
            "status" => 1,
            "message" => "Record has been created"
          ), REST_Controller::HTTP_OK);
        }else{

          $this->response(array(
            "status" => 0,
            "message" => "Failed to create record"
          ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
        }
      }else{
        // we have some empty field
        $this->response(array(
          "status" => 0,
          "message" => "All fields are needed"
        ), REST_Controller::HTTP_NOT_FOUND);
      }
    }
  }


  public function index_put(){
    // updating data method
    //echo "This is PUT Method";
    $data = json_decode(file_get_contents("php://input"));

    if(isset($data->id) && isset($data->booker_name) && isset($data->booker_email) && isset($data->booker_contact) && isset($data->corporate_ac_no) && isset($data->vechile_booked) 
      && isset($data->booked_from) && isset($data->booked_to) && isset($data->city_requested) && isset($data->reporting_address) && isset($data->reporting_time)  && isset($data->duty_type) && isset($data->estimated_usage) && isset($data->special_instruction)){

      $record_id = $data->id;
      $record_info = array(
        "booker_name" => $data->booker_name,
        "booker_email" => $data->booker_email,
        "booker_contact" => $data->booker_contact,
        "corporate_ac_no" => $data->corporate_ac_no,
        "vechile_booked" => $data->vechile_booked,
        "booked_from" => $data->booked_from,
        "booked_to" => $data->booked_to,
        "city_requested" => $data->city_requested,
        "reporting_address" => $data->reporting_address,
        "reporting_time" => $data->reporting_time,
        "duty_type" => $data->duty_type,
        "estimated_usage" => $data->estimated_usage,
        "special_instruction" => $data->special_instruction
      );

      if($this->Rmodel->update_record_information($record_id, $record_info)){

          $this->response(array(
            "status" => 1,
            "message" => "Record data updated successfully"
          ), REST_Controller::HTTP_OK);
      }else{

        $this->response(array(
          "status" => 0,
          "messsage" => "Failed to update record data"
        ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
      }
    }else{

      $this->response(array(
        "status" => 0,
        "message" => "All fields are needed"
      ), REST_Controller::HTTP_NOT_FOUND);
    }
  }



   public function index_delete(){
    // delete data method
    $data = json_decode(file_get_contents("php://input"));
    $record_id = $this->security->xss_clean($data->record_id);

    if($this->Rmodel->delete_record($record_id)){
      // retruns true
      $this->response(array(
        "status" => 1,
        "message" => "Student has been deleted"
      ), REST_Controller::HTTP_OK);
    }else{
      // return false
      $this->response(array(
        "status" => 0,
        "message" => "Failed to delete student"
      ), REST_Controller::HTTP_NOT_FOUND);
    }
  }

  	public function index_get(){
  
    $records = $this->Rmodel->get_records();
   
    if(count($records) > 0){

      $this->response(array(
        "status" => 1,
        "message" => "Records found",
        "data" => $records
      ), REST_Controller::HTTP_OK);
    }else{

      $this->response(array(
        "status" => 0,
        "message" => "No Records found",
        "data" => $Records
      ), REST_Controller::HTTP_NOT_FOUND);
    }

  }
}
?>