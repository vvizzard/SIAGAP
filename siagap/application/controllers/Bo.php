<?php

class Bo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	public function index() {
		$this->home();
	}
	
	public function home()
	{
		echo 'Hello World!';
	}
	
	public function ap() {
		$this->load->view('bo_ap');
	}
}