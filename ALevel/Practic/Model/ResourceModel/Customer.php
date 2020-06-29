<?php

namespace ALevel\Practic\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Customer
 * @package ALevel\Practic\Model\ResourceModel
 */
class Customer extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('alevel_practic', 'id');
    }
}