<?php
class Learning_Editeurs_Model_Editeur extends Mage_Core_Model_Abstract
{

    /**
     * Name of object id field
     *
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    
    /**
     * Magento class constructor
     */
    protected function _construct()
    {
        $this->_init('learning_editeurs/editeur');
    }

}