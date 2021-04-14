<?php 

$installer = $this;
$installer->startSetup();

$installer->getConnection()
			->addColumn($installer->getTable('ccc_salesman/salesman'),'status',
				array(
					'type' => Varien_Db_Ddl_Table::TYPE_INTEGER,
					'length' => 1,
					'default' => 1,
					'nullable' => true,
					'comment' => 'Status',
				)
			);

$installer->endSetup();

?>