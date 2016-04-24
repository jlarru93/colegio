<?php

include('httpful.phar');
//require_once('uri.php');

class StudentModel extends CI_Model {


	private $names;
	private $last_name;
	private $mother_last_name;
	private $fathers= array();

//var $uri_web='http://190.117.118.40:4444/WSColegio/rest';    
	  
    public function  add($student)
        {
            $ur=web_service_uri.'/estudiante/registrar';
            try {                 

           $json_student=json_encode($student);
           $response = \Httpful\Request::post($ur)->addHeader('Content-Type', 'application/json;charset=UTF-8')->body($json_student)->send();
           $response=json_decode($response,true);
           echo 'correcto';
            } catch (Exception $e) {
                echo 'fallo';
            }
          
        }
    public function  getall()
        {
            $ur=web_service_uri.'/estudiante/listar';
            $response = \Httpful\Request::get($ur)->send();
            $response=json_decode($response,true);
            return $response;
        }  

      public function  getcourse($codstudent)
        {
            $ur=web_service_uri.'/estudiante/listarCursosWeb?codEstudiante='.$codstudent;
            $response = \Httpful\Request::get($ur)->send();
            $response=json_decode($response,true);
            return $response;
        }  
}
