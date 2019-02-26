<?php
class Mycompany_Mymodule_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ENABLED = 'mycompany_mymodule/general/enabled';
    
    public function isEnabled()
    {
        if (Mage::getStoreConfigFlag(self::XML_PATH_ENABLED)) {
            return true;
        }
        return false;
    }
}
