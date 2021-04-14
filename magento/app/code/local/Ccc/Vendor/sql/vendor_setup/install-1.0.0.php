<?php 

$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
		->newTable($installer->getTable('ccc_vendor_data'))
		->addColumn('data_id',
		Varien_Db_Ddl_Table::TYPE_INTEGER,null,
		array(
			'identity' => true,
			'unsigned' =>  true,
			'nullable' => false,
			'primary' => true
		),"Id")	
		->addColumn('first_name',
		Varien_Db_Ddl_Table::TYPE_VARCHAR,null,
		array(
			'nullable' => true,
		),"firstname");

$installer->getConnection()->createTable($table);
$installer->endSetup();

?>