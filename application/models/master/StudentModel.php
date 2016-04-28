<?php

include('httpful.phar');

class StudentModel extends CI_Model {




	
	public function getStudentFathers($idSeccion=null){			
			//var_dump($_COOKIE["user_data_cookie"]) ;
            $ur=web_service_uri.'/profesor/listarAlumnosPorSeccion?idSeccion='.$idSeccion;
            $response = \Httpful\Request::get($ur)->send();
            $response=json_decode($response,true);
            return $response;
        
	}

 

}
