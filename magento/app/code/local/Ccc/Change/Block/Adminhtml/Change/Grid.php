<?php 

/**
 * 
 */
class Ccc_Change_Block_Adminhtml_Change_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
	
	function __construct()
	{
		parent::__construct();
	}

	protected function _prepareColumns()
	{
		$columns = parent::_prepareColumns();
		$this->removeColumn('type');
		$this->addColumn('test',
			array(
				'header' => 'Test',
				'index' => 'test'
			)
		);
		return $columns;
	}
}

?>