<?php 

namespace app\controllers;

use mf\controller\action;
use mf\model\container;


use app\models\product;
use app\models\info;



class IndexController extends Action {

		
	public function index() {
		
		$product = Container::getModel('product');

		$products = $product->getProducts();

		$this->view->data = $products;

		$this->render('index', 'layout1');
	}

	public function aboutUs() {

		$info = Container::getModel('info');

		$informations = $info->getInfo();

		$this->view->data = $informations;
		$this->render('aboutUs', 'layout2');
	}
}
?>