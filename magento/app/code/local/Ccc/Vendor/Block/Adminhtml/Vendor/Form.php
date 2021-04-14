<?php 

/**
 * 
 */
class Ccc_Vendor_Block_Adminhtml_Vendor_Form extends Mage_Adminhtml_Block_Widget_Form_Container
{
	
	public function __construct()
	{
		parent::__construct();
		$this->_blockGroup = "ccc_vendor";
		$this->_controller = "adminhtml_vendor";
		$this->_headerText = $this->__('Edit Form');
	}
}

 ?>