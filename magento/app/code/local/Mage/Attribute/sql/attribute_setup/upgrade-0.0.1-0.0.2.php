<?php 

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()
			->newTable($installer->getTable('mage_attribute/attribute'))
			->addColumn('attribute_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,
				array(
					'identity' => true,
					'nullable' => false,
					'primary' => true
				),'attribute id'
			)

			->addColumn('attribute_name',Varien_Db_Ddl_Table::TYPE_TEXT,null,
				array(
					'nullable' => false,
				),'attribute name'
			);

$installer->getConnection()->createTable($table);
$installer->endSetup();

?>