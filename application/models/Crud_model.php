<?php 
class Crud_model extends CI_Model{
	 function __construct() { 
         parent::__construct(); 
      }

	// To insert data for user registration 
	public function insert($tablename, $data) { 
	  if ($this->db->insert($tablename, $data)) {
	      return $this->db->insert_id();
	  } 
	}

	// update operation                  
	public function update($tablename, $data, $fieldname, $student_id) 
	{ 
	     $this->db->set($data);
	     $this->db->where($fieldname, $student_id); 
	     $this->db->update($tablename);
	     return true;
	}

	
	  public function selectquery($tablename,$fieldname,$value){
      $this->db->where($fieldname,$value);
     return $this->db->get($tablename)->result();

  }

	  	public function select_query_new($tablename,$datavalues){
      		// $this->db->where($datavalues);
     		return $this->db->get_where($tablename,$datavalues)->result();
 		}

 		  public function selecttable($tablename){
      // $this->db->where($fieldname,$value);
     return $this->db->get($tablename)->result();

  }
}