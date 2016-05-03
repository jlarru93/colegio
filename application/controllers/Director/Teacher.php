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
		$this->load->model('director/CourseModel');
			$this->load->model('director/TeacherModel');
		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
			
			$couses=$this->CourseModel->GetAll();
			//cursos que el profesor ya enseñ
			$couses_teacher=$this->TeacherModel->getCurses($idTeacher);

			$couseHigh;
			$couseHigh2 = array();
			$count=0;
			$gradesprimary[0]='1P';
			$gradesprimary[1]='2P';
			$gradesprimary[2]='3P';
			$gradesprimary[3]='4P';
			$gradesprimary[4]='5P';
			$gradesprimary[5]='6P';
			foreach ($couses as $couse) {
				# code...
				
				if (substr($couse['CodGrado'], 1)=='S' ) {
					//cursos secundaria
					$couseHigh[$count]['CodCurso']=$couse['CodCurso'];
					$couseHigh[$count]['DescripCurso']=$couse['DescripCurso'];
					$couseHigh[$count]['CodGrado']=$couse['CodGrado'][0];
					$count++;
				}else{
					//cursos primaria	
				}

			}
			$count=0;
			$count2=0;
			foreach ($couseHigh as  $key => $value) {
				if ($couseHigh2== array()){
					$teach=false;
						foreach ($couses_teacher as $key => $value3) {
							# code...
							if ($value3['CodCurso']==$value['CodCurso']) {
								# code..
								$teach=true;
								break;
							}
							
						}


					$couseHigh2[$count]['DescripCurso']=$value['DescripCurso'];
					if($teach)
					$couseHigh2[$count]['grades'][0]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado'],'teach'=>'TRUE');
					$couseHigh2[$count]['grades'][0]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado'],'teach'=>'FALSE');
					$count++;
				}else{
					$llave=null;
					foreach ($couseHigh2 as $key2 => $value2) {
						if ($value2['DescripCurso']==$value['DescripCurso']) {
							$llave=$key2;
							break;
						}
					}
					if (!is_null($llave)) {
						//virifica si el profesor enseña el curso que se a agregado
						$teach=false;
						foreach ($couses_teacher as $key => $value3) {
							# code...
							if ($value3['CodCurso']==$value['CodCurso']) {
								# code..
								$teach=true;
								break;
							}
							
						}
						if ($teach) {
							# code...
							$couseHigh2[$llave]['grades'][count($couseHigh2[$llave]['grades'])]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado'],'teach'=>'TRUE');
						}else{
							$couseHigh2[$llave]['grades'][count($couseHigh2[$llave]['grades'])]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado'],'teach'=>'FALSE');
						}
						
						$teach=false;
					}else{

						$teach=false;
						foreach ($couses_teacher as $key => $value3) {
							# code...
							if ($value3['CodCurso']==$value['CodCurso']) {
								# code..
								$teach=true;
								break;
							}
							
						}
						$couseHigh2[$count]['DescripCurso']=$value['DescripCurso'];
						if($teach){
							$couseHigh2[$count]['grades'][$count2]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado'],'teach'=>'TRUE');
						}else{
							$couseHigh2[$count]['grades'][$count2]= array('CodCurso' => $value['CodCurso'],'CodGrado'=>$value['CodGrado'],'teach'=>'FALSE');	
						}
						
						
						$count++;
					}
				}
			}

			
			

			//echo('<pre>');
			//print_r($couseHigh2);
			//echo('</pre>');

			$couseHigh['cousesHigh']=$couseHigh2;
			$couseHigh['idTeacher']=$idTeacher;
			$couseHigh['fullNameTeacher']=str_replace('_', ' ', urldecode($fullNameTeacher));
			$couseHigh['gradesprimary']=$gradesprimary;
			
			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/Teacher/relation_course_teacher_view',$couseHigh);
			$this->load->view('director/footer_view');
		}
		else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$idTeacher=$this->input->post('idTeacher');
			$nivel=$this->input->post('level');
			if ($nivel=='S') {
				$count_CodCurso=$this->input->post('CodCurso');

				for ($i=0,$indice=0; $i < $count_CodCurso; $i++) { 
					if (!is_null($this->input->post($i))) {
						$teacher_courses[$indice]['idTeacher']=$idTeacher;
						$teacher_courses[$indice]['CodCurso']=$this->input->post($i);
						$indice++;
					}
				}
				echo('<pre>');
				print_r($teacher_courses);
				echo('</pre>');
			}else if ($nivel=='P') {
				# code...
				echo "11";
			}

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
