<?php

class Learning_Editeurs_Block_Adminhtml_Editeur_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('editeur_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('learning_editeurs')->__("Information de l'éditeur"));
    }
}