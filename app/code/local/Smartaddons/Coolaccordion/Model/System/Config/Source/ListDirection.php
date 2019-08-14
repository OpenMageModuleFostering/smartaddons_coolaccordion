<?php
/*------------------------------------------------------------------------
 # SM Coolaccordion - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/
class Smartaddons_Coolaccordion_Model_System_Config_Source_ListDirection
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'hori', 'label'=>Mage::helper('coolaccordion')->__('Horizontal')),
        	array('value'=>'vert', 'label'=>Mage::helper('coolaccordion')->__('Vertical'))
		);
	}
}
