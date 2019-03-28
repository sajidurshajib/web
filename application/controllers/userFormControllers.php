<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserFormControllers extends CI_Controller {

	public function index()
	{
		$this->load->view('userForm/register');
	}
	public function login()
	{
		$this->load->view('userForm/login');
	}

}
