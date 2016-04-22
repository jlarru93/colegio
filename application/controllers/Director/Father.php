<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Father extends CI_Controller {

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
			$this->load->model('director/FatherModel');
				//metodo del modelo para obtener la lista de todos los profesores
			$fathers=$this->FatherModel->GetAll();
			echo('<pre>');
			print_r($fathers[0]);
			echo('</pre>');
			$fathers['fathers']=$fathers;

			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/father/father_view',$fathers);
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
			$hoy = getdate();
			echo hash('ripemd160', $hoy['seconds'].$hoy['minutes'].$hoy['hours'].$hoy['mday'].$hoy['mon'].$hoy['year']);
			$this->load->view('director/header_view');
			$this->load->view('director/navigation_view');
			$this->load->view('director/wrapper_view');
			$this->load->view('director/father/add_father_view');
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
			$this->load->view('director/father/add_father_view');
			$this->load->view('director/footer_view');

		}
	}





	public function edit_father()
	{
		$this->load->view('director/header_view');
		$this->load->view('director/navigation_view');
		$this->load->view('director/wrapper_view');
		$this->load->view('director/father/edit_father_view');
		$this->load->view('director/footer_view');
	}

	
}
