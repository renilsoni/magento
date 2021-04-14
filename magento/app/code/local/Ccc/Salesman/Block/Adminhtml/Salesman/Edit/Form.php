<?php 

/**
 * 
 */
class Ccc_Salesman_Block_Adminhtml_Salesman_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
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
				'legend' => 'Salesman Infromation',
				'class' => 'fieldset'
			)
		);

		$fieldset->addField('first_name','text',
			array(
				'name' => 'salesman[first_name]',
				'label' => 'First Name',
				'required' => true
			)
		);

		$fieldset->addField('last_name','text',
			array(
				'name' => 'salesman[last_name]',
				'label' => 'Last Name',
				'required' => true
			)
		);

		if (Mage::registry('ccc_salesman')) {
			$form->setValues(Mage::registry('ccc_salesman')->getData());
		}

		parent::_prepareForm();
	}
}

?>