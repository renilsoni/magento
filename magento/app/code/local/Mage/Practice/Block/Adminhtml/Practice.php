<?php 

/**
 * 
 */
class Mage_Practice_Block_Adminhtml_Practice extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	
	function __construct()
	{
		parent::__construct();
		$this->_controller = 'adminhtml_practice';
		$this->_blockGroup = 'mage_practice';
		$this->_headerText = 'Manage Practice';
	}
}

 ?>