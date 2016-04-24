<?php

include('httpful.phar');

class CourseModel extends CI_Model {



//	var $uri_web='http://190.117.118.40:4444/WSColegio/rest';

   public function gettypeEvaluation($idcurso=null)
	{

		$ur=web_service_uri.'/evaluacion/listarTipoEvaluacionPorCurso?codCurso='.$idcurso;
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
	}

	   public function getScore($idtipo_evaluacion=null)
	{

	//	$codmaster= json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];
		//http://misitio.local:4444/WSColegio/rest/evaluacion/listarTipoEvaluacionPorCurso?codCurso=C015
	//	$ur=$this->uri_web.'/evaluacion/listarTipoEvaluacionPorCurso?codCurso='.$idtipo_evaluacion;
     //   $response = \Httpful\Request::get($ur)->send();
   //     $response=json_decode($response,true);
        return '';//$response;
	}
   


}
