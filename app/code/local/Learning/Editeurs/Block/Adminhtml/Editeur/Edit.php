<?php

class Learning_Editeurs_Block_Adminhtml_Editeur_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->_objectId   = 'id';
        $this->_blockGroup = 'learning_editeurs';
        $this->_controller = 'adminhtml_editeur';

        $this->_updateButton('save', 'label', Mage::helper('learning_editeurs')->__("Enregistrer l'éditeur"));
        $this->_updateButton('delete', 'label', Mage::helper('learning_editeurs')->__("Supprimer l'éditeur"));
        $this->_removeButton('reset');

        $this->_addButton('saveandcontinue', array(
            'label'   => Mage::helper('learning_editeurs')->__('Save And Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class'   => 'save',
        ), -100);

        $this->_formScripts[] = "
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    /**
     * Get header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('editeur_data') && Mage::registry('editeur_data')->getId()) {
            return Mage::helper('learning_editeurs')->__("Editer editeur '%s'", Mage::registry('editeur_data')->getName());
        } else {
            return Mage::helper('learning_editeurs')->__('Ajouter un éditeur');
        }
    }
}