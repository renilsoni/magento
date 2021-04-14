<?php 

$this->startSetup();

$this->removeAttribute(Ccc_Salesman_Model_Resource_Salesman::ENTITY,'phoneNo');

$this->addAttribute(Ccc_Salesman_Model_Resource_Salesman::ENTITY,'phoneNo',[
				'group' 	=> 'General',
				'input' 	=> 'text',
				'type' 		=> 'varchar',
				'label' 	=> 'Phone Number',
				'frontend_class' => 'validate-digits',
				'backend' 	=> '',
				'visible'	=> 1,
				'required'  => 0,
				'user_defined' => 1,
				'searchable' => 1,
				'filterable' => 0,
				'comparable' => 1,
				'visible_on_front' => 1,
				'visible_in_advanced_search' => 0,
				'is_html_allowed_on_front' => 1,
				'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
			]);

$this->endSetup();


?>