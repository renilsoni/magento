<?php 

/**
 * 
 */
class Ccc_Salesman_Block_Adminhtml_Salesman_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	function __construct()
	{
		parent::__construct();
	}

	protected function _getCollectionClass()
	{
		return 'ccc_salesman/salesman_collection';
	}

	protected function _prepareCollection()
	{
		$collection = Mage::getResourceModel($this->_getCollectionClass());
		$this->setCollection($collection);
		parent::_prepareCollection();
	}

	protected function _prepareColumns()
	{
		$this->addColumn('salesman_id',
			array(
				'header' => $this->__('Id'),
				'index' => 'salesman_id',
				'width' => '50px'
			)
		);

		$this->addColumn('first_name',
			array(
				'header' => $this->__('FirstName'),
				'index' => 'first_name'
			)
		);

		$this->addColumn('last_name',
			array(
				'header' => $this->__('LastName'),
				'index' => 'last_name'
			)
		);

		parent::_prepareColumns();
	}

	public function getRowUrl($row)
	{
		return $this->getUrl('*/*/edit',array('id' => $row->getId()));
	}
}

?>