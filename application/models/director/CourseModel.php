<?php
require_once('httpful.phar');
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
    public function  add($data)
    {
        $ur=web_service_uri.'/curso/registrar';
     try {                 
       $response = \Httpful\Request::post($ur)->addHeader('Content-Type', 'application/json;charset=UTF-8')->body($data)->send();
       $response=json_decode($response,true);
       return $response;
   } catch (Exception $e) {
    return 'fallo';
}
}    


}
