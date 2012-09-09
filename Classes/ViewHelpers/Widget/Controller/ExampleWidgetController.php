<?php
namespace Example\Widget\ViewHelpers\Widget\Controller;

class ExampleWidgetController extends \TYPO3\Fluid\Core\Widget\AbstractWidgetController {
	public function indexAction() {
		$this->view->assign('bar', 'buzz');

		\TYPO3\FLOW3\var_dump($this->widgetConfiguration, 'controller: widget settings over variable');

		$widgetContext = $this->request->getInternalArgument('__widgetContext');
		\TYPO3\FLOW3\var_dump($widgetContext->getWidgetConfiguration(), 'controller: widget settings over context');
	}
}