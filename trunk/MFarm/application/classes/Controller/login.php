<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function action_index()
	{
		if(Helpers_User::IsAnyUser()){
			$view = View::factory('login');
		}
		else{
			$view = View::factory('newuser');
		}
		$view->title = Helpers_Const::APPNAME." - Granja Mancini";
		$this->response->body($view->render());
	}

	public function action_login(){
		if(isset($_POST['username'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			
			if($user != '' && $pass != ''){
				$log = Helpers_User::get($user, $pass);
				if($log->loaded()){
					$session = Session::instance();
					$session->set('currentuserid', $log->Id);
					$session->set('currentuser', $user);
					
					Helpers_Session::registerEndStatusId();
					HTTP::redirect(Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')));
				}
				else{
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
						'msgtype' => 'msgerror', 'msgtext' => 'Usuario o contrasena incorrectos.')));
				}
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
					'msgtype' => 'msgalert', 'msgtext' => 'Debe ingresar usuario y contrasena.')));
			}
		}
	}
	
	public function action_createfirstuser(){
		if(isset($_POST['username'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$repass = $_POST['repassword'];
			
			if($user != '' && $pass != '' && $repass != ''){
				if(strlen($user) >= 4){
					if(strlen($pass) >= 4 && strlen($repass) >= 4){
						if($pass == $repass){
							$newuser = ORM::factory('user');
							$newuser->UserName = $user;
							$newuser->Password = $pass;
							$newuser->create();
							
							HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login', 
								'msgtype' => 'msgsuccess', 'msgtext' => 'Usuario creado correctamente.')));
						}
						else{
							HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
								'msgtype' => 'msgerror', 'msgtext' => 'Las contrasenas deben ser iguales.')));
						}
					}
					else{
						HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
							'msgtype' => 'msgerror', 'msgtext' => 'Las contrasenas debe tener al menos 4 caracteres.')));
					}
				}
				else{
					HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
							'msgtype' => 'msgerror', 'msgtext' => 'El nombre de usuario debe tener al menos 4 caracteres.')));
				}
			}
			else{
				HTTP::redirect(Route::get('msg')->uri(array('controller' => 'login',
					'msgtype' => 'msgalert', 'msgtext' => 'Debe ingresar usuario y contrasena.')));
			}
		}	
	}
	
	public function action_exit(){
		Helpers_Session::clearSession();
		HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));
	}
}
