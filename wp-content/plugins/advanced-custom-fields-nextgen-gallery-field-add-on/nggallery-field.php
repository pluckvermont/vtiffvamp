<?php
/*
Plugin Name:      Advanced Custom Fields - NextGEN Gallery Field add-on
Plugin URI:       http://wordpress.org/extend/plugins/advanced-custom-fields-nextgen-gallery-field-add-on/
Description:      This plugin is an add-on for Advanced Custom Fields. It provides a dropdown of NextGEN Gallery and the ability to map the selected NextGEN Gallery to the post.
Version:          2.0
Requires at least:   3.0
Tested up to:     3.4.1
Author:           Ales Loziak, Robert Kleinschmager
Author URI:       http://www.apollo1.cz
License:          GPLv2 or later
License URI:      http://www.gnu.org/licenses/gpl-2.0.html
 * 
 *  
 * 
 * Copyright (c) 2013, Ales Loziak, Robert Kleinschmager
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 * 
 *     Redistributions of source code must retain the above copyright notice, this
 *         list of conditions and the following disclaimer.
 *     Redistributions in binary form must reproduce the above copyright notice,
 *         this list of conditions and the following disclaimer in the documentation
 *         and/or other materials provided with the distribution.
 *     Neither the name of Ales Loziak nor the names of its
 *         contributors may be used to endorse or promote products derived from this
 *         software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 * INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
 * LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE
 * OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 */

class acf_nggallery_field_plugin
{
   /**
   * WordPress Localization Text Domain
   *
   * Used in wordpress localization and translation methods.
   * @var string
   */
   const L10N_DOMAIN = 'acf-nggallery-field';

   /*
   *  Construct
   *
   *  @description: 
   *  @since: 3.6
   *  @created: 1/04/13
   */
   
   function __construct()
   {
      $mofile = trailingslashit(dirname(__File__)) . 'lang/' . self::L10N_DOMAIN . '-' . get_locale() . '.mo';
      load_textdomain( self::L10N_DOMAIN, $mofile );
      
      if (acf_nggallery_field_plugin::isAtLeastAcfVersion4()) {
         error_log("register as acf v4");
         // do it the acf v4 way
         // version 4+
         add_action('acf/register_fields', array($this, 'register_field_v4'));  

      } else {

         error_log("register as acf v3");
         add_action('init', array($this, 'register_field_v3'));
	           
      }
   }


   /*
   *  register_fields - the V4 approach
   *
   *  @description: 
   *  @since: 3.6
   *  @created: 1/04/13
   */   
   function register_field_v3()
   {
      if(function_exists('register_field'))
      {
         register_field( 'ACF_NGGallery_Field', dirname(__File__) . '/nggallery-field-v3.php' );
      }
   }
   
   /*
   *  register_fields - the V4 approach
   *
   *  @description: 
   *  @since: 3.6
   *  @created: 1/04/13
   */   
   function register_field_v4()
   {
      include_once('nggallery-field-v4.php');
   }


   public static function isAtLeastAcfVersion4() {

      $acf_version = get_option('acf_version');

      error_log("Version: ".$acf_version);
      $result = version_compare($acf_version, '4.0.0', '>='); 
      error_log("result: ".$result);


      return $result;
   }
   
}


error_log("calling Plugin Construct");
new acf_nggallery_field_plugin();
      
?>