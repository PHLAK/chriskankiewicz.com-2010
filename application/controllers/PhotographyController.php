<?php

class PhotographyController extends Zend_Controller_Action
{

	public function init()
	{
		$this->view->css 	= array();
		$this->view->layout = array();
		$this->view->js 	= array();
	}

	public function indexAction()
	{
		$this->view->title = 'Photography';
		$this->view->tag   = 'I believe in equality for everyone, except reporters and photographers';
		$this->view->css   = '/css/ubergallery.css';
	}


}

