<?php
class Learning_Editeurs_Block_Editeurs extends Mage_Core_Block_Template
{
	public function getAllEditeurs()
	{
    	return Mage::getModel('learning_editeurs/editeur')->getCollection()->addIsActiveFilter()->addOrderByPosition();
	}
}
