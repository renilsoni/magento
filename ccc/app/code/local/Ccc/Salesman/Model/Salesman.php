<?php 

/**
 * 
 */
class Ccc_Salesman_Model_Salesman extends Mage_Core_Model_Abstract
{
	
	protected function _construct()
	{
		parent::_construct();
		$this->_init('salesman/salesman');
	}

	protected $_attributes;

	public function getAttributes()
	{
		if ($this->_attributes === null) {
			$this->_attributes = $this->_getResource()
				->loadAllAttributes($this)
				->getSortedAttributes();
		}
		return $this->_attributes;
	}

	public function checkInGroup($attributeId, $setId, $groupId)
	{
		$resource = Mage::getSingleton('core/resource');

		$readConnection = $resource->getConnection('core_read');

		$query = "SELECT * FROM 
				{$resource->getTableName('eav/entity_attribute')}
				WHERE `attribute_id` = '{$attributeId}'
				AND `attribute_set_id` = '{$setId}'
				AND `attribute_group_id` = '{$groupId}'";

		$result = $readConnection->fetchRow($query);

		if ($result) {
			return true;
		}
		return false;
	}
}

?>