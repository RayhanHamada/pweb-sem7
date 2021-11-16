<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pweb extends CI_Model
{
	function read()
	{
		return $this->db->get('tbl_nilai')->result_array();
	}
}
