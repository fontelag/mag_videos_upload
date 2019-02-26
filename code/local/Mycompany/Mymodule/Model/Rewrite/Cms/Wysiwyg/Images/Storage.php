<?php

class Mycompany_Mymodule_Model_Rewrite_Cms_Wysiwyg_Images_Storage extends Mage_Cms_Model_Wysiwyg_Images_Storage
{    
    public function resizeFile($source, $keepRation = true)
    {
        $isEnabled = Mage::helper('mycompany_mymodule')->isEnabled();

        $mimeType = mime_content_type($source);
        if ($isEnabled && $mimeType == 'video/mp4') {
            return false;
        } else {
            return parent::resizeFile($source, $keepRation);
        }
    }
 }
