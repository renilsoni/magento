<?php 

/**
 * 
 */
class Ccc_Salesman_Block_Adminhtml_Salesman extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	function __construct()
	{
		parent::__construct();
		$this->_controller = "adminhtml_salesman";
		$this->_blockGroup = "ccc_salesman";
		$this->_headerText = "Manage Salesman";
	}
}

?>