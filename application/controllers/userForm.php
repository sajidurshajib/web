<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserForm extends CI_Controller {

	public function index()
	{
		$this->load->view('userForm/login');
	}
	public function register()
	{
		$this->load->view('userForm/register');
	}

}
