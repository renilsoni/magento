<?php 

/**
 * 
 */
class Mage_Practice_Adminhtml_PracticeController extends Mage_Adminhtml_Controller_Action
{
	
	public function indexAction()
	{
		$this->loadLayout();
		$this->_addContent($this->getLayout()->createBlock('practice/adminhtml_practice'));
		$this->renderLayout();
	}
}

?>