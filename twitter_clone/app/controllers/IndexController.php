<?php 

namespace app\controllers;

use mf\controller\action;
use mf\model\container;

class IndexController extends Action {

		
	public function index() {

		$this->render('index');
	}
	public function register() {

		$this->render('register');
	}
	public function register_action() {

		print_r($_POST);
		//receive form data

		//success

		//fail
	}
}
?>