<?php

namespace ALevel\JavaScript\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

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
