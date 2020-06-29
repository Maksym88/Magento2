<?php

namespace ALevel\Practic\Model;

use ALevel\Practic\Api\CustomerRepositoryInterface;

/**
 * Class CustomerRepository
 *
 * @package ALevel\Practic\Model
 */
class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @param \ALevel\Practic\Api\Data\CustomerInterface $customer
     * @return \ALevel\Practic\Api\Data\CustomerInterface
     */
    public function save(\ALevel\Practic\Api\Data\CustomerInterface $customer)
    {
        $customer->getResource()->save($customer);

        return $customer;
    }
}