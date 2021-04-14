<?php 

/**
 * 
 */
class Mage_Module1_Adminhtml_Module1Controller extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$this->loadLayout()->_setActiveMenu('mage_module1');
		$this->renderLayout();
	}

	public function newAction()
	{
		$this->_forward('edit');
	}

	public function editAction()
	{
		try {
			$module1Id = $this->getRequest()->getParam('id');
			$module1Data = Mage::getModel('mage_module1/module1')->load($module1Id);

			if ($module1Data->getId()) {
				Mage::register('module1_data',$module1Data);
			}

			$this->loadLayout()->_setActiveMenu('mage_module1');
			$this->renderLayout();
		} catch (Exception $e) {
			
		}
	}

	public function saveAction()
	{
		$module1Data = $this->getRequest()->getPost('module1');
		$module1Id = $this->getRequest()->getParam('id');
		$module1Model= Mage::getModel('mage_module1/module1');
		$module1Model->setData($module1Data);
		$module1Model->setId($module1Id);
		$module1Model->save();

		Mage::getSingleton('adminhtml/session')->addSuccess('Record Save Successfully');

		$this->_redirect('*/*/');
	}

	public function deleteAction()
	{
		$module1Id = $this->getRequest()->getParam('id');
		$module1Data = Mage::getModel('mage_module1/module1')->load($module1Id);
		$module1Data->delete();

		Mage::getSingleton('adminhtml/session')->addSuccess('Record Delete Successfully');

		$this->_redirect('*/*/');
	}
}

?>