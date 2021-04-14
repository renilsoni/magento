<?php 

/**
 * 
 */
class Mage_Module1_Model_Resource_Module1_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
	protected function _construct()
	{
		$this->_init('mage_module1/module1');
	}
}


?>