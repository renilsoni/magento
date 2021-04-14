<?php 

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()
		->newTable($installer->getTable('ccc_salesman/salesman'))
		->addColumn('salesman_id',
			Varien_Db_Ddl_Table::TYPE_INTEGER,null,
			array(
				'identity' => true,
				'nullable' => false,
				'primary' => true
			),"Salesman Id"
		)
		->addColumn('first_name',
			Varien_Db_Ddl_Table::TYPE_TEXT,50,
			array(
				'nullable' => false
			),"Firstname"
		)
		->addColumn('last_name',
			Varien_Db_Ddl_Table::TYPE_TEXT,50,
			array(
				'nullable' => false
			),"Lastname"
		);
		
$installer->getConnection()->createTable($table);
$installer->endSetup();

 ?>