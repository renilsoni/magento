<?php 

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()
		->newTable($installer->getTable('mage_module1/module1'))
		->addColumn('module1_id',Varien_Db_Ddl_Table::TYPE_INTEGER,NULL,
			array(
				'identity' => true,
				'primary' => true,
				'nullable' => false,
				'unsigned'=> true
			),'module1_id'
		)
		->addColumn('column_one',Varien_Db_Ddl_Table::TYPE_VARCHAR,50,
			array(
				'nullable' => false
			),'column_one'
		);


$installer->getConnection()->createTable($table);
$installer->endSetup();


?>