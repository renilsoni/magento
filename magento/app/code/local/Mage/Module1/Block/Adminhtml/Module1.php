<?php 

/**
 * 
 */
class Mage_Module1_Block_Adminhtml_Module1 extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	
	 function __construct()
	{
		parent::__construct();
		$this->_controller = 'adminhtml_module1';
		$this->_blockGroup = 'mage_module1';
		$this->_headerText = 'Manage Module1';
	}
}

 ?>