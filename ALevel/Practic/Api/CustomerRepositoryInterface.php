<?php

namespace ALevel\Practic\Api;

interface CustomerRepositoryInterface
{
    /**
     * @param \ALevel\Practic\Api\Data\CustomerInterface $customer
     * @return \ALevel\Practic\Api\Data\CustomerInterface
     */
    public function save(\ALevel\Practic\Api\Data\CustomerInterface $customer);
}
