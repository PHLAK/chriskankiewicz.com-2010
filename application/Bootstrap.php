<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDoctype()
	{
		$this->bootstrap('view');
		$view = $this->getResource('view');
		$view->doctype('XHTML1_TRANSITIONAL');
	}
}

require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Router/Route.php';

$ctrl  = Zend_Controller_Front::getInstance();
$router = $ctrl->getRouter();

// Pay
$router->addRoute(
    'pay',
    new Zend_Controller_Router_Route('pay',
                               array('controller'   => 'misc',
                                     'action'       => 'pay'))
);

