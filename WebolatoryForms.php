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
	* @param string $id        Field id.
	* @param array $properties Field properties.
	*
	* @return void.	
	*/
	public function addField( $id, $properties ) {

		$this->form_fields[ $id ] = $this->combine_properties(
			array(
				'id'			=> $id,
				'type'			=> null,
				'name'			=> null,
				'class'			=> null,
				'value'			=> null,
				'placeholder'	=> null,
				'required'		=> false,
				'before'		=> null,
				'after'			=> null,
			),
			$properties
		);
	}

	/**
	* Combined properties.
	*
	* @param array  $default_properties Default properties.
	* @param array  $properties         User properties.
	*
	* @return array Combined and filtered properties list.
	*/
	public function combine_properties( $default_properties, $properties ) {

		$return = array();
		$properties = (array) $properties;

		foreach ( $default_properties as $key => $default_value ) {

			$return[ $key ] = array_key_exists( $key, $properties ) ? $properties[ $key ] : $default_value;
		}

		return $return;
	}

	/**
	* Get fiels.
	*
	* @param string $id Field id.
	* @param string $field_property Field property.
	*
	* @return string Display in HTML.	
	*/
	public function getFiels( $id, $field_property ) {

		extract( $field_property );

		$required = true === $required ? 'required' : '';

		switch ( $type ) {

			case 'text':
				return $before . '<input type="text" id="' . $id . '" class="webolatory-form-text ' . $class . '" name="' . $name . '" value="' . $value . '" placeholder="' . $placeholder . '" ' . $required . '>' . $after;
				break;

			case 'submit':
				return $before . '<input type="submit" id="' . $id . '" class="webolatory-form-submit ' . $class . '" name="' . $name . '" value="' . $value . '">' . $after;
				break;
		}
	}

	/**
	* Show fiels.
	*
	* @param string $id Field id.
	* @param string $field_property Field property.
	*
	* @return void.	
	*/
	public function showFiels( $id, $field_property ) {

		echo $this->getFiels( $id, $field_property );
	}

	/**
	* Get form.
	*
	* @return string Display in HTML.	
	*/
	public function getForm() {

		ob_start();

		?>
		<form id="webolatory-form <?php echo $this->form_id; ?>">
			
			<?php foreach ( $this->form_fields as $field_id => $field_property ) : ?>
			
				<?php $this->showFiels( $field_id, $field_property ); ?>

			<?php endforeach; ?>

		</form>
		<?php

		$html = ob_get_contents();
		ob_end_clean();
		
		return $html;
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
