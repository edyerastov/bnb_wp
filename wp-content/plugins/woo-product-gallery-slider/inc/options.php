<?php

/**
 * WordPress settings API demo class
 *
 * @author Tareq Hasan
 */
if (!class_exists('wpgs_Settings_API')):
    class wpgs_Settings_API {

        private $settings_api;

        public function __construct() {
            $this->settings_api = new WeDevs_Settings_API;

            add_action('admin_init', array($this, 'admin_init'));
            add_action('admin_menu', array($this, 'admin_menu'));
          

        }
     

        public function admin_init() {

            //set the settings
            $this->settings_api->set_sections($this->get_settings_sections());
            $this->settings_api->set_fields($this->get_settings_fields());

            //initialize settings
            $this->settings_api->admin_init();
            /**
             * If not, return the standard settings
             **/

        }

        public function admin_menu() {
            // add_options_page( 'Settings API', 'Settings API', 'delete_posts', 'settings_api_test',  );
            add_submenu_page('woocommerce', 'Gallery Settings', 'Gallery Settings', 'delete_posts', 'wpgs_options', array($this, 'wpgs_plugin_page'));
        }

        public function get_settings_sections() {
            $sections = array(
                array(
                    'id'    => 'wpgs_settings',
                    'title' => __('Product Gallery Slider for WooCommerce Settings', 'wpgs'),
                ),

            );
            return $sections;
        }

        /**
         * Returns all the settings fields
         *
         * @return array settings fields
         */
        public function get_settings_fields() {
            $settings_fields = array(
                'wpgs_settings'   => array(
                    array(
                        'name'    => 'navIcon',
                        'label'   => __('Navigation Icons', 'wpgs'),
                        'desc'    => __('Show Navigation icons. Default: Yes', 'wpgs'),
                        'type'    => 'select',
                        'default' => 'true',
                        'options' => array(
                            'true' => 'Yes',
                            'false'  => 'No',
                        ),
                    ),
                    array(
                        'name'    => 'navColor',
                        'label'   => __('Icon Color', 'wpgs'),
                        'desc'    => __('', 'wpgs'),
                        'type'    => 'color',
                        'default' => '',
                    ),
                     array(
                        'name'              => 'thubms',
                        'label'             => __('Thumbnails to Show', 'wpgs'),
                        'desc'              => __('Default: 4', 'wpgs'),

                        'type'              => 'text',
                        'default'           => '4',
                        'sanitize_callback' => 'sanitize_text_field',
                    ),
                    array(
                        'name'    => 'autoPlay',
                        'label'   => __('Auto Play', 'wpgs'),
                        'desc'    => __('Default: No', 'wpgs'),
                        'type'    => 'select',
                        'default' => 'false',
                        'options' => array(
                            'true' => 'Yes',
                            'false'  => 'No',
                        ),
                    ),
 					
                  
                    array(
                        'name'              => 'Lightboxframewidth',
                        'label'             => __('Lightbox Frame Width ', 'wpgs'),
                        'desc'              => __('Default: 600 px', 'wpgs'),

                        'type'              => 'text',
                        'default'           => '600',
                        'sanitize_callback' => 'sanitize_text_field',
                    ),
                     array(
                        'name'    => 'caption',
                        'label'   => __('Lightbox Caption', 'wpgs'),
                        'desc'    => __('Show Image Attributes as caption in this Lightbox', 'wpgs'),
                        'type'    => 'select',
                        'default' => 'false',
                        'options' => array(
                            'true' => 'Yes',
                            'false'  => 'No',
                        ),
                    ),
                  
                   
                    
                ),
            );

            return $settings_fields;
        }

        public function wpgs_plugin_page() {
            echo '<div class="wrap">';

            $this->settings_api->show_navigation();
            $this->settings_api->show_forms();
?>

<div class="multistep-ads metabox-holder">
	
 <h2>
<img draggable="false" class="emoji" alt="🎉" src="https://s.w.org/images/core/emoji/11/svg/1f389.svg"> Try Multistep Checkout for Woocommerce</h2>
 <p class="about-description">With <a href="https://wordpress.org/plugins/multistep-checkout-for-woocommerce-by-codeixer/">Multistep Checkout Plugin</a> the Buyers of your website will get a new step by step User Interface for checkout page.</p>
</div>
<div class="twist_pro metabox-holder">
	
 <h2 style="text-align: left;">Get The Pro Version Now</h2>
 

 <img style="width: 100%;"src="https://image.prntscr.com/image/LELn9ECQQCSesPAHip7QAA.png" alt="">
 
 <a target="_blank" href="https://codecanyon.net/item/twist-product-gallery-slidercarousel-plugin-for-woocommerce/14849108?utm_source=plugin&utm_medium=cpc" class="button button-primary">Buy Now</a>


</div>


</div>

    <style>
    .multistep-ads{

    float: right;
    width: 435px;
    margin-bottom: 15px;

}
    .metabox-holder {
background: #fff;
    padding: 20px;
        padding-top: 20px;
    border-radius: 3px;

}
    .twist_oofer {

    width: 470px;
    height: 85px;

}
    .offer_txt {

    position: relative;
    top: -69px;
    left: 70px;

}
        .twist_oofer img{margin-top:10px;width:60px;}
    </style>
<?php
        }

        /**
         * Get all the pages
         *
         * @return array page names with key value pairs
         */
        public function get_pages() {
            $pages         = get_pages();
            $pages_options = array();
            if ($pages) {
                foreach ($pages as $page) {
                    $pages_options[$page->ID] = $page->post_title;
                }
            }

            return $pages_options;
        }

    }
endif;
