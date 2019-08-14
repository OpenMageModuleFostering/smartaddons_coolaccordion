<?php
/*------------------------------------------------------------------------
 # SM Coolaccordion - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/

class Smartaddons_Coolaccordion_Helper_Data extends Mage_Core_Helper_Abstract {
	public function __construct(){
		$this->defaults = array(
			/* General setting */
			'isenabled'				=> '1',
			'title' 				=> 'SM Coolaccordion',
			/* Module options */
			'module_width' 			=> '765',
			'module_height' 		=> '350',
			'theme' 				=> 'theme1',	
			/* scrollbar grid views */
			//'scrollbar_direction' 	=> 'vert',
			//'grid_columns'			=> '10',
			//'grid_rows'				=> '2',
			//'grid_width'			=> '750',
			//'grid_height'			=> '600',
			//'scrollbar_disp'		=> '1',
			//'scrollbar_arrows_disp'	=> '1',
			//'scrollbar_preset' 		=> 'scrollbar_style.css',			
			/* product query */
			'product_source'		=> 'catalog',			// product_category_mode	
			'product_category' 		=> array(),				// 
			'product_ids'			=> '',
			'product_order_by'		=> '',					// 
			'product_order_dir' 	=> '',					// 
			'product_limitation' 	=> '4',  				// product_total
			
			/* product details */
			'product_image_disp'	=> '1',
			'product_image_linkable'=> '1',
			'product_image_width'	=> '200',				// product_thumbnail_width
			'product_image_height'	=> '150',				// product_thumbnail_height
			'product_image_background'	=> '#FFFFFF',		// product_thumbnail_background

			/* Tab options */
			'item_image_disp'		=> '1',					// item_image_title
			'item_image_width'		=> '45',
			'item_image_height'		=> '50',
		
			'product_title_disp'	=> '1',
			'product_title_linkable'=> '1',
			'product_title_color'	=> '#000000',
			'product_title_max_characters'=> '20',				// product_title_maxchars
			
			'product_description_disp' 		=> '1',				// product_short_description_disp
			'product_description_color'		=> '#000000',		// product_short_description_color
			'product_description_max_characters' 	=> '100',	// product_short_description_maxchars
			'product_description_opacity'	=> '0.7',			// product_short_description_opacity
			// other setting
			'product_links_target'					=> '_self',
			'product_price_disp'	=> '1',
			'product_price_color'	=> '',			
			'product_details_page_link_disp' 		=> '1',				// product_short_description_show_readmore
			'product_details_page_link_text' 		=> 'See details',	// product_short_description_show_readmore_text	
			// 'product_button_addtocart_disp' 		=> '1',
			// 'product_link_addtowishlist_disp'		=> '1',
			// 'product_button_addthis_disp' 			=> '1',
			// 'addthis_profile_id'					=> 'AddThis Profile ID',
			// 'addthis_services'						=> 'facebook_like,tweet,google_plusone',
			
			/* Tooltip options */
			'tooltip_disp'			=> '1',
			'tooltip_width'			=> '360',
			'tooltip_image_width'	=> '120',		
		
			'include_jquery'	=> '1',
			'pretext'			=> '',
			'posttext'			=> ''
			
			/**config_fields**/
		);
	}

	function get($attributes=array())
	{
		$data = $this->defaults;
		$general 					= Mage::getStoreConfig("coolaccordion_cfg/general");
		$module_setting				= Mage::getStoreConfig("coolaccordion_cfg/module_setting");
		$product_selection 			= Mage::getStoreConfig("coolaccordion_cfg/product_selection");
		$product_display_setting 	= Mage::getStoreConfig("coolaccordion_cfg/product_display_setting");
		$advanced 					= Mage::getStoreConfig("coolaccordion_cfg/advanced");
		if (!is_array($attributes)) {
			$attributes = array($attributes);
		}
		if (is_array($general))					$data = array_merge($data, $general);
		if (is_array($module_setting)) 			$data = array_merge($data, $module_setting);
		if (is_array($product_selection)) 		$data = array_merge($data, $product_selection);
		if (is_array($product_display_setting)) $data = array_merge($data, $product_display_setting);
		if (is_array($advanced)) 				$data = array_merge($data, $advanced);
		
		return array_merge($data, $attributes);;
	}
}
?>