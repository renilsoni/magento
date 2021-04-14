<?php 

$this->startSetup();

$this->addAttribute(Ccc_User_Model_Resource_User::ENTITY,'firstname',
	[
		'group' 	=> 'General',
		'input' 	=> 'text',
		'type' 		=> 'varchar',
		'label' 	=> 'Firstname',
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
	]
);

$this->addAttribute(Ccc_User_Model_Resource_User::ENTITY,'lastname',
	[
		'group' 	=> 'General',
		'input' 	=> 'text',
		'type' 		=> 'varchar',
		'label' 	=> 'Lastname',
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
	]
);

$this->endSetup();

 ?>