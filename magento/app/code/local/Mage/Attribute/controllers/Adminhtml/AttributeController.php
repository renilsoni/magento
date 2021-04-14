<?php 

/**
 * 
 */
class Mage_Attribute_Adminhtml_AttributeController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$this->loadLayout()->_setActiveMenu('mage_module1');
		$this->_addContent($this->getLayout()->createBlock('attribute/adminhtml_attribute'));
		$this->renderLayout();
	}
}

?>