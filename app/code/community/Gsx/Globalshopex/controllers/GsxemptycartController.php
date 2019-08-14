<?php

class Gsx_Globalshopex_GsxemptycartController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $quoteId = $this->getRequest()->getParam('quoteid');

        $cart = Mage::getModel('sales/quote')->load($quoteId);
        
        $cart->delete();
    }

}
