<?php

namespace ALevel\Practic\Model;

use Magento\Framework\Model\AbstractModel;

use ALevel\Practic\Api\Data\CustomerInterface;
use ALevel\Practic\Model\ResourceModel\Customer as ResourceModelCustomer;

/**
 * Class Customer
 * @package ALevel\Practic\Model
 */
class Customer extends AbstractModel implements CustomerInterface
{

    public function _construct()
    {
        $this->_init(ResourceModelCustomer::class);
    }

    public function getCustomerName()
    {
        $this->getData(self::CUSTOMER_NAME);
    }

    public function setCustomerName($name)
    {
        $this->getData(self::CUSTOMER_NAME);
    }

    public function getEmail()
    {
        $this->getData(self::CUSTOMER_EMAIL);
    }

    public function setEmail($email)
    {
        $this->getData(self::CUSTOMER_EMAIL);
    }

}