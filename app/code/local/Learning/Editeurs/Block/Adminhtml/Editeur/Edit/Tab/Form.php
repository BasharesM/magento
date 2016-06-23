<?php

class Learning_Editeurs_Block_Adminhtml_Editeur_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form implements Mage_Adminhtml_Block_Widget_Tab_Interface
{

    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('editeur_form', array('legend' => Mage::helper('learning_editeurs')->__("Informations de l'éditeur")));

        $fieldset->addField('name', 'text', array(
            'label'    => Mage::helper('learning_editeurs')->__('Name'),
            'name'     => 'name',
            'class'    => 'required-entry',
            'required' => true
        ));

        $fieldset->addField('genre', 'text', array(
            'label'    => Mage::helper('learning_editeurs')->__('Genre'),
            'name'     => 'genre',
            'class'    => 'required-entry',
            'required' => true
        ));

        if (Mage::getSingleton('adminhtml/session')->getSlideData()) {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getSlideData());
            Mage::getSingleton('adminhtml/session')->getSlideData(null);
        } elseif (Mage::registry('editeur_data')) {
            $form->setValues(Mage::registry('editeur_data')->getData());
        }

        return parent::_prepareForm();
    }

    public function getTabLabel()
    {
        return Mage::helper('learning_editeurs')->__("Information de l'éditeur");
    }

    public function getTabTitle()
    {
        return Mage::helper('learning_editeurs')->__("Informations de l'éditeur");
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }
}