<?php

class ResumeController extends Zend_Controller_Action
{

	public function init()
	{
		$this->view->layout = array();
	}

	public function indexAction()
	{
		$this->view->title = 'Resume';
		$this->view->tag   = "Chris's professional resume";
	}


}

