<?php 

/**
 * 
 */
class Mage_Attribute_Model_Resource_Attribute_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
	protected function _construct()
	{
		$this->_init('mage_attribute/attribute');
	}
}

?>