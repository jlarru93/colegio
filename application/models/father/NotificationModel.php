<?php

require_once('httpful.phar');

class NotificationModel extends CI_Model {



//	var $uri_web='http://190.117.118.40:4444/WSColegio/rest';

   public function getNotification()
	{
		$father=json_decode($_COOKIE["user_data_cookie"],true);
		$idFather=$father['codApoderado'];
		$ur=web_service_uri.'/notificacion/listar';//PorApoderado?codApoderado='.$idFather;
        $response = \Httpful\Request::get($ur)->send();

        $response=json_decode($response,true);
        return $response;
	}

	  
   


}
