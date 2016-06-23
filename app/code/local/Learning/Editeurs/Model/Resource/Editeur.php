<?php

class Learning_Editeurs_Model_Resource_Editeur extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * Magento class constructor
     */
    protected function _construct()
    {
        $this->_init('learning_editeurs/editeur', 'entity_id');
    }

}