<?php

namespace ALevel\Practic\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use ALevel\Practic\Model\ResourceModel\Customer as ResourceModelCustomer;
use ALevel\Practic\Model\Customer as BusinessModelCustomer;

class Collection extends AbstractCollection
{

 protected function _construct()
 {
     $this->_init(ResourceModelCustomer::class, BusinessModelCustomer::class);
 }
}