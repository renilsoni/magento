<?php 

/**
 * 
 */
class Ccc_Salesman_Block_Adminhtml_Salesman_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	public function __construct()
	{
		parent::__construct();
		$this->setId('salesmanGrid');
		$this->setDefaultSort('entity_id');
		$this->setDefaultDir('DESC');
		$this->setSaveParametersInSession(true);
		$this->setUseAjax(true);
		$this->setVarNameFilter('salesman_filter');
	}

	protected function _getStoreId()
	{
		$storeId = (int) $this->getRequest()->getParam('store',0);
		return $storeId;
	}

	public function _prepareCollection()
	{
		$collection = Mage::getModel('salesman/salesman')->getCollection()
						->addAttributeToSelect('firstname')
						->addAttributeToSelect('lastname')
						->addAttributeToSelect('email')
						->addAttributeToSelect('phoneNo');

		$storeId = $this->_getStoreId();

		$collection->joinAttribute(
			'firstname',
			'salesman/firstname',
			'entity_id',
			null,
			'inner',
			$storeId
		);

		$collection->joinAttribute(
			'lastname',
			'salesman/lastname',
			'entity_id',
			null,
			'inner',
			$storeId
		);

		$collection->joinAttribute(
			'email',
			'salesman/email',
			'entity_id',
			null,
			'inner',
			$storeId
		);

		$collection->joinAttribute(
			'phoneNo',
			'salesman/phoneNo',
			'entity_id',
			null,
			'inner',
			$storeId
		);

		$collection->joinAttribute(
			'id',
			'salesman/entity_id',
			'entity_id',
			null,
			'inner',
			$storeId
		);

		$this->setCollection($collection);
		return parent::_prepareCollection();
	}

	protected function _prepareColumns()
	{
		$this->addColumn('Id',
			[
				'header' => Mage::helper('salesman')->__('Id'),
				'width' => '50px',
				'index' => 'id'
			]
		);
		$this->addColumn('FirstName',
			[
				'header' => Mage::helper('salesman')->__('First Name'),
				'width' => '50px',
				'index' => 'firstname'
			]
		);
		$this->addColumn('LastName',
			[
				'header' => Mage::helper('salesman')->__('Last Name'),
				'width' => '50px',
				'index' => 'lastname'
			]
		);
		$this->addColumn('Email',
			[
				'header' => Mage::helper('salesman')->__('Email'),
				'width' => '50px',
				'index' => 'email'
			]
		);
		$this->addColumn('Phone Number',
			[
				'header' => Mage::helper('salesman')->__('Phone Number'),
				'width' => '50px',
				'index' => 'phoneNo'
			]
		);
		$this->addColumn('Id',
			[
				'header' => Mage::helper('salesman')->__('id'),
				'width' => '50px',
				'index' => 'id'
			]
		);

		return parent::_prepareColumns();
	}

	public function getRowUrl($row)
	{
		return $this->getUrl('*/*/edit', ['id' => $row->getId(), 'store' => $this->getRequest()->getParam('store')]);
	}
}

?>