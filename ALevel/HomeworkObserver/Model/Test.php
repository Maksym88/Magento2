<?php

namespace ALevel\HomeworkObserver\Model;

use ALevel\HomeworkObserver\Api\Data\TestInterface;
use ALevel\HomeworkObserver\Model\ResourceModel\Test as ResourceModelTest;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Test
 * @package ALevel\HomeworkObserver\Model
 */
class Test extends AbstractModel implements TestInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModelTest::class);
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


    /**
     * @return mixed|void
     */
    public function getSku()
    {
       return $this->_getData(self::CUSTOMER_SKU);
    }

    /**
     * @param $sku
     * @return mixed|void
     */
    public function setSku($sku)
    {
        $this->setData(self::CUSTOMER_SKU, $sku);
    }

    /**
     * @return mixed|void
     */
    public function getQty()
    {
       return $this->_getData(self::CUSTOMER_QTY);
    }

    /**
     * @param $qty
     * @return mixed|void
     */
    public function setQty($qty)
    {
        $this->setData(self::CUSTOMER_QTY, $qty);
    }
}