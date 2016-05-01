<?php
include('httpful.phar');
class CourseModel extends CI_Model {


	private $name;



	public function  GetAll()
{
    $response=null;
    $ur=web_service_uri.'/curso/listar';
    try {                 
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
        
    } catch (Exception $e) {
        return $response;
    }
}   
   

}
