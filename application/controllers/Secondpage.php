<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secondpage extends CI_Controller {
	public function index()
	{
		$this->load->view('second_message');
	}
}
