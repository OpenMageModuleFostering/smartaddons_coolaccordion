<?php
/*------------------------------------------------------------------------
 # SM Coolaccordion - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/

class Smartaddons_Coolaccordion_Model_System_Config_Source_ProductSources
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'catalog',	'label'=>Mage::helper('coolaccordion')->__('Catalog')),
			array('value'=>'product',	'label'=>Mage::helper('coolaccordion')->__('Product')),
			array('value'=>'media',	'label'=>Mage::helper('coolaccordion')->__('Media')),
		);
	}
}
