<?php

namespace ALevel\HomeworkObserver\Api\Data;

interface TestInterface
{
    const CUSTOMER_NAME = 'customer_name';

    const CUSTOMER_EMAIL= 'email';

    const CUSTOMER_SKU = 'sku';

    const CUSTOMER_QTY = 'qty';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getCustomerName();

    /**
     * @param $name
     * @return mixed
     */
    public function setCustomerName($name);

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param $email
     * @return mixed
     */
    public function setEmail($email);

    /**
     * @return mixed
     */
    public function getSku();

    /**
     * @param $sku
     * @return mixed
     */
    public function setSku($sku);

    /**
     * @return int
     */
    public function getQty();

    /**
     * @param $qty
     * @return int
     */
    public function setQty($qty);
}
