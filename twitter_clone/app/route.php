<?php 

	namespace app;

	use mf\init\Bootstrap;

	class Route extends Bootstrap {

		protected function initRoutes() {

			$routes['home'] = array(
				'route' => '/',
				'controller' => 'indexController',
				'action' => 'index'
			);

			$routes['register'] = array(
				'route' => '/register',
				'controller' => 'indexController',
				'action' => 'register'
			);

			$routes['register_action'] = array(
				'route' => '/register_action',
				'controller' => 'indexController',
				'action' => 'register_action'
			);

			$this->setRoutes($routes);
		}
	}

 ?>