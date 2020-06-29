<?php

namespace ALevel\Event\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Event
 * @package ALevel\Event\Model\ResourceModel
 */
class Event extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('alevel_event_products', 'id');
    }
}
