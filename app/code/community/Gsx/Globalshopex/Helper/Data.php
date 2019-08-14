<?php

class Gsx_Globalshopex_Helper_Data extends Mage_Core_Helper_Abstract {

    public function isClearCartEnable() {
        return Mage::getStoreConfig("checkout/globalshopex/gsx_enableclearcart");
    }

    public function getMerchantID() {
        return Mage::getStoreConfig("checkout/globalshopex/gsxmerchatid");
    }

}
