<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['info'] = "" ;
		$this->load->view('theme/form-1/index', $data);
	}

	public function test_print()
	{
		echo "hello!";
	}
	
	public function init()
	{
		$this->load->model('entry_model');
		//$this->load->class('Entry');
		$entry = new Entry();
		
		$entry->user_id = $this->input->post('user_id');
		$entry->user_url = $this->input->post('user_url');
		$entry->status = 0;

		$success = $this->entry_model->insert_entry($entry);

		if($success){
			$data['info'] = "Got it";
		}else{
			$data['info'] = "Uh Oh! we'l get our monkeys to look at this";
		}
		$this->load->view('theme/form-1/index', $data);
	}
}
