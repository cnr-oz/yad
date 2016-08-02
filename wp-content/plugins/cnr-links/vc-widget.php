
<?php if (!defined('ABSPATH')) die('-1');

/*
 * Contact info widget for VC
 */
class cnr_Links {
	
	/*
	 * Constructor
	 */
    function __construct() {
	    
        // Integrate with VC
        add_action( 'init', array( $this, 'integrateWithVC' ) );
 
        // Create our Shortcode
        add_shortcode( 'cnr_links', array( $this, 'renderElement' ) );
    }
    
    /*
	 * Integration
	 */
    public function integrateWithVC() {
	    
	    // if vc dosn't exist
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
	        
            // Display notice that Visual Compser is required
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }
		vc_map(
        	array(
	        	"name"			=> __("Links", 'textdomain'),// element name
				"description"	=> __("A Code 'n' Roll links widget", 'textdomain'),			// element description
				"base"			=> "cnr_links",					// element base shortcode
				"class"			=> "",								// element special class
				"controls"		=> "full",
				"category"		=> 'Code n\' Roll',					// element category
				
				// Widget options
				"params"		=> array(
					

					
					// Header
					array(
						"type"			=> "textfield",
						"holder"		=> "div",
						"class"			=> "",
						"heading"		=> __("Header", 'newa'),
						"param_name"	=> "header",
						"value"			=> "",
					),
					
					// Email
					array(
						"type"			=> "textfield",
						"holder"		=> "div",
						"class"			=> "",
						"heading"		=> __("Paragraph", 'newa'),
						"param_name"	=> "par",
						"value"			=> "",
					),

                    	array(
                            "type"			=> "dropdown",
                            "holder"		=> "div",
                            "class"			=> "",
                            "heading"		=> __("Icon", 'newa'),
                            "param_name"	=> "icon",
                            "value"			=> array(
                                "value1",
                                "value2",
                            ),
                        )
				),
			)
		);
    }
    
    // Shortcode logic & rendering
    public function renderElement( $atts, $content = null ) {
      	extract( shortcode_atts(
	      	
	      	// Defaults
	      	array(
                'header' => '',
                'par' => '',
                'icon' => ''
			),
			$atts
		));
		
		// fix unclosed/unwanted paragraph tags in $content
		$content = wpb_js_remove_wpautop($content, true);
		
		
		// start the output
		
		$output = '';

        $output .= '<div class="cnr-icon">';
        $output .= '<div class="icon-wrap">';
		$output .= '    <i class="' . $icon . '"></i>';
        $output .= '</div>';
        $output .= '<h2 class="text-center">' . $header . '</h2>';
        $output .= '<p>' . $par . '</p>';
        $output .= '</div>';
		
		return $output;
    }
    
    // Show notice if your plugin is activated but Visual Composer is not
    public function showVcVersionNotice() {
        $plugin_data = get_plugin_data(__FILE__);
        echo '
        <div class="updated">
          <p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend'), $plugin_data['Name']).'</p>
        </div>';
    }
}

// Finally initialize code
new cnr_Links();
