<?php

class Spranks_RefreshBlockHtmlCache_Model_Observer
{

    /**
     * Refreshes the block HTML cache on product save.
     * 
     * @param Varien_Event_Observer $observer
     */
    public function controllerActionPostdispatchAdminhtmlCatalogProductSave(Varien_Event_Observer $observer)
    {
        Mage::app()->getCacheInstance()->cleanType('block_html');
    }

}