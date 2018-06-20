# Webolatory Forms

Simple library for quick form creation.

## Installation

```php
<?php
require_once( '../webolatory-forms/WebolatoryForms.php' );
```
## Example

```php
<?php
require_once( '/webolatory-forms/WebolatoryForms.php' );

// Init form
$form = new WebolatoryForms();
$form->setFormId( 'add_post' );

// Add post title field
$form->addField( 'post_title',
	array(
		'type'			=> 'text',
		'name'			=> 'post_title',
		'class'			=> 'post_title',
		'value'			=> 'Post title',
		'placeholder'	=> 'Post title',
		'required'		=> true,
		'before'		=> '<div class="post-title">',
		'after'			=> '</div>',
	)
);

// Add post text field
$form->addField( 'post_text',
	array(
		'type'			=> 'textarea',
		'name'			=> 'post_text',
		'class'			=> 'post_text',
		'value'			=> 'bla bla bla bla bla bla bla bla...',
		'attributes'	=> array(
			'rows'		=> 10,
			'cols'		=> 10,
		),
		'before'		=> '<div class="post-text">',
		'after'			=> '</div>',
	)
);

// Add submit button
$form->addField( 'submit_post ',
	array(
		'type'			=> 'submit',
		'name'			=> 'submit_post',
		'class'			=> 'submit_post',
		'value'			=> 'Submit',
		'before'		=> '<div class="submit-post">',
		'after'			=> '</div>',
	)
);

// Show form
$form->showForm();
```

**Result**
```html
<form id="webolatory-form add_post" action="#" method="POST">

		<div class="post-title"><input type="text" id="post_title" class="webolatory-form-text post_title" name="post_title" value="Post title" placeholder="Post title" required></div>

		<div class="post-text"><textarea id="post_text" class="webolatory-form-textarea post_text" name="post_text" rows="10" cols="10">bla bla bla bla bla bla bla bla...</textarea></div>

		<div class="submit-post"><input type="submit" id="submit_post " class="webolatory-form-submit submit_post" name="submit_post" value="Submit"></div>

</form>
```

## Features

**Form Features**
- [x] Multiple forms on one page
- [x] Form method ( POST || GET )
- [x] Render single field on the page for more flexibility

**Will be added soon**
- [ ] Field description
- [ ] Set default field properties (before, after, description position)

**Support field types**
- [x] Input type text
- [x] Input type file
- [x] Input type password
- [x] Input type submit
- [x] Input type radio
- [x] Input type select
- [x] Input type multiselect
- [x] Input type textarea

## Contributing

Pull requests are welcome!
