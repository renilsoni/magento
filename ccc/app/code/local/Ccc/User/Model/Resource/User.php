<?php 

/**
 * 
 */
class Ccc_User_Model_Resource_User extends Mage_Eav_Model_Entity_Abstract
{
	const ENTITY = 'user';
	
	protected function _construct()
	{
		parent::_construct();
		$this->setType(self::ENTITY)
		 	 ->setConnection('core_read','core_write');
	}
}

?>