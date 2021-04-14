<?php 

/**
 * 
 */
class Ccc_Salesman_Helper_Salesman extends Mage_Core_Helper_Url
{
	public function getAttributeInputTypes($inputType = null)
	{
		$inputTypes = [
			'multiselect' => [
				'backend_model' => 'eav/entity_attribute_backend_array'
			],
			'boolean' => [
				'source_model' =>'eav/entity_attribute_source_boolean'
			]
		];

		if(is_array($inputType)){
			return $inputType;
		} else if(isset($inputTypes[$inputType])) {
			return $inputTypes[$inputType];
		}
		return array();
	}

	public function getAttributeBackendModelByInputType($inputType)
	{
		$inputTypes = $this->getAttributeInputTypes();
		if (!empty($inputTypes[$inputType]['backend_model'])) {
			return $inputTypes[$inputType]['backend_model'];
		}
		return null;
	}

	public function getAttributeSourceModelByInputType($inputType)
	{
		$inputTypes = $this->getAttributeInputTypes();
		if (!empty($inputTypes[$inputType]['source_model'])) {
			return $inputTypes[$inputType]['source_model'];
		}
		return null;
	}
}

?>