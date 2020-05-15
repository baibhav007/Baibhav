 <?php

class Rmodel extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function get_records(){

    $this->db->select("*");
    $this->db->from("users");
    $query = $this->db->get();

    return $query->result();
  }
  public function insert_record($data = array()){

      return $this->db->insert("users", $data);
  }

  public function delete_record($record_id){

     $this->db->where("id", $record_id);
     return $this->db->delete("users");
   }
  public function update_record_information($id, $informations){

    $this->db->where("id", $id);
    return $this->db->update("users", $informations);
  }
}
?>