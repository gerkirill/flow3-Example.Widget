<?php
namespace Example\Widget\ViewHelpers\Widget;
use TYPO3\FLOW3\Annotations as FLOW3;

class ExampleViewHelper extends \TYPO3\Fluid\Core\Widget\AbstractWidgetViewHelper {
	/**
	 * @var \Example\Widget\ViewHelpers\Widget\Controller\ExampleWidgetController
	 * @FLOW3\Inject
	 */
	protected $controller;

	public function render($foo, $bar) {
		//return "Hello, I am widget";
		$response = $this->initiateSubRequest();
		\TYPO3\FLOW3\var_dump($this->getWidgetConfiguration(), 'helper: widget parameters');
		\TYPO3\FLOW3\var_dump($this->renderChildren(), 'helper: rendered content');
		return $response;
	}
}