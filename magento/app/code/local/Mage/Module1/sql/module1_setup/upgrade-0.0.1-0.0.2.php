<?php 

$installer = $this;
$installer->startSetup();

$installer->getConnection()
			->addColumn($installer->getTable('mage_module1/module1'),'column_tow',
				array(
					'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
					'length' => 50,
					'nullable' => false,
					'comment' => 'column_tow'
				)
			);

$installer->endSetup();

?>