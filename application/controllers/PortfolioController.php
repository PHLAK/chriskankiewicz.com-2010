<?php

class PortfolioController extends Zend_Controller_Action
{

	public function init()
	{
		$this->view->layout = array();
	}

	public function indexAction()
	{
		$this->view->title = "Portfolio";
	}


}

