<?php

include('httpful.phar');

class CourseModel extends CI_Model {



	var $uri_web='http://190.117.118.40:4444/WSColegio/rest';

	public function getCourse($idsection=null)
	{

		$codmaster= json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];
		//'http://misitio.local:4444/WSColegio/rest/profesor/listarCursosDeSeccion?idSeccion=27&codProfesor=P00021'
		$ur=$this->uri_web.'/profesor/listarCursosDeSeccion?idSeccion='.$idsection.'&codProfesor='.$codmaster;
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;


	}
   public function gettypeEvaluation($idcurso=null)
	{

		$codmaster= json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];
		//http://misitio.local:4444/WSColegio/rest/evaluacion/listarTipoEvaluacionPorCurso?codCurso=C015
		$ur=$this->uri_web.'/evaluacion/listarTipoEvaluacionPorCurso?codCurso='.$idcurso;
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
	}

	   public function getScore($idtipo_evaluacion=null,$idCourse=null,$idsection=null)
	{

		$codmaster= json_decode($_COOKIE["user_data_cookie"],true)['codProfesor'];
		//evaluacion/listarNotasPorDetalleCriterio?idSeccion=9&codCurso=C015&codProfesor=P00004&codTipoEvaluacion=TE001
		$ur=$this->uri_web.'/evaluacion/listarNotasPorDetalleCriterio?idSeccion='.$idsection.'&codCurso='.$idCourse.'&codProfesor='.$codmaster.'&codTipoEvaluacion='.$idtipo_evaluacion;
        $response = \Httpful\Request::get($ur)->send();
        $response=json_decode($response,true);
        return $response;
	}
	public function setScore($Evaluations=null){
/*
		echo('<pre>');
		print_r($Evaluations);
		echo('</pre>');*/
	            $ur=$this->uri_web.'/evaluacion/registrarNotas';
         

            try {                 

           $response = \Httpful\Request::post($ur)->addHeader('Content-Type', 'application/json;charset=UTF-8')->body($Evaluations)->send();
          // $response=json_decode($response,true);
           //echo 'correcto';
            } catch (Exception $e) {
                echo 'fallo';
            }

	}
   


}
