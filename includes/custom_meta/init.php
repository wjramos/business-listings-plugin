<?php

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
    require_once 'cmb2/init.php';
} else {
    add_action( 'admin_notices', 'business_listings_missing_cmb2' );
}

/* Display Error if CMB2 is not available */
function business_listings_missing_cmb2() { ?>
<div class="error">
    <p><?php _e( 'Business Listings is missing CMB2 -- a required dependency to add listings.', 'business-listings' ); ?></p>
</div>
<?php }

/* Load modules */
require_once 'cmb_field_map/cmb-field-map.php';

/* Add Fields */
function logik_business_listings_register_metabox() {

    $prefix = '_logik_business_listings_';
    $namespace = 'logik-business-listings';

    $business_info = new_cmb2_box(
        array(
            'id'            => $prefix . 'info',
            'title'         => __( 'Info', $namespace ),
            'object_types'  => array( 'business_listing' )
        )
    );
    $business_info->add_field(
        array(
            'name'             => __( 'Chamber Member?', $namespace ),
            // 'desc'     => __( 'field description (optional)', $namespace ),
            'id'               => $prefix . 'chamber_member',
            'type'             => 'radio_inline',
            // 'show_option_none' => 'No Selection',
            'options'          => array(
                'no'           => __( 'No', $namespace ),
                'yes'          => __( 'Yes', $namespace )
            )
        )
    );
    $business_info->add_field(
        array(
            'name' => 'Short Description for Chamber Website',
            // 'desc' => 'field description (optional)',
            // 'default' => 'standard value (optional)',
            'id' => $prefix . 'chamber_desc',
            'type' => 'textarea'
        )
    );
    $business_info->add_field(
        array(
            'name'             => __( 'Tourism Related Business?', $namespace ),
            // 'desc'     => __( 'field description (optional)', $namespace ),
            'id'               => $prefix . 'tourism_related',
            'type'             => 'radio_inline',
            'options'          => array(
                'no'           => __( 'No', $namespace ),
                'yes'          => __( 'Yes', $namespace )
            )
        )
    );
    $business_info->add_field(
        array(
            'name' => 'Short Description for Tourism Website',
            // 'desc' => 'field description (optional)',
            // 'default' => 'standard value (optional)',
            'id' => $prefix . 'tourism_desc',
            'type' => 'textarea'
        )
    );
    $business_info->add_field(
        array(
            'name'     => 'Business Category',
            // 'desc'     => 'Description Goes Here',
            'id'       => $prefix . 'category_select',
            'taxonomy' => 'business_category',
            'type'     => 'taxonomy_select'
        )
    );

    /* Location Details */
    $business_location = new_cmb2_box(
        array(
            'id'            => $prefix . 'location',
            'title'         => __( 'Location', $namespace ),
            'object_types'  => array( 'business_listing' )
        )
    );
    $business_location->add_field(
            array(
            'name'     => __( 'Location', $namespace ),
            // 'desc'     => __( 'field description (optional)', $namespace ),
            'id'       => $prefix . 'location_select',
            'type'     => 'taxonomy_select',
            'taxonomy' => 'business_location'
        )
    );
    $business_location->add_field(
        array(
            'name'     => __( 'District', $namespace ),
            // 'desc'     => __( 'field description (optional)', $namespace ),
            'id'       => $prefix . 'district_select',
            'type'     => 'taxonomy_select',
            'taxonomy' => 'business_district'
        )
    );
    $business_location->add_field(
        array(
            'name' => 'Business Address',
            'desc' => 'Type an address or drag the marker to set the exact location',
            'id' => $prefix . 'address',
            'type' => 'pw_map',
            // 'split_values' => true, // Save latitude and longitude as two separate fields
        )
    );
    $business_location->add_field(
        array(
            'name'             => __( 'Display Address in Public Listings?', $namespace ),
            // 'desc'     => __( 'field description (optional)', $namespace ),
            'id'               => $prefix . 'public',
            'type'             => 'radio_inline',
            // 'show_option_none' => 'No Selection',
            'options'          => array(
                'no'           => __( 'No', $namespace ),
                'yes'          => __( 'Yes', $namespace )
            )
        )
    );
    $business_location->add_field(
        array(
            'name' => __( 'Business Phone', $namespace ),
            // 'desc' => __( 'Numbers only', $namespace ),
            'id'   => $prefix . 'phone',
            'type' => 'text',
            'attributes' => array(
                'type' => 'number',
                'pattern' => '(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?',
            )
        )
    );
    $business_location->add_field(
        array(
            'name' => __( 'Business Website', $namespace ),
            'id'   => $prefix . 'website',
            'type' => 'text_url'
        )
    );

    /* Contact */
    $business_contact = new_cmb2_box(
        array(
            'id'            => $prefix . 'contact',
            'title'         => __( 'Contact', $namespace ),
            'object_types'  => array( 'business_listing' )
        )
    );
    $business_contact->add_field(
        array(
            'name' => __( 'Contact Name', $namespace ),
            // 'desc' => __( 'field description (optional)', $namespace ),
            'id'   => $prefix . 'contact_name',
            'type' => 'text'
        )
    );
    $business_contact->add_field(
        array(
            'name' => __( 'Contact Title/Position', $namespace ),
            // 'desc' => __( 'field description (optional)', $namespace ),
            'id'   => $prefix . 'contact_title',
            'type' => 'text'
        )
    );
    $business_contact->add_field(
        array(
            'name' => __( 'Contact Email', $namespace ),
            // 'desc' => __( 'field description (optional)', $namespace ),
            'id'   => $prefix . 'contact_email',
            'type' => 'text_email'
        )
    );

    /* Extras */
    $business_extra = new_cmb2_box(
        array(
            'id'            => $prefix . 'extra',
            'title'         => __( 'The Fun Stuff', $namespace ),
            'object_types'  => array( 'business_listing' )
        )
    );
    $business_extra->add_field(
        array(
            'name'    => 'Banner Image',
            'desc'    => 'Upload an image',
            'id'      => $prefix . 'banner',
            'type'    => 'file'
        )
    );
    $business_extra->add_field(
        array(
            'name' => __( 'Facebook', $namespace ),
            'id'   => $prefix . 'facebook',
            'type' => 'text_url'
        )
    );
    $business_extra->add_field(
        array(
            'name' => __( 'Twitter', $namespace ),
            'id'   => $prefix . 'twitter',
            'type' => 'text_url'
        )
    );
    $business_extra->add_field(
        array(
            'name' => __( 'Instagram', $namespace ),
            'id'   => $prefix . 'instagram',
            'type' => 'text_url'
        )
    );
}
add_action( 'cmb2_init', 'logik_business_listings_register_metabox' );

