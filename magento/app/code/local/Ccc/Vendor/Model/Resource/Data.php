<?php 

/**
 * 
 */
class Ccc_Vendor_Model_Resource_Data extends Mage_Core_Model_Resource_Db_Abstract
{
	protected function _construct()
	{
		$this->_init('ccc_vendor/data','data_id');
	}
}

 ?>