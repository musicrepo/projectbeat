<?php

function bandbeats_bandpage_form() {
	$form = array();

	$form['testsubmit'] = array(
		'#type' => 'submit',
    	'#value' => 'TEST',
		);
	return $form;
}

function bandbeats_bandpage_validate($form, $form_state) {

}

function bandbeats_bandpage_submit($form, &$form_state) {
	drupal_set_message('Testing Complete');
}