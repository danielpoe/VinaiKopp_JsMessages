<?php


/**
 * Class VinaiKopp_JsMessages_Block_Core_Messages
 */
class VinaiKopp_JsMessages_Block_Core_Messages
    extends Mage_Core_Block_Template
{
    private static $_isRendered = false;
    
    protected function _prepareLayout()
    {
        $this->setTemplate('vinaikopp/jsmessages/messages.phtml');
        return parent::_prepareLayout();
    }

    /**
     * Stub method to satisfy the core/messages block interface 
     * 
     * @param Mage_Core_Model_Message_Abstract $message
     * @return $this
     */
    public function addMessage(Mage_Core_Model_Message_Abstract $message)
    {
        return $this;
    }

    /**
     * Stub method to satisfy the core/messages block interface
     * 
     * @param Mage_Core_Model_Message_Collection $messages
     * @return $this
     */
    public function addMessages(Mage_Core_Model_Message_Collection $messages)
    {
        return $this;
    }

    /**
     * Stub method to satisfy the core/messages block interface
     * 
     * @param $type
     * @return $this
     */
    public function addStorageType($type)
    {
        return $this;
    }

    protected function _toHtml()
    {
        // Avoid rendering global_messages AND messages - with JsMessages only one is needed
        if (self::$_isRendered) {
            return '';
        }
        self::$_isRendered = true;
        return parent::_toHtml();
    }


} 