<?php
namespace Example\Widget\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "Example.Widget".             *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Standard controller for the Example.Widget package 
 *
 * @FLOW3\Scope("singleton")
 */
class StandardController extends \TYPO3\FLOW3\Mvc\Controller\ActionController {

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}

	public function otherControllerAction() {
		//return 'Hello. This is "other" action of the Standard controller.';
	}

}

?>