<?php

    /*

      Plugin Name: Add Google Analytics Tracking Code
      Description: Add Google Analytics Tracking Code to your WordPress site
      Version: 1.0.0
      Author: Applimade
      Author URI: https://applimade.com
      License: GPL2

    */

    if ( !class_exists('Add_Google_Analytics') ) {
      class Add_Google_Analytics {
        const add_google_analytics_settings = 'add-google-analytics';

        function __construct() {
          add_action( 'wp_head', 'add_google_analytics', 1 );
        }

        function add_google_analytics_settings() {
          add_settings_section( self::add_google_analytics_settings,
                                      'Add Google Analytics Settings',
                                      array( &$this, 'add_google_analytics_settings_section' ),
                                      'writing' );
        }

        function add_google_analytics_settings_section() {
          echo "<p>Google Analytics ID</p>";
        }
      
        function add_google_analytics() {

            ?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-XXXXXXXX-X');
            </script>
            <?php

            $this->add_google_analytics_settings();
        }
      }
    }
   /**
    *
    * end of plugin.
    *
    */

?>