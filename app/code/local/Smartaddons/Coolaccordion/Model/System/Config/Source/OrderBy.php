<?php
/*------------------------------------------------------------------------
 # SM Coolaccordion - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/

class Smartaddons_Coolaccordion_Model_System_Config_Source_OrderBy
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'position',	'label' => Mage::helper('coolaccordion')->__('Position')),
			array('value' => 'created_at', 	'label' => Mage::helper('coolaccordion')->__('Date Created')),
			array('value' => 'name', 		'label' => Mage::helper('coolaccordion')->__('Name')),
			array('value' => 'price', 		'label' => Mage::helper('coolaccordion')->__('Price')),
			array('value' => 'random', 		'label' => Mage::helper('coolaccordion')->__('Random')),
			array('value' => 'top_rating', 	'label' => Mage::helper('coolaccordion')->__('Top Rating')),
			array('value' => 'most_reviewed',	'label' => Mage::helper('coolaccordion')->__('Most Reviews')),
			array('value' => 'most_viewed',	'label' => Mage::helper('coolaccordion')->__('Most Visited')),
			array('value' => 'best_sales',	'label' => Mage::helper('coolaccordion')->__('Most Selling')),
		);
	}
}
