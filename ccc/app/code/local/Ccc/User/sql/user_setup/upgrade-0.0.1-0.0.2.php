<?php 

$this->startSetup();

$attributeSetId = Mage::getModel('eav/entity_setup','core_setup')
				->getAttributeSetId('user','default');

$this->run("UPDATE `eav_entity_type` 
			SET `default_attribute_set_id` = '{$attributeSetId}' 
			WHERE `entity_type_code` = 'user'");

$this->endSetup();

?>