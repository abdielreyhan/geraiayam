<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class Login_Model extends CI_Model
{
    public function Login($table,$where)
    {
    	return $this->db->get_where($table,$where);
    }
}
