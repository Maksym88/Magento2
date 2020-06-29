<?php

namespace ALevel\Event\Model\ResourceModel\Event;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use ALevel\Event\Model\ResourceModel\Event as ResourceModelEvent;
use ALevel\Event\Model\Event as BusinessModelEvent;

/**
 * Class Collection
 * @package ALevel\Event\Model\ResourceModel\Customer
 */
class Collection extends AbstractCollection
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init(ResourceModelEvent::class, BusinessModelEvent::class);
    }
}
