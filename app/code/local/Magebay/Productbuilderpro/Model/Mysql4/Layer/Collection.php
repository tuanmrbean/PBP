<?php
class Magebay_Productbuilderpro_Model_Mysql4_Layer_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('productbuilderpro/layer');
    }
}