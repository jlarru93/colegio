<?php
include('httpful.phar');
class FatherModel extends CI_Model {


	private $names;
	private $last_name;
	private $mother_last_name;
	private $students= array();

   //var $uri_web=web_service_uri;



   public function  add($father=null)
   {
      $ur=web_service_uri.'/apoderado/registrar';
      try {                 
         $response = \Httpful\Request::post($ur)->addHeader('Content-Type', 'application/json;charset=UTF-8')->body($father)->send();
         $response=json_decode($response,true);
         return $response;
     } catch (Exception $e) {
        return 'fallo';
    }
}       

public function  GetAll()
{
    $response=null;
    $ur=web_service_uri.'/apoderado/listar';
    try {                 
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
        
    } catch (Exception $e) {
        return $response;
    }
} 

}
