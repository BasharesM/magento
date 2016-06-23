<?php

class Learning_Editeurs_Block_Adminhtml_Editeur extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller     = 'adminhtml_editeur';
        $this->_blockGroup     = 'learning_editeurs';
        $this->_headerText     = Mage::helper('learning_editeurs')->__('Gérer les éditeurs');
        $this->_addButtonLabel = Mage::helper('learning_editeurs')->__('Ajouter un éditeur');
        parent::__construct();
    }
}