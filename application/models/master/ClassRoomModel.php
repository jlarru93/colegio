<?php

include('httpful.phar');

class ClassRoomModel extends CI_Model {



	var $uri_web='http://190.117.118.40:4444/WSColegio/rest';
	
	
	public function getclassrooms(){
			$codmaster= json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];			
			//var_dump($_COOKIE["user_data_cookie"]) ;
            $ur=$this->uri_web.'/profesor/listarSecciones?codProfesor='.$codmaster;
            $response = \Httpful\Request::get($ur)->send();
            $response=json_decode($response,true);
            return $response;
        
	}

 

}
