<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstallDB extends CI_Controller {

	public function index()
	{
        $this->load->dbforge();

        /*Temp createUserTable*/
        if ($this->db->table_exists('user_data_tmp') ){
            echo " 'user_data_tmp' table exists";
        }
        else{
            $this->load->model('user_table_tmp');
            $this->user_table_tmp->createUserTableTmp();
        }
        // Temp createUserTable Done

        /*createUserTable*/
        if ($this->db->table_exists('user_data') ){
            echo " 'user_data' table exists";
        }
        else{
            $this->load->model('user_table');
            $this->user_table->createUserTable();
        }
        //createUserTable Done


        /*createTeachersTable*/
        if ($this->db->table_exists('teachers_data') ){
            echo " 'teachers_data' table exists";
        }
        else{
            $this->load->model('teachers_table');
            $this->teachers_table->createTeachersTable();
        }
        //createTeachersTable Done
	}

}