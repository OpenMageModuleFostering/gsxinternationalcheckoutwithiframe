<?php
	class GSX_InternationalCheckout_InvoiceController extends Mage_Core_Controller_Front_Action
	{
		public function ProcessAction()
		{
			$this->loadLayout();          
			$templateFile='GSXInternationalcheckout/contentInvoice.phtml';
			
			$block = $this->getLayout()->createBlock(
			'internationalcheckout/international',
			'internationalcheckout.international',
			array('template' => $templateFile)
			);
			$this->getLayout()->getBlock('root')->setTemplate('page/1column.phtml');
			$this->getLayout()->getBlock('content')->append($block);
			$this->_initLayoutMessages('core/session'); 
			return $this->renderLayout();
		}
		
		public function indexAction()
		{
		$this->loadLayout();          
			$templateFile='GSXInternationalcheckout/contentInvoice.phtml';
			
			$block = $this->getLayout()->createBlock(
			'internationalcheckout/international',
			'internationalcheckout.international',
			array('template' => $templateFile)
			);
			$this->getLayout()->getBlock('root')->setTemplate('page/1column.phtml');
			$this->getLayout()->getBlock('content')->append($block);
			$this->_initLayoutMessages('core/session'); 
			return $this->renderLayout();
		}
		 
	}
?>