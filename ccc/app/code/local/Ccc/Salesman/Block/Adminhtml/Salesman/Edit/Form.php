<?php 

/**
 * 
 */
class Ccc_Salesman_Block_Adminhtml_Salesman_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	protected function _prepareForm()
	{
		$form = new Varien_Data_Form([
			'id' => 'edit_form',
			'action' => $this->getUrl('*/*/save',array('id' => $this->getRequest()->getParam('id'))),
			'method' => 'POST',
			'enctype' => 'multipart/form_data'
		]);

		$form->setUseContainer(true);
		$this->setForm($form);
		return parent::_prepareForm();
	}
}

?>