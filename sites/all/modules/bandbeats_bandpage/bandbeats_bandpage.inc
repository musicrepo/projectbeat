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

function bandbeats_bandpage_theme($existing, $type, $theme, $path) {
	return array(
		'bandprofile' => array(
      		'render element' => 'elements', 
			'template' => 'bandbeats_bandpage',
			),
		);
}

function bandbeats_bandpage_preprocess_bandprofile(&$variables) {
	$account = $variables['account'];
	
	field_attach_prepare_view('user', array($account->uid => $account), "block");
  entity_prepare_view('user', array($account->uid => $account));
	$variables['profile'] = field_attach_view("user", $account, "block", $langcode = NULL);
}