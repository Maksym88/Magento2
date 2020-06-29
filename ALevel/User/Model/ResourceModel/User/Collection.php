<?php


namespace ALevel\User\Model\ResourceModel\User;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use ALevel\User\Model\User as Model;
use ALevel\User\Model\ResourceModel\User as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
