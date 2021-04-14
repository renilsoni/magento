<?php

$this->startSetup();
$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->addAttribute(catalog_product, 'featured_product', array(
			'group' => 'General',
			'input' => 'select',
			'type' => 'text',
			'label' => 'Featured Product',
			'backend' => '',
			'visible' => true,
			'required' => false,
			'visible_on_front' => true,
			'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
			'source' => 'eav/entity_attribute_source_boolean',
			'sort_order' => 8,
		));

$this->endSetup();