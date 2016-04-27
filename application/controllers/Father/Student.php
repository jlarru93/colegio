<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

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

		$this->load->model('father/StudentModel');
	

		$Students=$this->StudentModel->getStudents();
		$Students['Students']=$Students;
	

		$this->load->view('father/header_view');
		$this->load->view('father/navigation_view',$Students);
		$this->load->view('father/wrapper_view');
		$this->load->view('father/student/student_view',$Students);
		$this->load->view('father/footer_view');
	}

		public function course_student($codstudent=null,$nameStudent=null)
	{

		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
				//cargar el modelo
			$this->load->model('father/StudentModel');
			//agregar alumno
			$courses=$this->StudentModel->getcourse($codstudent);
			
			
			$courses['courses']=$courses;
			$courses['codstudent']=$codstudent;
			$courses['nameStudent']=$nameStudent;

			$this->load->view('father/header_view');
			$this->load->view('father/navigation_view');
			$this->load->view('father/wrapper_view');
			$this->load->view('father/student/course_student_view',$courses);
			$this->load->view('father/footer_view');

		}else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{


		}
	}



}
