<?php

namespace ALevel\Message\Model\ResourceModel\Message;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ALevel\Message\Model\ResourceModel\Message as ResourceModelMessage;
use ALevel\Message\Model\Message as BusinessModelMessage;

/**
 * Class Collection.
 *
 * @package ALevel\JavaScript\Model\ResourceModel\Message
 */
class Collection extends AbstractCollection
{
    /**
     * Standard resource collection initialization.
     * Initialize model and resource model.
     */
    protected function _construct()
    {
        $this->_init(BusinessModelMessage::class, ResourceModelMessage::class);
    }
}
