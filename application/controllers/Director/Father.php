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
			$this->load->model('director/FatherModel');
			$today = getdate();
			$photoName=hash('ripemd160', $today['seconds'].$today['minutes'].$today['hours'].$today['mday'].$today['mon'].$today['year']);

			$father['dniApoderado']=$this->input->post('dni');
			$father['nomApoderado']=$this->input->post('names');
			$father['apePaternoApoderado']=$this->input->post('father_last_name');
			$father['apeMaternoApoderado']=$this->input->post('mother_last_name');//FM
			$father['dirApoderado']=$this->input->post('address_street');
			$father['telfApoderado']=$this->input->post('cellphone');//*
			$father['sexoApoderado']=$this->input->post('sex');//*
			$father['fechaNacApoderado']=$this->input->post('date');
			$father['fotoApoderado']=$photoName;//$this->input->post('photo');

			//agregar apoderado
			$response=$this->FatherModel->add(json_encode($father,true));
			var_dump($response);
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
