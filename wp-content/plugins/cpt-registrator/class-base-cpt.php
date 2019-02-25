<?php
/**
 * The file that defines the base custom post type class.
 *
 * @since      1.0.0
 *
 * @package    CPT_Registrator
 */

/**
 * The Base Custom Post Type class.
 *
 * This is a base class for creating and registering a new custom post type.
 *
 * @since      1.0.0
 * @package    CPT_Registrator
 * @author     Analia Mok
 */
class BaseCustomPostType
{

    /**
     * Singular version of this CPT's name.
     *
     * @var String
     */
    protected $name;

    protected $text_domain = 'cpt_registrator';

    protected $description;

    public function __construct(String $name, String $description = '')
    {
        $this->name = $name;
        $this->description = $description;
    }

    protected function registerCPT()
    {
        $labels = array(
            'name' => _x($this->name, 'Post Type General Name', $this->text_domain),
            'singular_name' => _x($this->name, 'Post Type Singular Name', $this->text_domain),
            'menu_name' => __($this->name . 's', $this->text_domain),
            'name_admin_bar' => __($this->name, $this->text_domain),
            'archives' => __($this->name . ' Archives', $this->text_domain),
            'attributes' => __($this->name . ' Attributes', $this->text_domain),
            'all_items' => __('All ' . $this->name . 's', $this->text_domain),
            'add_new_item' => __('Add New ' . $this->name, $this->text_domain),
            'add_new' => __('Add New' . $this->name, $this->text_domain),
            'new_item' => __('New ' . $this->name, $this->text_domain),
            'edit_item' => __('Edit ' . $this->name, $this->text_domain),
            'update_item' => __('Update ' . $this->name, $this->text_domain),
            'view_item' => __('View ' . $this->name, $this->text_domain),
            'view_items' => __('View ' . $this->name . 's', $this->text_domain),
            'search_items' => __('Search ' . $this->name . 's', $this->text_domain),
            'not_found' => __('Not found', $this->text_domain),
            'not_found_in_trash' => __('Not found in Trash', $this->text_domain),
            'featured_image' => __('Featured Image', $this->text_domain),
            'set_featured_image' => __('Set featured image', $this->text_domain),
            'remove_featured_image' => __('Remove featured image', $this->text_domain),
            'use_featured_image' => __('Use as featured image', $this->text_domain),
            'insert_into_item' => __('Insert into item', $this->text_domain),
            'uploaded_to_this_item' => __('Uploaded to this item', $this->text_domain),
            'items_list' => __('Items list', $this->text_domain),
            'items_list_navigation' => __('Items list navigation', $this->text_domain),
            'filter_items_list' => __('Filter items list', $this->text_domain),
        );
        $args = array(
            'label' => __($this->name, $this->text_domain),
            'labels' => $labels,
            'supports' => false,
            // 'taxonomies' => array('category', 'post_tag'),
            'hierarchical' => false, // FUTURE TODO: Dynamically set
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );

        // Set Customizable values
        if (!empty($this->description)) {
            $args['description'] = __($this->description, $this->text_domain);
        }

        register_post_type(strtolower($this->name), $args);

        // TODO: Most likely most elsewhere
        // add_action('init', 'custom_post_type', 0);
    }

}
