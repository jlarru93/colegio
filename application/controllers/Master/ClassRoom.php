<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClassRoom extends CI_Controller {

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
	public function index()
	{

		//$this->load->helper('cookie');			
		$this->load->model('master/ClassRoomModel');

		//unset($_COOKIE['user_data_cookie']);
		//var_dump($this->input->get_cookie());
		//cargando vistas
		$classrooms=$this->ClassRoomModel->getclassrooms();
		$classrooms['classrooms']=$classrooms;
		$this->load->view('master/header_view');
		$this->load->view('master/navigation_view');
		$this->load->view('master/wrapper_view');
		$this->load->view('master/classroom/classroom_view',$classrooms);
		$this->load->view('master/footer_view');
	}

	
}