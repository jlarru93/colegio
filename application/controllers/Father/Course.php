<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

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
	public function index($idsection=null)
	{

		
	}

	public function typeEvaluation($idCourse=null)
	{
		//cargando vistas
		$this->load->model('father/CourseModel');
		//metodo del modelo
		$typeEvaluations=$this->CourseModel->gettypeEvaluation($idCourse);	
		//variable a enviar	
	//	echo ('<pre>');
	//	print_r($typeEvaluations);
	//	echo ('<pre>');
		$typeEvaluations['typeEvaluations']=$typeEvaluations;
		//cargar vista
		$this->load->view('father/header_view');
		$this->load->view('father/navigation_view');
		$this->load->view('father/wrapper_view');
		$this->load->view('father/course/type_Evaluation_view',$typeEvaluations);
		$this->load->view('father/footer_view');
		
	}


		public function Score($idtypeEvaluation=null)
	{
		//cargando vistas
	//	$this->load->model('father/CourseModel');
		//metodo del modelo
	//	$typeEvaluations=$this->CourseModel->gettypeEvaluation($idCourse);	
		//variable a enviar	
	//	echo ('<pre>');
	//	print_r($typeEvaluations);
	//	echo ('<pre>');
	//	$typeEvaluations['typeEvaluations']=$typeEvaluations;
		//cargar vista
		$this->load->view('father/header_view');
		$this->load->view('father/navigation_view');
		$this->load->view('father/wrapper_view');
		$this->load->view('father/course/Score_view');
		$this->load->view('father/footer_view');
		
	}


}
