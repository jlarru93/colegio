<?php

require_once('httpful.phar');

class CourseModel extends CI_Model {



//	var $uri_web='http://190.117.118.40:4444/WSColegio/rest';

   public function gettypeEvaluation($idcurso=null,$idStudent=null)
	{

		$ur=web_service_uri.'/evaluacion/promedioPorCriterio?codEstudiante='.$idStudent.'&codCurso='.$idcurso;
        $response = \Httpful\Request::get($ur)->send();

        $response=json_decode($response,true);
        return $response;
	}

	   public function getScore($codEstudiante=null,$codCurso=null,$trimestre=null,$codTipoEvaluacion=null)
	{

		//$ur=web_service_uri.'/evaluacion/detalleNota?codEstudiante='.$codEstudiante.'&codCurso='.$codCurso.'&trimestre='.$trimestre.'&codTipoEvaluacion='.$codTipoEvaluacion;
		$ur=web_service_uri.'/evaluacion/detalleNota?codEstudiante='.$codEstudiante.'&codCurso='.$codCurso.'&trimestre='.$trimestre.'&codTipoEvaluacion='.$codTipoEvaluacion;
        $response = \Httpful\Request::get($ur)->send();
        //$response=json_decode($response,true);
        return $response;
	}
   


}
