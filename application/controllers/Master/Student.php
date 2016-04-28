<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
	public function index($idSeccion=null)
	{
		
		$this->load->model('master/StudentModel');

		//cargando vistas
		$Students=$this->StudentModel->getStudentFathers($idSeccion);
	

		$Students['Students']=$Students;

		//$classrooms['classrooms']=$classrooms;
		$this->load->view('master/header_view');
		$this->load->view('master/navigation_view');
		$this->load->view('master/wrapper_view');
		$this->load->view('master/Student/student_view',$Students);
		$this->load->view('master/footer_view');
	}

	
}