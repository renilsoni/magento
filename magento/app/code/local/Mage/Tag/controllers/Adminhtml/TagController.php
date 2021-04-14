<?php 
require_once(Mage::getModuleDir('controllers','Mage_Adminhtml').DS.'TagController.php');

class Mage_Tag_Adminhtml_TagController extends Mage_Adminhtml_TagController
{
	
	protected function _initAction(){
       echo 123;
       die();
   	}
}

 ?>