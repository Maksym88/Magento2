<?php

namespace ALevel\Message\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Message
 * @package ALevel\Message\Model\ResourceModel
 */
class Message extends AbstractDb
{
    /**
     * Standard resource model initialization.
     */
    protected function _construct()
    {
        $this->_init('alevel_message', 'id');
    }
}
