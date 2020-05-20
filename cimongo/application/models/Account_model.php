<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Account_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $insertId = $this->mongo_db->insert('account', $data);
        return $insertId;
    }
    
}