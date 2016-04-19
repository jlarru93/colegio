<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

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
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/Teacher/teacher_view');
		$this->load->view('director/footer_view');
	}
	public function add()
	{


		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/Teacher/add_teacher_view');
		$this->load->view('director/footer_view');
		}
		//post
		else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
		
			//cargar modelo
			$this->load->model('director/TeacherModel');


			$teacher['nomProfesor']=$this->input->post('names');
			$teacher['apePaternoProfesor']=$this->input->post('father_last_name');
			$teacher['apeMaternoProfesor']=$this->input->post('mother_last_name');
			$teacher['sexoProfesor']=$this->input->post('sex');//FM
			$teacher['dirProfesor']=$this->input->post('address_street');
			$teacher['emailProfesor']=$this->input->post('email');//*
			$teacher['telfProfesor']=$this->input->post('cellphone');//*
			$teacher['fechaNacProfesor']=$this->input->post('date');

			
			echo('<pre>');
			print_r($this->TeacherModel->add(json_encode($teacher,true)));
			echo('</pre>');


		}
	}
		public function relation_course_teacher()
	{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/Teacher/relation_course_teacher_view');
		$this->load->view('director/footer_view');
	}
		public function course_teacher()
	{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/Teacher/course_teacher_view');
		$this->load->view('director/footer_view');
	}
	
}
