<?php

namespace ALevel\Event\Api\Data;

interface CustomerInterface
{
    const CUSTOMER_NAME = 'customer_name';

    const CUSTOMER_EMAIL= 'email';

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
}
