<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
	}
	public function index($page = 'student')
	{
		$this->load->view('templates/front_header');
		$this->load->view('templates/'.$page);
		$this->load->view('templates/front_footer');
	}


	public function student()
	{
		$this->load->view('templates/front_header');
		$this->load->view('templates/student');
		$this->load->view('templates/front_footer');
	}

	public function faculty()
	{
		$this->load->view('templates/front_header');
		$this->load->view('templates/faculty');
		$this->load->view('templates/front_footer');
	}

	public function mentor()
	{
		$this->load->view('templates/front_header');
		$this->load->view('templates/mentor');
		$this->load->view('templates/front_footer');
	}


}