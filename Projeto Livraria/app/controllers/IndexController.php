<?php 

namespace app\controllers;

use mf\controller\action;
use mf\model\container;

class IndexController extends Action {

		
	public function index() {

		$this->render('index');
	}
}
?>