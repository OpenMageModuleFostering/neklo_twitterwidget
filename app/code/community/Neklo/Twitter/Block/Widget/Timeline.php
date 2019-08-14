<?php

class Neklo_Twitter_Block_Widget_Timeline extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig()->isEnabled() && $this->getData('is_enabled') && $this->hasData('widget_html');
    }

    /**
     * @return null|string
     */
    public function getWidgetHtml()
    {
        if (!$this->hasData('widget_html')) {
            return null;
        }
        return $this->getData('widget_html');
    }

    /**
     * @return Neklo_Twitter_Helper_Config
     */
    public function getConfig()
    {
        return Mage::helper('neklo_twitter/config');
    }
}