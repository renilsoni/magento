<?php 

/**
 * 
 */
class Ccc_Salesman_Adminhtml_Salesman_AttributeController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$this->loadLayout()->_setActiveMenu('salesman/salesman');
		$this->_addContent($this->getLayout()->createBlock('salesman/adminhtml_salesman_attribute'));
		$this->renderLayout();
	}
}

?>