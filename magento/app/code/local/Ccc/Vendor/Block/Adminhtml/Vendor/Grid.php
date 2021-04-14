<?php 

/**
 * 
 */
class Ccc_Vendor_Block_Adminhtml_Vendor_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	
	public function __construct()
    {
        parent::__construct();
         
        // Set some defaults for our grid
        $this->setDefaultSort('id');
        $this->setId('vendor_vendor_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        // This is the model we are using for the grid
        return 'ccc_vendor/data_collection';
    }

    protected function _prepareCollection()
    {
        // Get and set our collection for the grid
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);
        //print_r($this->getCollection()->getData());
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        // Add the columns that should appear in the grid
        $this->addColumn('data_id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'right',
                'width' => '50px',
                'index' => 'data_id'
            )
        );
         
        $this->addColumn('first_name',
            array(
                'header'=> $this->__('Names'),
                'index' => 'first_name'
            )
        );         
        return parent::_prepareColumns();
    }    

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}

?>