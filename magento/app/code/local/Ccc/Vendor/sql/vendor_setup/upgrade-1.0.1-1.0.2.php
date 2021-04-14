<?php 

$installer = $this;
$installer->startSetup();

$installer->getConnection()
		->changeColumn($installer->getTable('ccc_vendor/data'),'last_name','surname',
		array(
			'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
			'length' => 50,
			'nullable' => true,
			'default' => null,
			'comment' => 'Surname',
		));

$installer->endSetup();


 ?>