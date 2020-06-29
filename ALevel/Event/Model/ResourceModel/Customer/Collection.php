<?php

namespace ALevel\Event\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use ALevel\Event\Model\ResourceModel\Customer as ResourceModelCustomer;
use ALevel\Event\Model\Customer as BusinessModelCustomer;

class Collection extends AbstractCollection
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init(ResourceModelCustomer::class, BusinessModelCustomer::class);
    }
}
