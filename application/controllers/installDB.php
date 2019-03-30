<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstallDB extends CI_Controller {

	public function index()
	{
        $this->load->dbforge();

        if ($this->db->table_exists('user_data') ){
            echo " 'user_data' table exists";
        }
        else{
            $this->load->model('user_table');
            $this->user_table->createUserTable();
        }
        //createUserTableDone
	}

}