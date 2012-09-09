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
		\TYPO3\FLOW3\var_dump($this->arguments, 'helper: $this->arguments');
		\TYPO3\FLOW3\var_dump($this->getWidgetConfiguration(), 'helper: $this->getWidgetConfiguration()');
		\TYPO3\FLOW3\var_dump($this->renderChildren(), 'helper: $this->renderChildren()');
		return $response;
	}
}