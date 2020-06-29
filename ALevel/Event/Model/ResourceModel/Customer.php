<?php

namespace ALevel\Event\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Customer
 * @package ALevel\Event\Model\ResourceModel
 */
class Customer extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('alevel_event', 'id');
    }
}
