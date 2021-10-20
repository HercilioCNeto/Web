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

			$routes['about_us'] = array(
				'route' => '/about_us',
				'controller' => 'indexController',
				'action' => 'aboutUs'
			);

			$this->setRoutes($routes);
		}
	}

 ?>