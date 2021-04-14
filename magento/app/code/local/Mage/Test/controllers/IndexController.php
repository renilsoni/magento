<?php 

/**
 * 
 */
class Mage_Test_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		// echo "<pre>";
		// print_r(get_class_methods($this->getLayout()));
		//echo "<pre>";
		$this->loadLayout();
		//$this->getLayout();
		$this->renderLayout();
	}

	public function testAction()
	{
		echo "123";
	}
}

?>