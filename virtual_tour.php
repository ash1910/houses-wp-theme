<?php
/**
 * Add virtual_tour metabox tab
 *
 * @param $metabox_tabs
 *
 * @return array
 */
function houzez_virtual_tour_metabox_tab( $metabox_tabs ) {
	if ( is_array( $metabox_tabs ) ) {

		$metabox_tabs['virtual_tour'] = array(
			'label' => houzez_option('cls_virtual_tour', '360° Virtual Tour'),
            'icon' => 'dashicons-format-video',
		);

	}
	return $metabox_tabs;
}
add_filter( 'houzez_property_metabox_tabs', 'houzez_virtual_tour_metabox_tab', 50 );


/**
 * Add virtual_tour metaboxes fields
 *
 * @param $metabox_fields
 *
 * @return array
 */
function houzez_virtual_tour_metabox_fields( $metabox_fields ) {
	$houzez_prefix = 'fave_';

	$fields = array(
		array(
            'id' => "{$houzez_prefix}virtual_tour",
            'name' => houzez_option('cls_virtual_tour', '360° Virtual Tour'),
            'placeholder' => houzez_option('cl_virtual_plac', 'Enter virtual tour iframe/embeded code'),
            'type' => 'textarea',
            'columns' => 12,
            'sanitize_callback' => 'none',
            'tab' => 'virtual_tour',
        ),
        array(
            'name' => houzez_option('cls_bedroom1', 'Bedroom 1'),
            'id' => "{$houzez_prefix}property_bedroom1",
            'type' => 'radio',
            'std' => 1,
            'options' => array(
                'King' => houzez_option('cl_king', 'King'),
                'Queen' => houzez_option('cl_queen', 'Queen'),
                'Full' => houzez_option('cl_full', 'Full'),
                'Twin' => houzez_option('cl_twin', 'Twin')
            ),
            'columns' => 12,
            'tab' => 'virtual_tour',
        ),
        array(
            'name' => houzez_option('cls_bedroom2', 'Bedroom 2'),
            'id' => "{$houzez_prefix}property_bedroom2",
            'type' => 'radio',
            'std' => 1,
            'options' => array(
                'King' => houzez_option('cl_king', 'King'),
                'Queen' => houzez_option('cl_queen', 'Queen'),
                'Full' => houzez_option('cl_full', 'Full'),
                'Twin' => houzez_option('cl_twin', 'Twin')
            ),
            'columns' => 12,
            'tab' => 'virtual_tour',
        ),
        array(
            'name' => houzez_option('cls_bedroom3', 'Bedroom 3'),
            'id' => "{$houzez_prefix}property_bedroom3",
            'type' => 'radio',
            'std' => 1,
            'options' => array(
                'King' => houzez_option('cl_king', 'King'),
                'Queen' => houzez_option('cl_queen', 'Queen'),
                'Full' => houzez_option('cl_full', 'Full'),
                'Twin' => houzez_option('cl_twin', 'Twin')
            ),
            'columns' => 12,
            'tab' => 'virtual_tour',
        ),
        array(
            'name' => houzez_option('cls_bedroom4', 'Bedroom 4'),
            'id' => "{$houzez_prefix}property_bedroom4",
            'type' => 'radio',
            'std' => 1,
            'options' => array(
                'King' => houzez_option('cl_king', 'King'),
                'Queen' => houzez_option('cl_queen', 'Queen'),
                'Full' => houzez_option('cl_full', 'Full'),
                'Twin' => houzez_option('cl_twin', 'Twin')
            ),
            'columns' => 12,
            'tab' => 'virtual_tour',
        ),
        array(
            'name' => houzez_option('cls_bedroom5', 'Bedroom 5'),
            'id' => "{$houzez_prefix}property_bedroom5",
            'type' => 'radio',
            'std' => 1,
            'options' => array(
                'King' => houzez_option('cl_king', 'King'),
                'Queen' => houzez_option('cl_queen', 'Queen'),
                'Full' => houzez_option('cl_full', 'Full'),
                'Twin' => houzez_option('cl_twin', 'Twin')
            ),
            'columns' => 12,
            'tab' => 'virtual_tour',
        )
	);

	return array_merge( $metabox_fields, $fields );

}
add_filter( 'houzez_property_metabox_fields', 'houzez_virtual_tour_metabox_fields', 50 );
