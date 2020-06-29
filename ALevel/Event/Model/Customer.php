<?php

namespace ALevel\Event\Model;

use Magento\Framework\Model\AbstractModel;

use ALevel\Event\Api\Data\CustomerInterface;
use ALevel\Event\Model\ResourceModel\Customer as ResourceModelCustomer;

/**
 * Class Customer
 * @package ALevel\Event\Model
 */
class Customer extends AbstractModel implements CustomerInterface
{

    protected function _construct()
    {
        $this->_init(ResourceModelCustomer::class);
    }

    /**
     * @return mixed|void
     */
    public function getCustomerName()
    {
        return $this->_getData(self::CUSTOMER_NAME);
    }

    /**
     * @param $name
     * @return mixed|void
     */
    public function setCustomerName($name)
    {
        $this->setData(self::CUSTOMER_NAME, $name);
    }

    /**
     * @return mixed|void
     */
    public function getEmail()
    {
        return $this->_getData(self::CUSTOMER_EMAIL);
    }

    /**
     * @param $email
     * @return mixed|void
     */
    public function setEmail($email)
    {
        $this->setData(self::CUSTOMER_EMAIL, $email);
    }

}
