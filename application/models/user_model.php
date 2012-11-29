<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require 'mysql.php';

class User_model extends CI_Model 
{

    public function __construct()
    {
        parent::__construct();
    }
    
    function get_user_info($id){
    	$this->db->select('user.*');
    	$this->db->from('user');
    	$this->db->where('user.id', $id);
    	
    	$array = $this->db->get();
    	$record_set = $array->result_array();
    	return $record_set;     	   	
    }
    
    function get_user_id($array_data){
    	$this->db->select('user.id');
    	$this->db->from('user');
    	$this->db->where('user.user_id', $array_data['user_id']);
    	$this->db->where('user.password', $array_data['password']);
    	
    	$array = $this->db->get();
    	$record_set = $array->result_array();
		$id = ($array->num_rows() > 0) ? $record_set[0]['id'] : 0;
    	return $id;     	   	    	
    }
}