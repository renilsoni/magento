<?php 

/**
 * 
 */
class Ccc_Vendor_Block_Adminhtml_Vendor extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_controller = 'adminhtml_vendor';
		$this->_blockGroup = 'ccc_vendor';
		$this->_headerText = $this->__('Vendor Manages');
		
		parent::__construct();
	}

	public function getNames()
	{
		echo "I m In Block";
		$data = Mage::getModel('ccc_vendor/data')->getCollection();

		foreach ($data as $key => $value) {
			print_r($value->getFirstName());
		}
	}
}

?>