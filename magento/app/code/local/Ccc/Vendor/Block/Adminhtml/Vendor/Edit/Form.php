<?php 

/**
 * 
 */
class Ccc_Vendor_Block_Adminhtml_Vendor_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	public function _prepareForm()
	{
		$form = new Varien_Data_Form(
			array(
				'id' => 'edit_form',
				'action' => $this->getUrl('*/*/save',['id' => $this->getRequest()->getParam('id')]),
				'method' => 'post'
			)
		);

		$form->setUseContainer(true);
		$this->setForm($form);
		
		$form->addField('first_name','text', array(
			'name' => 'vendor[first_name]',
			'label' => 'First Name'
		));
		// $form->addField('last_name','text', array(
		// 	'name' => 'vendor[]',
		// 	'label' => 'Last Name'
		// ));
		// $form->addField('address','text', array(
		// 	'name' => 'vendor[]',
		// 	'label' => 'Address'
		// ));
		// $form->addField('age','text', array(
		// 	'name' => 'vendor[]',
		// 	'label' => 'Age'
		// ));

		if (Mage::registry('ccc_vendor')) 
		{
			$form->setValues(Mage::registry('ccc_vendor')->getData());
			$form->action = $this->getUrl('*/*/save',['id' => Mage::registry('ccc_vendor')->getId()]);
		}

		return parent::_prepareForm();
	}
}

 ?>