<?php


namespace ALevel\HomeworkObserver\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Test
 * @package ALevel\HomeworkObserver\Model\ResourceModel
 */
class Test extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('alevel_homework', 'id');
    }
}
