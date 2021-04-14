<?php 

/**
 * 
 */
class Ccc_User_Adminhtml_UserController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$this->loadLayout()->_setActiveMenu('user/user')->_title(Mage::helper('user')->__('User Grid'));
		$this->_addContent($this->getLayout()->createBlock('user/adminhtml_user'));
		$this->renderLayout();		
	}
}

?>