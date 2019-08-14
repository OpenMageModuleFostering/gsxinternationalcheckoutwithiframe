<?php 
class GSX_InternationalCheckout_Model_Shippingmethods extends Mage_Adminhtml_Model_System_Config_Source_Shipping_Allmethods
{
    /**
     * Return array of active carriers.
     * @param bool $isActiveOnlyFlag
     * @return array
     */
    public function toOptionArray($isActiveOnlyFlag=true)
    {
         $carrierCode = 'freedomesticshippingtogsx';
		 $carrierTitle = 'Free domestic shipping to GSX';
		 
		 $methods[$carrierCode] = array(
                'label'   => $carrierTitle,
                'value' => array(),
            );
			
		$methodCode = 'freedomesticshippingtogsx';
		$methodTitle = 'Free';
		$methods[$carrierCode]['value'][] = array(
                    'value' => $carrierCode.'_'.$methodCode,
                    'label' => '['.$carrierCode.'] '.$methodTitle,
                );
		 
		 return array_merge(parent::toOptionArray(true), $methods);
    }
	
}