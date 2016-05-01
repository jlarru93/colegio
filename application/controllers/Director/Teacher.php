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

		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
				//cargar modelo
			$this->load->model('director/TeacherModel');
				//metodo del modelo para obtener la lista de todos los profesores
			$teachers=$this->TeacherModel->GetAll();
			
			$teachers['teachers']=$teachers;
			$this->load->model('director/TeacherModel');
			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/Teacher/teacher_view',$teachers);
			$this->load->view('director/footer_view');		
		}
		//post
		else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{

		}

		
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

			
			$this->TeacherModel->add(json_encode($teacher,true));
			//cargar WEb
			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/Teacher/add_teacher_view');
			$this->load->view('director/footer_view');



			

		}
	}




	public function relation_course_teacher($idTeacher=null,$fullNameTeacher=null)
	{
		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
			$this->load->model('director/CourseModel');
			$couses=$this->CourseModel->GetAll();

			$couseHigh;
			$couseHigh2 = array();
			$count=0;
			foreach ($couses as $couse) {
				# code...
				
				if (substr($couse['CodGrado'], 1)=='S' ) {
					$couseHigh[$count]['CodCurso']=$couse['CodCurso'];
					$couseHigh[$count]['DescripCurso']=$couse['DescripCurso'];
					$couseHigh[$count]['CodGrado']=$couse['CodGrado'][0];
					$count++;



				}

			}
			$count=0;
			$count2=0;


			foreach ($couseHigh as  $key => $value) {

				if ($couseHigh2== array()){
					$couseHigh2[$count]['DescripCurso']=$value['DescripCurso'];
					$couseHigh2[$count]['grades'][0]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado']);
					$count++;
				}else{

					$llave=null;
					foreach ($couseHigh2 as $key2 => $value2) {
						if ($value2['DescripCurso']==$value['DescripCurso']) {
							$llave=$key2;
							break;
						}
					}
					if ($llave!=null) {
						$couseHigh2[$llave]['grades'][count($couseHigh2[$llave]['grades'])]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado']);

					}else{
						$couseHigh2[$count]['DescripCurso']=$value['DescripCurso'];
						$couseHigh2[$count]['grades'][$count2]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado']);
						$count++;
					
					}
					
						

				}




				



			}


			echo('<pre>');
			print_r($couseHigh2);
			echo('</pre>');

			$couseHigh['couseHigh']=$couseHigh;
			$couseHigh['idTeacher']=$idTeacher;
			$couseHigh['fullNameTeacher']=$fullNameTeacher;

			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/Teacher/relation_course_teacher_view',$couseHigh);
			$this->load->view('director/footer_view');
		}
		else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{

		}
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
