<?php
class Cammino_Conversionscripts_Model_Observer
{
	public function addTracker(Varien_Event_Observer $observer) {

		
		$block = Mage::app()->getFrontController()->getAction()->getLayout()->createBlock("conversionscripts/tracker");

		$blockContent = Mage::app()->getFrontController()->getAction()->getLayout()->getBlock('content');

		if ($blockContent) {
			$blockContent->append($block);
		}

	}
}
?>