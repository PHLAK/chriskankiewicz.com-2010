<?php

class ContactController extends Zend_Controller_Action
{

	public function init()
	{
		$this->view->layout = array();
	}

	public function indexAction()
	{
		$this->view->title = 'Contact';
		$this->view->tag   = 'Communication works for those who work at it';
	}


}

