<?php 

/**
 * 
 */
class Mage_Module1_Block_Adminhtml_Module1_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	
	function __construct()
	{
		parent::__construct();
		
	}

	protected function _getCollectionClass()
	{
		return 'mage_module1/module1_collection';
	}

	protected function _prepareCollection()
	{
		$collection = Mage::getResourceModel($this->_getCollectionClass());
		$this->setCollection($collection);
		return parent::_prepareCollection();
	}

	protected function _prepareColumns()
	{
		$this->addColumn('module1_id',
			array(
				'header' => 'Id',
				'index' => 'module1_id',
				'width' => '50px'
			)
		);

		$this->addColumn('column_one',
			array(
				'header' => 'Column_One',
				'index' => 'column_one'
			)
		);

		$this->addColumn('column_tow',
			array(
				'header' => 'Column_Two',
				'index' => 'column_tow'
			)
		);

		parent::_prepareColumns();
	}

	public function getRowUrl($row)
	{
		return $this->getUrl('*/*/edit',['id' => $row->getId()]);
	}
}

?>