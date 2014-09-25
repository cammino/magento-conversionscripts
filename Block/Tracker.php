<?php
class Cammino_Conversionscripts_Block_Tracker extends Mage_Core_Block_Template {
	
	private $_active;
	private $_conversionCode;
	
	protected function _construct() {
		$this->_enabled = Mage::getStoreConfig('sales/conversion_scripts/active');
		$this->_conversionCode = Mage::getStoreConfig('sales/conversion_scripts/conversion_code');
	}

	protected function _toHtml() {
		$html = "";
		
		if (strval($this->_enabled) == "1") {
			$html .= strval($this->_conversionCode);
		}


		return $html;
	}

}
?>