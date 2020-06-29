<?php

namespace ALevel\HomeworkObserver\Model\ResourceModel\Homework;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use ALevel\HomeworkObserver\Model\ResourceModel\Test as ResourceModelHomework;
use ALevel\HomeworkObserver\Model\Test as BusinessModelHomework;


/**
 * Class Collection
 * @package ALevel\HomeworkObserver\Model\ResourceModel\Customer
 */
class Collection extends AbstractCollection
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init(ResourceModelHomework::class, BusinessModelHomework::class);
    }
}