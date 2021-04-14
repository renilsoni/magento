<?php 

/**
 * 
 */
class Ccc_Change_Model_Resource_Change extends Mage_Catalog_Model_Resource_Product
{
	
	protected function _construct()
	{
		echo "Model Override";
		parent::_construct();
	}
}

?>