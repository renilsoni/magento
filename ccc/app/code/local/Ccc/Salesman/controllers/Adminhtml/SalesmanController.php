<?php 

/**
 * 
 */
class Ccc_Salesman_Adminhtml_SalesmanController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$this->loadLayout()->_setActiveMenu('salesman/salesman');
		$this->renderLayout();
	}

	public function newAction()
	{
		$this->_forward('edit');
	}

	public function editAction()
	{
		$salesmanId = $this->getRequest()->getParam('id');
		$salesman = Mage::getModel('salesman/salesman')
			->setStoreId($this->getRequest()->getParam('store', 0))
			->load($salesmanId);

		Mage::register('current_salesman',$salesman);
		Mage::getSingleton('cms/wysiwyg_config')->setStoreId($this->getRequest()->getParam('store'));			
		if ($salesmanId && !$salesman->getId()) {
			$this->_getSession()->addError(Mage::helper('salesman')->__('This Salesman no longer exists!'));
			$this->_redirect('*/*/');
			return;
		}

		$this->loadLayout()->_setActiveMenu('salesman/salesman');
		$this->renderLayout();
	}

	public function saveAction()
	{
		try {
			$salesmanData = $this->getRequest()->getParam('account');
			$salesman = Mage::getSingleton('salesman/salesman');

			if ($salesmanId = $this->getRequest()->getParam('id')) {
				if (!$salesman->load($salesmanId)) {
					throw new Exception("Salesman Not Found");
				}
			}

			$salesman->addData($salesmanData);
			$salesman->save();

			$this->_getSession()->addSuccess('Salesman Added Successfully');
			$this->_redirect('*/*/');
		} catch (Exception $e) {
			$this->_getSession()->addError($e->getMessage());
			$this->_redirect('*/*/');
		}
	}

	public function deleteAction()
	{
		try {
			$salesmanModel = Mage::getSingleton('salesman/salesman');

			if (!$salesmanId = $this->getRequest()->getParam('id')) {
				throw new Exception("Invalid Id");
			}

			if (!$salesmanModel->load($salesmanId)) {
				throw new Exception("Salesman Data Not Found");
			}

			if (!$salesmanModel->delete()) {
				throw new Exception("Error in delete record");	
			}

			Mage::getSingleton('core/session')->addSuccess('Salesman Deleted Successfully');
		} catch (Exception $e) {
			Mage::logException($e);
			Mage::getSingleton('core/session')->addError($e->getMessage());
		}
		$this->_redirect('*/*/');
	}
}

?>