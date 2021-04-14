<?php 

/**
 * 
 */
class Ccc_User_Model_Resource_User_Collection extends Mage_Catalog_Model_Resource_Collection_Abstarct
{
	protected function _construct()
	{
		$this->setEntity('user');
		parent::_construct();
	}
}

?>