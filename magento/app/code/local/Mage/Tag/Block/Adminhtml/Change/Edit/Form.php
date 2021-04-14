<?php 

/**
 * 
 */
class Mage_Change_Block_Adminhtml_Change_Edit_Form extends Mage_Adminhtml_Block_Tag_Edit_Form
{
	
	protected function _prepareForm()
	{
		$form = parent::_prepareForm()->getForm();

		$fieldset = $form->getElement('base_fieldset');

		$fieldset->addField('Name','text',
			array(
				'name' => 'name',
				'label' => 'Name',
				'required' => true
			)
		);

		$fieldset->removeField('status');
	}
}

?>