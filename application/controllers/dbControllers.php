<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DbControllers extends CI_Controller {

	public function index()
	{
        $this->load->model('user_table');
        $this->user_table->createUserTable();
	}

}