<?php

class MiscController extends Zend_Controller_Action
{

	public function init()
	{
		$this->view->layout = array();
	}

	public function payAction()
	{
		$this->view->title = 'Pay';
	}


}

