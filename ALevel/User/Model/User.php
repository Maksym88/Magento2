<?php

namespace ALevel\User\Model;

use ALevel\User\Api\Model\UserInterface;
use Magento\Framework\Model\AbstractModel;
use ALevel\User\Model\ResourceModel\User as ResourceModel;

class User extends AbstractModel implements UserInterface
{
    public function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
