<?php 

/**
 * 
 */
class Mage_Change_Model_Resource_Change extends Mage_Tag_Model_Resource_Tag
{
	
	protected function _construct()
	{
		echo "Model Override";
		parent::_construct();
	}
}

?>