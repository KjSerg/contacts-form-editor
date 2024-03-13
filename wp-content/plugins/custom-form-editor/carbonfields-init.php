<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_in_contact_form' );
function crb_attach_in_contact_form() {
	Container::make( 'post_meta', 'Settings' )
	         ->show_on_post_type( 'contact_form' )
	         ->add_fields(
		         array(
			         Field::make( "text", "contact_form_email", "Email" ),
		         )
	         );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	if ( ! class_exists( 'Carbon_Fields\Carbon_Fields' ) ) {
		get_template_part( 'vendor/autoload' );
		\Carbon_Fields\Carbon_Fields::boot();
	}
}