<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /* NULL */
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

