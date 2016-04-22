<?php
include('httpful.phar');
class FatherModel extends CI_Model {


	private $names;
	private $last_name;
	private $mother_last_name;
	private $students= array();

     var $uri_web='http://190.117.118.40:4444/WSColegio/rest';
    

 public function  getnombre()
 {
    echo $this->nombre;
}      

public function  setnombre($nombre)
{
    $this->nombre=$nombre;
}      

public function  GetAll()
{
    $response=null;
    $ur=$this->uri_web.'/apoderado/listar';
    try {                 
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
        
    } catch (Exception $e) {
        return $response;
    }
} 

}
