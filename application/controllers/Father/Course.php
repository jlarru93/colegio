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

	public function typeEvaluation($idCourse=null,$idStudent=null,$nameStudent=null,$nameTeacher=null,$nameCurso=null)
	{
		//cargando vistas
		$this->load->model('father/CourseModel');

		
		
		//metodo del modelo
		$typeEvaluations=$this->CourseModel->gettypeEvaluation($idCourse,$idStudent);	
		//variable a enviar	
	//	echo ('<pre>');
	//	print_r($typeEvaluations);
	//	echo ('<pre>');
		$typeEvaluations['typeEvaluations']=$typeEvaluations;
		$typeEvaluations['idCourse']=$idCourse;
		$typeEvaluations['idStudent']=$idStudent;

		$typeEvaluations['nameStudent']=$nameStudent;
		$typeEvaluations['nameTeacher']=$nameTeacher;
		$typeEvaluations['nameCurso']=$nameCurso;
		//cargar notificaciones
		$this->load->model('father/NotificationModel');
		$notificaion=$this->NotificationModel->getNotification();
		$notificaion['notificaions']=$notificaion;

		//cargar vista
		$this->load->view('father/header_view');
		$this->load->view('father/navigation_view',$notificaion);
		$this->load->view('father/wrapper_view');
		$this->load->view('father/course/type_Evaluation_view',$typeEvaluations);
		$this->load->view('father/footer_view');
		
	}


		public function Score()
	{
		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{

			//echo  ;
		}else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{

			$response=json_decode($this->input->post('codEstudiante'),true);
			
				$this->load->model('father/CourseModel');
			$codEstudiante=$response['idStudent'];
			$codCurso=$response['idCourse'];
			$trimestre=$response['trimestre'];
			$codTipoEvaluacion=$response['CodTipoEvaluacion'];

			$response=$this->CourseModel->getScore($codEstudiante,$codCurso,$trimestre,$codTipoEvaluacion);	

			echo $response;
		}
		
		
	}


}
