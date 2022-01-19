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

			$this->setRoutes($routes);
		}
	}

 ?>