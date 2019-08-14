<?php
/*------------------------------------------------------------------------
 # SM Coolaccordion - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.smartaddons.com
-------------------------------------------------------------------------*/

class Smartaddons_Coolaccordion_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
	  $this->loadLayout();
      $this->renderLayout();
    }
}