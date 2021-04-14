<?php 

/**
 * 
 */
class Mage_Attribute_Block_Adminhtml_Attribute extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	
	function __construct()
	{
		parent::__construct();
		$this->_controller = 'adminhtml_attribute';
		$this->_blockGroup = 'mage_attribute';
		$this->_headerText = 'Manage Attribute';
	}
}

?>