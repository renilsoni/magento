<?php 

$installer = $this;
$installer->startSetup();

$installer->getConnection()
		->addColumn($installer->getTable('ccc_vendor/data'),'last_name',
		array(
			'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
			'length' => 100,
			'nullable' => true,
			'default' => null,
			'comment' => 'Last Name',
		));

$installer->endSetup();


 ?>