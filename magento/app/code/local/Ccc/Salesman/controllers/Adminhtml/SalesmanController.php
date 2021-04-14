<?php 

/**
 * 
 */
class Ccc_Salesman_Adminhtml_SalesmanController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$this->loadLayout()->_setActiveMenu('ccc_salesman/salesman');
		$this->renderLayout();
	}

	public function newAction()
	{
		$this->_forward('edit');
	}

	public function editAction()
	{	
		$salesmanId = $this->getRequest()->getParam('id');
		$salesmanModel = Mage::getModel('ccc_salesman/salesman')->load($salesmanId);
		
		if ($salesmanModel->getId()) {
			Mage::register('ccc_salesman',$salesmanModel);
		}
		$this->loadLayout()->_setActiveMenu('ccc_salesman/salesman');
		$this->renderLayout();
	}

	public function saveAction()
	{
		try {
			$salesmanId = $this->getRequest()->getParam('id');
			$salesmanData = $this->getRequest()->getPost('salesman');
			$salesmanModel = Mage::getModel('ccc_salesman/salesman');
			$salesmanModel->setData($salesmanData);
			$salesmanModel->salesman_id = $salesmanId;
			$salesmanModel->save();
			Mage::getSingleton('Adminhtml/Session')->addSuccess('Salesman Save Successfully');
			$this->_redirect('*/*/');
		} catch (Exception $e) {
			
		}
	}

	public function deleteAction()
	{
		try {
			$salesmanId = $this->getRequest()->getParam('id');
			$salesmanModel = Mage::getModel('ccc_salesman/salesman')->load($salesmanId);	
			$salesmanModel->delete();
			Mage::getSingleton('Adminhtml/Session')->addSuccess('Salesman Delete Successfully');
			$this->_redirect('*/*/');
		} catch (Exception $e) {
			
		}
	}
}

?>