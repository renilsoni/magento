<?php

/**
 *
 */
class Ccc_Vendor_Adminhtml_VendorController extends Mage_Adminhtml_Controller_Action {

	protected function _isAllowed() {
		return Mage::getSingleton('admin/session')->isAllowed('vendor/vendor');
	}

	public function indexAction() {
		$this->loadLayout();
		$this->_setActiveMenu('ccc_vendor/vendor');
		$this->renderLayout();
	}

	public function newAction() {
		$this->loadLayout();
		$this->_setActiveMenu('ccc_vendor/vendor');
		$this->renderLayout();
	}

	public function testAction() {

		// $data->setFirstName('Renil');
		// try {
		// 	$data->save();
		// } catch (Exception $e) {
		// 	echo $e->getMessage();
		// }
	}

	public function saveAction() {
		$data = Mage::getModel('ccc_vendor/data');
		$vendorData = $this->getRequest()->getPost('vendor');
		$id = $this->getRequest()->getParam('id');

		$data->setData($vendorData);
		$data->setId($id);

		try {
			$data->save();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		$this->_redirect('*/*/');
		// print_r($this->getRequest()->getPost('vendor'));
	}

	public function editAction() {
		$id = $this->getRequest()->getParam('id');
		$data = Mage::getModel('ccc_vendor/data')->load($id);
		if ($data->getId()) {
			Mage::register('ccc_vendor', $data);
			$this->loadLayout();
			$this->_setActiveMenu('ccc_vendor/vendor');
			$this->renderLayout();
		}
	}

	public function deleteAction() {
		$id = $this->getRequest()->getParam('id');

		if (!$id) {
			echo "Id not found";
		}

		$data = Mage::getModel('ccc_vendor/data')->load($id);
		$data->delete();
		$this->_redirect('*/*/');
	}
}

?>