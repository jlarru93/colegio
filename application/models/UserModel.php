<?php
include('httpful.phar');
//require_once('uri.php');
class UserModel extends CI_Model {

	var $uri_web='http://190.117.118.40:4444/WSColegio/rest';

	function login($name_user,$password,$remember) {
		$ur=$this->uri_web.'/usuario/login?nombreUsuario='.$name_user.'&clave='.$password;
		$response = \Httpful\Request::post($ur)->send();
		$response=json_decode($response,true);
		
		$active=$response['estadoUsuario'];

		if ($active=='ACTIVO') {


			//t1 :  profesor -- t2 : apoderado -- t3 : director
			$type_user=$response['tipoUsuario']['descripTipoUsuario'];
			$this->load->helper('cookie');	


			//cookie que almaceda datos para iniciar session
			$user_session= array(
				'cod_user'=>$response['codUsuario'],
				'name_user' => $name_user,					
				'type_user' => $type_user,
				'login'=>true
				);
			$this->session->set_userdata($user_session);

			//cookie para guardar datos de la session, usuario y contraseña.
			if ($remember=='true') {

				$user_cookie= array(
					'name_user' => $name_user,					
					'password' => $password,
					);
			//	print_r($user_cookie);
				setcookie('user_cookie',json_encode($user_cookie));

			}
			//almacena cookie segun tipo de usuario
			if ($type_user=='Director') {
				$cookie = array(
					'name'   => 'user_data_cookie',
					'value'  => json_encode($response['director']),
					'expire' => time()+86500
					);

				$this->input->set_cookie($cookie);

			//	setcookie('user_data_cookie',json_encode($response['director']));
				redirect('/Director/Student/index');
			}
			else if ($type_user=='Profesor') 
			{

					// set cookie
				$cookie = array(
					'name'   => 'user_data_cookie',
					'value'  => json_encode($response['profesor']),
					'expire' => time()+86500
					);

				$this->input->set_cookie($cookie);


					//setcookie('user_data_cookie',json_encode($response['profesor']);
					//	echo $_COOKIE["user_data_cookie"];
				redirect('Master/ClassRoom/index');
			}
			else if ($type_user=='Apoderado') 
			{
										// set cookie
				$cookie = array(
					'name'   => 'user_data_cookie',
					'value'  => json_encode($response['apoderado']),
					'expire' => time()+86500
					);




				$this->input->set_cookie($cookie);


				redirect('father/student/index');
						//setcookie('user_data_cookie',json_encode($response['apoderado']));
			}









			//echo('<pre>');
			//echo json_encode($response['profesor']);
			//echo('</pre>');
			//redirect('/Student/index');
		}else{
			redirect('/Main/index');
		}

	}

}
