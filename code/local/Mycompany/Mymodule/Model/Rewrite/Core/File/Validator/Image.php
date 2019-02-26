<?php

class Mycompany_Mymodule_Model_Rewrite_Core_File_Validator_Image extends Mage_Core_Model_File_Validator_Image
{    
    public function validate($filePath)
    {
        $isEnabled = Mage::helper('mycompany_mymodule')->isEnabled();
        if ($isEnabled && mime_content_type($filePath) == 'video/mp4') {
            return null;
        } else {
            return parent::validate($filePath);
        }
    }
}
