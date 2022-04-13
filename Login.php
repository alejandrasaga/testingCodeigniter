<?php
	class Login extends CI_Controller{
		function __construct(){
			parent::__construct();
			 
		}

		public function index(){
			$this->load->view('testing/log/Login');
		}
	}