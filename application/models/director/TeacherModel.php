<?php
require_once('httpful.phar');

class TeacherModel extends CI_Model {


	private $names;
	private $last_name;
	private $mother_last_name;
	private $course= array();


   // var $uri_web='http://190.117.118.40:4444/WSColegio/rest';

  public function  add($teacher=null)
  {
    $ur=web_service_uri.'/profesor/registrar';
    try {                 
     $response = \Httpful\Request::post($ur)->addHeader('Content-Type', 'application/json;charset=UTF-8')->body($teacher)->send();
     $response=json_decode($response,true);
     return $response;
   } catch (Exception $e) {
    return 'fallo';
  }
} 


public function  GetAll()
{
  $response=null;
  $ur=web_service_uri.'/profesor/listar';
  try {                 
    $response = \Httpful\Request::get($ur)->send();
    $response=json_decode($response,true);
    return $response;

  } catch (Exception $e) {
    return $response;
  }
}   

public function getCurses($codTeacher=null){
  $ur=web_service_uri.'/profesor/listarCursosImpartidos?codProfesor='.$codTeacher;
  $response=null;
  
  try {                 
    $response = \Httpful\Request::get($ur)->send();
    $response=json_decode($response,true);
    return $response;

  } catch (Exception $e) {
    return $response;
  }

}   


}
