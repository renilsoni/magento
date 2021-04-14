<?php 

/**
 * 
 */
class Mage_Module1_Model_Resource_Module1 extends Mage_Core_Model_Resource_Db_Abstract
{
	protected function _construct()
	{
		$this->_init('mage_module1/module1','module1_id');
	}
}

 ?>