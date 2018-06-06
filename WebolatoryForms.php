<?php
/**
 * Webolatory Forms.
 *
 * @package		Webolatory Forms
 * @author		Andrew Skochelias
 */

/**
 * Class WebolatoryForms.
 */
class WebolatoryForms {

    /**
     * Form id
     *
     * @var string
     */
	var $form_id = null;

    /**
     * Form fields
     *
     * @var array
     */
	var $form_fields = array();

	/**
	* Set form id
	*
	* @return void.	
	*/
	public function setFormId( $id ) {

		$this->form_id = $id;
	}

	/**
	* Add field to form.
	*
	* @param string $id Field id.
	* @param string $type Field type.
	* @param string $name Field name.
	* @param string $class Field class.
	* @param string $value Field value.
	* @param boolenan $required Required field.
	*
	* @return void.	
	*/
	public function addField( $id, $type, $name, $class = null, $value = null, $required = false ) {

		$this->form_fields[ $id ] = array(
			'type'		=> $type,
			'name'		=> $name,
			'id'		=> $id,
			'class'		=> $class,
			'value'		=> $value,
			'required'	=> $required,
		);
	}

	/**
	* Show form.
	*
	* @return string Display in HTML.	
	*/
	public function getForm() {
		
	}

	/**
	* Show form.
	*
	* @return void.	
	*/
	public function showForm() {

		echo $this->getForm();
	}
}
