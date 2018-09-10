
<?php

	echo '<div class="form">';
	echo '<h4 class="text-center text-muted">Registration Form</h4>';
	echo form_open('user/add_user');

	echo '<div class="form-group ">';
	$data = array(
		'class' => 'form-control',
		'name' => 'name',
		'placeholder' => 'Your Name',

	);
	echo form_input($data);
	echo '</div>';

	echo '<div class="form-group">';
	$data = array(
		'class' => 'form-control',
		'name' => 'phone',
		'placeholder' => 'Phone'

	);
	echo form_input($data);
	echo '</div>';

	echo '<div class="form-group">';
	$data = array(
		'class' => 'form-control',
		'name' => 'address',
		'placeholder' => 'Address'

	);
	echo form_textarea($data);
	echo '</div>';


	$data = array(
		'class' => 'btn btn-primary',
		'name' => 'submit',
		'value' => 'Register'

	);
	echo form_submit($data);


	echo form_close();
	echo '</div>';

?>

	