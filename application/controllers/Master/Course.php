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
					//cargando vistas
					$this->load->model('master/CourseModel');
					//metodo del modelo
					$courses=$this->CourseModel->getCourse($idsection);	
					//variable a enviar	



					$courses['courses']=$courses;
					$courses['idsection']=$idsection;

					//cargar vista
					$this->load->view('master/header_view');
					$this->load->view('master/navigation_view');
					$this->load->view('master/wrapper_view');
					$this->load->view('master/course/courses_view',$courses);
					$this->load->view('master/footer_view');
					
				}

				public function typeEvaluation($idCourse=null,$idsection=null)
				{


					//cargando vistas
					$this->load->model('master/CourseModel');
					//metodo del modelo
					$typeEvaluations=$this->CourseModel->gettypeEvaluation($idCourse);	
					//variable a enviar	
				//	echo ('<pre>');
				//	print_r($typeEvaluations);
				//	echo ('<pre>');
					$typeEvaluations['typeEvaluations']=$typeEvaluations;
					$typeEvaluations['idCourse']=$idCourse;
					$typeEvaluations['idsection']=$idsection;
					//cargar vista
					$this->load->view('master/header_view');
					$this->load->view('master/navigation_view');
					$this->load->view('master/wrapper_view');
					$this->load->view('master/course/type_Evaluation_view',$typeEvaluations);
					$this->load->view('master/footer_view');
					
				}


				public function Score($idtypeEvaluation=null,$idCourse=null,$idsection=null,$DescripTipoEvaluacion=null)
				{
					$this->load->model('master/CourseModel');
					//metodo del modelo
					$response=$this->CourseModel->getScore($idtypeEvaluation,$idCourse,$idsection);	
					$Evaluations=$response;
					//variable a enviar	
					$Evaluations['Evaluations']=$Evaluations;
					$Evaluations['DescripTipoEvaluacion']= $DescripTipoEvaluacion;
				//	$Evaluations['codTipoEvaluacion']= $idtypeEvaluation;
				//	$Evaluations['codCurso']= $idCourse;
			//		$Evaluations['idSeccion']= $idsection;
					//$Evaluations['codProfesor']=json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];;

					if ($this->input->server('REQUEST_METHOD') == 'GET')
					{
					//cargar vista
						$this->load->view('master/header_view');
						$this->load->view('master/navigation_view');
						$this->load->view('master/wrapper_view');
						$this->load->view('master/course/Score_view',$Evaluations);
						$this->load->view('master/footer_view');
					}else if ($this->input->server('REQUEST_METHOD') == 'POST')
					{

						$Evaluations_new=$this->input->post('criterios');

						$Evaluations=json_decode( $this->input->post('evaluaciones'),true);


						for ($i=0; $i < count($Evaluations); $i++) { 

							$Evaluations[$i]['nota']=$this->input->post($Evaluations[$i]['idEvaluacion']);	
							$Evaluations[$i]['codTipoEvaluacion']=$idtypeEvaluation;	
							$Evaluations[$i]['codProfesor']=json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];	
							$Evaluations[$i]['codCurso']=$idCourse;	
							$Evaluations[$i]['idSeccion']=$idsection;	

						}			

						if ($Evaluations_new!='') {
							$conta=0;

							foreach ($response as $res) 
							{
								$fila=count($Evaluations)+$conta;
								$Evaluations[$fila]['nota']=$this->input->post($res['CodEstudiante']);	
								$Evaluations[$fila]['codTipoEvaluacion']=$idtypeEvaluation;	
								$Evaluations[$fila]['codProfesor']=json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];	
								$Evaluations[$fila]['codCurso']=$idCourse;	
								$Evaluations[$fila]['idSeccion']=$idsection;
								$Evaluations[$fila]['idEvaluacion']='0';
								$Evaluations[$fila]['descripEvaluacion']=$Evaluations_new;
								$Evaluations[$fila]['codEstudiante']=$res['CodEstudiante'];

								
							}

						}else{
				//echo "nada";
						}

						$this->CourseModel->setScore(json_encode($Evaluations));
						$response=$this->CourseModel->getScore($idtypeEvaluation,$idCourse,$idsection);	
						$Evaluations=$response;
						//variable a enviar	
						$Evaluations['Evaluations']=$Evaluations;
						$Evaluations['DescripTipoEvaluacion']= $DescripTipoEvaluacion;
						$this->load->view('master/header_view');
						$this->load->view('master/navigation_view');
						$this->load->view('master/wrapper_view');
						$this->load->view('master/course/Score_view',$Evaluations);
						$this->load->view('master/footer_view');

					}

				}


			}
