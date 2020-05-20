<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Show_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function getAll($condition=[])
    {
		if (sizeof($condition) >0){
			$this->mongo_db->where($condition);
		}
    	$test = $this->mongo_db->get('account');
    	return $test;
    }
  
}