<?php 

/**
 * 
 */
class Mage_Module1_Block_Adminhtml_Module1_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	
	function __construct()
	{
		parent::__construct();
	}

	protected function _prepareForm()
	{
		$form = new Varien_Data_Form(
			array(
				'id' => 'edit_form',
				'action' => $this->getUrl('*/*/save',['id' => $this->getRequest()->getParam('id')]),
				'method' => 'POST'
			)
		);

		$form->setUseContainer(true);
		$this->setForm($form);

		$fieldset = $form->addFieldset('display',
			array(
				'legend' => 'Module1 Information',
				'class' => 'fieldset'
			)
		);

		$fieldset->addField('column_one','text',
			array(
				'name' => 'module1[column_one]',
				'required' => true,
				'label' => 'Column One'
			)
		);

		$fieldset->addField('column_tow','text',
			array(
				'name' => 'module1[column_tow]',
				'required' => true,
				'label' => 'Column Two'
			)
		);

		if (Mage::registry('module1_data')) {
			$form->setValues(Mage::registry('module1_data')->getData());
		}

		return parent::_prepareForm();
	}
}

?>