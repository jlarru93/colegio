<?php

require_once('httpful.phar');

class StudentModel extends CI_Model {


	
	public function getStudents(){

			$codApoderado= json_decode($_COOKIE["user_data_cookie"],true)['codApoderado'];			
			//var_dump($_COOKIE["user_data_cookie"]) ;
            $ur=web_service_uri.'/apoderado/listarEstudiantes?codApoderado='.$codApoderado;
            $response = \Httpful\Request::get($ur)->send();
            $this->load->helper('cookie');  
            $cookie = array(
                    'name'   => 'user_data_student_cookie',
                    'value'  => $response,
                    'expire' => time()+86500
                    );
            $this->input->set_cookie($cookie);

            $response=json_decode($response,true);

            return $response;
        
	}

    public function  getcourse($codstudent){

        $ur=web_service_uri.'/estudiante/listarCursosWeb?codEstudiante='.$codstudent;
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
     }  

       public function  getTeachers($codstudent){

        $ur=web_service_uri.'/estudiante/listarProfesores?codEstudiante='.$codstudent;
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
     }


}
