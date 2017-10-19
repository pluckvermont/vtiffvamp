<?php
/*
Plugin Name: Seamless Donations Giving Level Manager
Plugin URI: http://zatzlabs.com/seamless-donations/
Description: Allows easy creation of custom donation levels, along with the assignment of labels for each level, plus some additional customization features.
Version: 1.0.1
Author: David Gewirtz
Author URI: http://zatzlabs.com/lab-notes/
*/

define ( 'SEAMLESS_DONATIONS_GLM_REQUIRED_CORE_VERSION', '4.0.11' );
define ( 'SEAMLESS_DONATIONS_GLM_CURRENT_VERSION', '1.0.1' );
define ( 'SEAMLESS_DONATIONS_GLM_PRODUCT_NAME', 'Seamless Donations Giving Level Manager' );

//// LICENSING - SET UP ALL THE LICENSING AND UPDATE CODE ////

if( ! class_exists ( 'EDD_SL_Plugin_Updater' ) ) {
	// load EDD's custom updater
	$updater_file = dirname ( __FILE__ ) . '/library/EDD_SL_Plugin_Updater.php';
	include ( $updater_file );
}

function seamless_donations_glm_plugin_updater () {

	if( seamless_donations_glm_is_compatible ( false ) ) {
		// retrieve license key
		$license_key = seamless_donations_get_license_key ( 'dgxdonate_glm_license_key' );

		// setup the updater
		$update_array    = array(
			'version'   => SEAMLESS_DONATIONS_GLM_CURRENT_VERSION,
			'license'   => $license_key,
			'item_name' => SEAMLESS_DONATIONS_GLM_PRODUCT_NAME,
			'author'    => 'David Gewirtz',
		);
		$unused_variable = new EDD_SL_Plugin_Updater(
			seamless_donations_store_url (), __FILE__, $update_array );
	}
}

function seamless_donations_glm_admin_licenses_section_registration_options ( $options ) {

	// add the license field to the Licenses tab

	if( seamless_donations_glm_is_compatible ( false ) ) {

		// first check and see if the 'nothing has been installed' message is active
		if( isset( $options[0]['field_id'] ) ) {
			if( $options[0]['field_id'] == "licenses_no_licenses" ) {
				unset( $options[0] );
			}
		}

		$options_count = count ( $options ); // allows multiple licenses on the tab

		$license_key = seamless_donations_get_license_key ( 'dgxdonate_glm_license_key' );

		if( seamless_donations_confirm_license_key ( $license_key ) ) {
			// license is valid, offer to deactivate
			$options[ $options_count ]     = array(
				'field_id'     => 'dgxdonate_glm_license_key',
				'type'         => 'license_html',
				'title'        => __ ( SEAMLESS_DONATIONS_GLM_PRODUCT_NAME, 'seamless-donations' ),
				'description'  => __ ( 'License key activated.', 'seamless-donations' ),
				'before_field' => $license_key,
			);
			$options[ $options_count + 1 ] = array(
				'field_id' => '_glm_submit',
				'type'     => 'submit',
				'label'    => 'Deactivate ' . SEAMLESS_DONATIONS_GLM_PRODUCT_NAME,

			);
		} else {
			// no license or invalid license, offer to activate
			$options[ $options_count ] = array(
				'field_id'    => 'dgxdonate_glm_license_key',
				'type'        => 'text',
				'title'       => __ ( SEAMLESS_DONATIONS_GLM_PRODUCT_NAME, 'seamless-donations' ),
				'description' => __ (
					                 'Enter license key to activate ', 'seamless-donations' ) .
				                 SEAMLESS_DONATIONS_GLM_PRODUCT_NAME,
				'attributes'  => array(
					'size' => 40,
				),
			);

			$options[ $options_count + 1 ] = array(
				'field_id' => '_glm_submit',
				'type'     => 'submit',
				'label'    => 'Activate ' . SEAMLESS_DONATIONS_GLM_PRODUCT_NAME,

			);
		}
	}

	return $options;
}

function seamless_donations_glm_admin_licenses_validate (
	$submitted_array, $existing_array, $setup_object ) {

	if( seamless_donations_glm_is_compatible ( false ) ) {
		$store_url = seamless_donations_store_url ();
		$section   = 'seamless_donations_admin_licenses_section_registration';

		if( isset( $submitted_array[ $section ]['_glm_submit'] ) ) {

			switch( $submitted_array[ $section ]['_glm_submit'] ) {

				case 'Activate ' . SEAMLESS_DONATIONS_GLM_PRODUCT_NAME:

					$license = $submitted_array[ $section ]['dgxdonate_glm_license_key'];
					// returns false, "valid" or "invalid"
					$response = seamless_donations_edd_activate_license (
						SEAMLESS_DONATIONS_GLM_PRODUCT_NAME, $license, $store_url );

					if( $response === false or $response == "invalid" ) {
						if( $response === false ) {
							$error = __ (
								'Unable to validate key with licensing server.', 'seamless-donations' );
						} else {
							$error = __ ( 'Invalid license key.', 'seamless-donations' );
						}
						$_aErrors[ $section ]['dgxdonate_glm_license_key'] = $error;
						$setup_object->setFieldErrors ( $_aErrors );
						$setup_object->setSettingNotice (
							__ ( 'There were errors in your submission.', 'seamless-donations' ) );
						// bypass core processing of page tab
						$existing_array[ $section ]['_glm_submit']                                            = NULL;
						$existing_array['seamless_donations_admin_licenses_section_extension']['_glm_submit'] = true;

						return $existing_array;
					} else {
						$license_array                              = unserialize (
							get_option ( 'dgxdonate_licenses' ) );
						$license_array['dgxdonate_glm_license_key'] = $license;
						update_option ( 'dgxdonate_licenses', serialize ( $license_array ) );
					}
					$submitted_array[ $section ]['_glm_submit']                                            = NULL;
					// this stays as 'submit' to complete the overwrite of the main licensing code
					$submitted_array['seamless_donations_admin_licenses_section_extension']['submit'] = true;
					$setup_object->setSettingNotice ( 'Form updated successfully.', 'updated' );
					break;

				case 'Deactivate ' . SEAMLESS_DONATIONS_GLM_PRODUCT_NAME:

					$license = seamless_donations_get_license_key ( 'dgxdonate_glm_license_key' );

					// returns false, "deactivated" or "invalid"
					$response = seamless_donations_edd_deactivate_license (
						SEAMLESS_DONATIONS_GLM_PRODUCT_NAME, $license, $store_url );

					if( $response === false or $response == "invalid" ) {
						if( $response === false ) {
							$error = __ (
								'Unable to validate key with licensing server.', 'seamless-donations' );
						} else {
							$error = __ (
								'Failed to deactivate license key. Key might be invalid', 'seamless-donations' );
						}
						$_aErrors[ $section ]['dgxdonate_glm_license_key'] = $error;
						$setup_object->setFieldErrors ( $_aErrors );
						$setup_object->setSettingNotice (
							__ ( 'There were errors in your submission.', 'seamless-donations' ) );
						// bypass core processing of page tab
						$existing_array[ $section ]['_glm_submit']                                            = NULL;
						$existing_array['seamless_donations_admin_licenses_section_extension']['_glm_submit'] = true;

						return $existing_array;
					} else {
						$license_array = unserialize (
							get_option ( 'dgxdonate_licenses' ) );
						unset( $license_array['dgxdonate_glm_license_key'] );
						update_option ( 'dgxdonate_licenses', serialize ( $license_array ) );
					}
					$submitted_array[ $section ]['_glm_submit']                                            = NULL;
					// this stays as 'submit' to complete the overwrite of the main licensing code
					$submitted_array['seamless_donations_admin_licenses_section_extension']['submit'] = true;
					$setup_object->setSettingNotice ( 'Form updated successfully.', 'updated' );
					break;
			}
		}
	}

	return $submitted_array;
}

//// SETTINGS - MODIFY SEAMLESS DONATIONS SETTINGS BEHAVIOR ////
function seamless_donations_glm_admin_forms_section_levels ( $options ) {

	if( seamless_donations_glm_is_compatible () ) {

		$section_desc = 'Enter one or more suggested giving levels for your donors to choose from.';

		$options = array(
			'section_id'  => 'seamless_donations_admin_forms_section_levels',    // the section ID
			'page_slug'   => 'seamless_donations_admin_forms',    // the page slug that the section belongs to
			'title'       => __ ( 'Giving Level Manager', 'seamless-donations' ),   // the section title
			'description' => __ ( $section_desc, 'seamless-donations' ),
		);
	}

	return $options;
}

function seamless_donations_glm_admin_forms_section_level_options ( $options ) {

	if( seamless_donations_glm_is_compatible () ) {

		// create drag-and-drop field element
		$level_builder = array(
			'field_id'    => 'dgx_donate_giving_levels',
			'title'       => __ ( 'Specify Levels', 'seamless-donations' ),
			'type'        => 'text',
			'label'       => array(
				'level_name'    => __ ( 'Level Name', 'seamless-donations' ),
				'giving_amount' => __ ( 'Giving Amount', 'seamless-donations' ),
			),
			'attributes'  => array(//'style' => 'width:30%',
			),
			'sortable'    => true,
			'repeatable'  => true,
			'description' => __ (
				'Drag and drop the rectangles to change giving level order.',
				'seamless-donations' ),
		);

		// set up giving levels

		$giving_level_serialized_object = get_option ( 'dgx_donate_giving_levels' );

		if( $giving_level_serialized_object == false ) {
			// the add-on hasn't yet saved any data
			$giving_level_set   = dgx_donate_get_giving_levels ();
			$giving_level_array = array();
			for( $i = 0; $i < count ( $giving_level_set ); ++ $i ) {
				array_push (
					$giving_level_array, array( 'level_name' => '', 'giving_amount' => $giving_level_set[ $i ] ) );
			}
		} else {
			// get the stored level data and order
			$giving_level_array = unserialize ( $giving_level_serialized_object );
		}

		// special case for first element
		if( count ( $giving_level_array ) > 0 ) {
			$first_giving_level = $giving_level_array[0]['giving_amount'];
		} else {
			$first_giving_level = '100'; // defaults to 100
		}

		$level_builder['value'] = array(
			'level_name'    => $giving_level_array[0]['level_name'],
			'giving_amount' => $first_giving_level,
		);

		// non-first elements
		for( $i = 1; $i < count ( $giving_level_array ); ++ $i ) {
			$new_level = array(
				'value' => array(
					'level_name'    => $giving_level_array[ $i ]['level_name'],
					'giving_amount' => $giving_level_array[ $i ]['giving_amount'],
				),
			);
			array_push ( $level_builder, $new_level );
		}

		// add additional form fields

		// create drag-and-drop field element
		$donation_header_text = get_option ( 'dgx_donate_donation_header' );

		if( $donation_header_text == false ) {
			$donation_header_text = __ ( 'Donation Information', 'seamless-donations' );
		}

		$donation_header = array(
			'field_id'    => 'dgx_donate_donation_header',
			'title'       => __ ( 'Donation Header', 'seamless-donations' ),
			'type'        => 'text',
			'default'     => $donation_header_text,
			'attributes'  => array(
				'style' => 'width:500px',
			),
			'description' => __ (
				'Enter the header text used for the donation form.',
				'seamless-donations' ),
		);

		$use_div = array(
			'field_id'    => 'dgx_donate_use_div',
			'title'       => __ ( 'Use &lt;div&gt; Formatting', 'seamless-donations' ),
			'type'        => 'checkbox',
			'label'       => __ (
				'Replace &lt;span&gt; with &lt;div&gt; tags (some themes will format vertically)',
				'seamless-donations' ),
			'default'     => false,
			'after_label' => '<br />',
		);

		$level_name_styling = array(
			'field_id'    => 'dgx_donate_level_name_styling',
			'title'       => __ ( 'Level Name Styling', 'seamless-donations' ),
			'type'        => 'checkbox',
			'label'       => __ (
				'Use basic level name styling (bold with colon). Disable for full control via CSS.',
				'seamless-donations' ),
			'default'     => false,
			'after_label' => '<br />',
		);

		$other_field_exclude = array(
			'field_id'    => 'dgx_donate_other_field_exclude',
			'title'       => __ ( 'Hide "Other" Field', 'seamless-donations' ),
			'type'        => 'checkbox',
			'label'       => __ ( 'Exclude "Other" field option from donation form', 'seamless-donations' ),
			'default'     => false,
			'after_label' => '<br />',
		);

		$repeating_donation_enable = array(
			'field_id'    => 'dgx_donate_repeating_donation_on_default',
			'title'       => __ ( 'Repeat Donation Default', 'seamless-donations' ),
			'type'        => 'checkbox',
			'label'       => __ (
				'When shown on form, Repeating Donation checkbox will be checked on by default', 'seamless-donations' ),
			'default'     => false,
			'after_label' => '<br />',
		);

		$submit_button = array(
			'field_id' => 'submit',
			'type'     => 'submit',
			'label'    => __ ( 'Save Giving Levels', 'seamless-donations' ),
		);

		$options = array(
			$donation_header,
			$level_builder,
			$use_div,
			$level_name_styling,
			$other_field_exclude,
			$repeating_donation_enable,
			$submit_button
		);
	}

	return $options;
}

function seamless_donations_glm_admin_forms_validate (
	$submitted_array, $existing_array, $setup_object ) {

	if( seamless_donations_glm_is_compatible () ) {
		$section = 'seamless_donations_admin_forms_section_levels';

		if( isset( $submitted_array[ $section ]['submit'] ) ) {

			// add in special processing for the extension

			// first validate that giving level numbers are integers
			for( $i = 0; $i < count ( $submitted_array[ $section ]['dgx_donate_giving_levels'] ); ++ $i ) {
				$amount = $submitted_array[ $section ]['dgx_donate_giving_levels'][ $i ]['giving_amount'];
				if( ! ctype_digit ( $amount ) ) {
					$_aErrors[ $section ]['dgx_donate_giving_levels'] = __ (
						'Giving amounts must be integers.', 'seamless-donations' );
					$setup_object->setFieldErrors ( $_aErrors );
					$setup_object->setSettingNotice (
						__ ( 'There were errors in your submission.', 'seamless-donations' ) );
					// bypass core processing of page tab
					$existing_array[ $section ]['submit']                                         = NULL;
					$existing_array['seamless_donations_admin_forms_section_extension']['submit'] = true;

					return $existing_array;
				}
			}

			// validate that the donation header is non-empty
			$donation_header_text = $submitted_array[ $section ]['dgx_donate_donation_header'];
			$donation_header_text = sanitize_text_field ( $donation_header_text );
			if( $donation_header_text == '' ) {
				$_aErrors[ $section ]['dgx_donate_donation_header'] = __ (
					'You must provide text for the donation header message.', 'seamless-donations' );
				$setup_object->setFieldErrors ( $_aErrors );
				$setup_object->setSettingNotice (
					__ ( 'There were errors in your submission.', 'seamless-donations' ) );
				// bypass core processing of page tab
				$existing_array[ $section ]['submit']                                         = NULL;
				$existing_array['seamless_donations_admin_forms_section_extension']['submit'] = true;

				return $existing_array;
			}

			// next, clean the labels entered by the user
			for( $i = 0; $i < count ( $submitted_array[ $section ]['dgx_donate_giving_levels'] ); ++ $i ) {
				$label = $submitted_array[ $section ]['dgx_donate_giving_levels'][ $i ]['level_name'];

				$submitted_array[ $section ]['dgx_donate_giving_levels'][ $i ]['level_name'] = sanitize_text_field (
					$label );
			}

			// save option data
			update_option (
				'dgx_donate_giving_levels', serialize ( $submitted_array[ $section ]['dgx_donate_giving_levels'] ) );
			update_option ( 'dgx_donate_donation_header', $submitted_array[ $section ]['dgx_donate_donation_header'] );
			update_option ( 'dgx_donate_use_div', $submitted_array[ $section ]['dgx_donate_use_div'] );
			update_option (
				'dgx_donate_level_name_styling', $submitted_array[ $section ]['dgx_donate_level_name_styling'] );
			update_option (
				'dgx_donate_other_field_exclude', $submitted_array[ $section ]['dgx_donate_other_field_exclude'] );
			update_option (
				'dgx_donate_repeating_donation_on_default',
				$submitted_array[ $section ]['dgx_donate_repeating_donation_on_default'] );

			$submitted_array[ $section ]['submit']                                         = NULL;
			$submitted_array['seamless_donations_admin_forms_section_extension']['submit'] = true;

			$setup_object->setSettingNotice ( 'Form updated successfully.', 'updated' );
		}
	}

	return $submitted_array;
}

// Build the new form

function seamless_donations_glm_form_donation_section ( $array ) {

	// get saved options
	$other_field_exclude     = get_option ( 'dgx_donate_other_field_exclude' );
	$donation_header         = get_option ( 'dgx_donate_donation_header' );
	$use_div                 = get_option ( 'dgx_donate_use_div' );
	$level_name_styling      = get_option ( 'dgx_donate_level_name_styling' );
	$repeating_on_by_default = get_option ( 'dgx_donate_repeating_donation_on_default' );
	$giving_levels           = unserialize ( get_option ( 'dgx_donate_giving_levels' ) );

	// set the custom donation header
	$array['elements']['donation_header']['value'] = $donation_header;

	// clear existing giving levels
	$clear_list = array();
	for( $i = 0; $i < count ( $array['elements'] ); ++ $i ) {
		$element = seamless_donations_name_of ( $array['elements'], $i );
		$segment = substr ( $element, 0, 24 );
		if( $segment == 'dgx_donate_giving_level_' ) {
			array_push ( $clear_list, $element );
		}
	}
	for( $i = 0; $i < count ( $clear_list ); ++ $i ) {
		$element = $clear_list[ $i ];
		unset( $array['elements'][ $element ] );
	}

	// construct new set of giving levels
	for( $i = 0; $i < count ( $giving_levels ); ++ $i ) {

		$level_name       = $giving_levels[ $i ]['level_name'];
		$giving_amount    = $giving_levels[ $i ]['giving_amount'];
		$element          = 'dgx_donate_giving_level_' . $giving_amount;
		$formatted_amount = seamless_donations_get_escaped_formatted_amount ( $giving_amount, 0 );

		if( $i == 0 ) {
			$array['elements'][ $element ]['select'] = true; // first element only
		} else {
			$array['elements'][ $element ]['class'] = 'horiz'; // subsequent elements only
		}

		$array['elements'][ $element ]['value']   = $giving_amount;
		$array['elements'][ $element ]['prompt']  = $formatted_amount;
		$array['elements'][ $element ]['type']    = 'radio';
		$array['elements'][ $element ]['group']   = '_dgx_donate_amount';
		$array['elements'][ $element ]['conceal'] = 'other-donation-level';

		if( $use_div ) {
			$array['elements'][ $element ]['wrapper'] = 'div';
		} else {
			$array['elements'][ $element ]['wrapper'] = 'span';
		}

		if( $level_name != '' ) {
			if( $level_name_styling ) {
				$level_name = '<strong>' . $level_name . ':</strong>&nbsp;&nbsp;';
			}
			$array['elements'][ $element ]['before'] = '<span class="_dgx_donate_level_name">' . $level_name . '</span>';
		}
	}

	// hide the other field if requested
	$other_button = $array['elements']['other_radio_button'];
	$other_amount_field = $array['elements']['_dgx_donate_user_amount'];

	unset( $array['elements']['other_radio_button'] );
	unset( $array['elements']['_dgx_donate_user_amount'] );

	// we delete and restore the array elements to move them below the newly-created giving levels
	if( !$other_field_exclude ) {
		$array['elements']['other_radio_button'] = $other_button;
		$array['elements']['_dgx_donate_user_amount'] = $other_amount_field;
	}

	// select the repeating field, if requested
	if( $repeating_on_by_default ) {
		$array['repeating_section']['elements']['_dgx_donate_repeating']['select'] = true;
	}

	return $array;
}

// check for compatibility

function seamless_donations_glm_is_compatible ( $validate_license = true ) {

	if( ! function_exists ( 'seamless_donations_set_version' ) ) {
		return false;
	}
	$sd4_mode = get_option ( 'dgx_donate_start_in_sd4_mode' );
	if( ! $sd4_mode ) {
		return false;
	}
	$core_version = get_option ( 'dgx_donate_active_version' );
	if( version_compare ( $core_version, SEAMLESS_DONATIONS_GLM_REQUIRED_CORE_VERSION ) < 0 ) {
		return false;
	}

	if( $validate_license ) {
		$license_key = seamless_donations_get_license_key ( 'dgxdonate_glm_license_key' );

		if( ! seamless_donations_confirm_license_key ( $license_key ) ) {
			return false;
		}
	}

	return true;
}

function seamless_donations_glm_incompatibility_message ( $links, $file ) {

	if( ! seamless_donations_glm_is_compatible () ) {

		$plugin = plugin_basename ( __FILE__ );

		if( $file == $plugin ) { // only for this plugin
			$error_message = __ (
				'<B>Extension not enabled (requires Seamless Donations v', "seamless-donations" );
			$error_message .= SEAMLESS_DONATIONS_GLM_REQUIRED_CORE_VERSION;
			$error_message .= __ ( ' or newer, and valid license)</B>', "seamless-donations" );
			$links[0] = $error_message;
		}
	}

	return $links;
}

//// ENABLE APPROPRIATE FILTERS ////
add_filter (
	'seamless_donations_admin_licenses_section_registration_options',
	'seamless_donations_glm_admin_licenses_section_registration_options' );
add_filter (
	'validate_page_slug_seamless_donations_admin_licenses_callback',
	'seamless_donations_glm_admin_licenses_validate',
	10, // priority (for this, always 10)
	3 ); // number of arguments passed (for this, always 3)
add_action ( 'admin_init', 'seamless_donations_glm_plugin_updater', 0 );
add_filter ( 'plugin_row_meta', 'seamless_donations_glm_incompatibility_message', 10, 2 );
add_filter ( 'seamless_donations_admin_forms_section_levels', 'seamless_donations_glm_admin_forms_section_levels' );
add_filter (
	'seamless_donations_admin_forms_section_levels_options',
	'seamless_donations_glm_admin_forms_section_level_options' );
add_filter (
	'validate_page_slug_seamless_donations_admin_forms_callback',
	'seamless_donations_glm_admin_forms_validate',
	10, // priority (for this, always 10)
	3 ); // number of arguments passed (for this, always 3)

add_filter ( 'seamless_donations_form_donation_section', 'seamless_donations_glm_form_donation_section' );