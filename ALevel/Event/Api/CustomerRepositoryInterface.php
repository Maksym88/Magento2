<?php

namespace  ALevel\Event\Api;

interface CustomerRepositoryInterface
{
    /**
     * @param \ALevel\Event\Api\Data\CustomerInterface $customer
     * @return \ALevel\Event\Api\Data\CustomerInterface
     */
    public function save(\ALevel\Event\Api\Data\CustomerInterface $customer);
}
