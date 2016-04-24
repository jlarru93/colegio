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
	public function index($search=null)
	{

		//cargar modelo
		$this->load->model('director/StudentModel');

		//cargando vistas
		$alumnos=$this->StudentModel->getall();
		// echo('<pre>');
		// print_r($alumnos);
		// echo('</pre>');
		$alumnos['alumnos']=$alumnos;
		$alumnos['search']=$search;
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/student/student_view',$alumnos);
		$this->load->view('director/footer_view');
	}
	public function score_student()
	{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/student/score_student_view');
		$this->load->view('director/footer_view');
	}
	public function detail_score_student()
	{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/director/student/detail_score_student_view');
		$this->load->view('director/footer_view');
	}
	public function add_student()
	{
		//get
		if ($this->input->server('REQUEST_METHOD') == 'GET'){
			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/student/add_student_view');
			$this->load->view('director/footer_view');
		}
		//post
		else if ($this->input->server('REQUEST_METHOD') == 'POST'){
			//recojer datos de la vista	
			$student['nomEstudiante']=$this->input->post('name_student');
			$student['apePaternoEstudiante']=$this->input->post('last_name');
			$student['apeMaternoEstudiante']=$this->input->post('mother_last_name');
			$student['fechaNacEstudiante']=$this->input->post('Birthdate');
			$student['sexoEstudiante']=$this->input->post('gender');
			$student['dniEstudiante']=$this->input->post('dni');
			$student['fotoEstudiante']='null';

			//cargar el modelo
			$this->load->model('director/StudentModel');
			//agregar alumno
			$this->StudentModel->add($student);

			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/student/add_student_view');
			$this->load->view('director/footer_view');
		}
	}

	public function relation_father_student()
	{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/student/relation_father_student_view');
		$this->load->view('director/footer_view');
	}

	public function father_student()
	{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/student/father_student_view');
		$this->load->view('director/footer_view');
	}

	public function course_student($codstudent=null)
	{
		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
				//cargar el modelo
			$this->load->model('director/StudentModel');
			//agregar alumno
			$courses=$this->StudentModel->getcourse($codstudent);
			
			
			$courses['courses']=$courses;
		
			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/student/course_student_view',$courses);
			$this->load->view('director/footer_view');

		}else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{


		}
	}
}
