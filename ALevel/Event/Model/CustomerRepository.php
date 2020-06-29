<?php

namespace ALevel\Event\Model;

use ALevel\Event\Api\CustomerRepositoryInterface;
use ALevel\Event\Api\Data\CustomerInterface;

/**
 * Class CustomerRepository.
 *
 * @package ALevel\Event\Model
 */
class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @param \ALevel\Event\Api\Data\CustomerInterface $customer
     * @return \ALevel\Event\Api\Data\CustomerInterface
     */
    public function save(\ALevel\Event\Api\Data\CustomerInterface $customer)
    {
        $customer->getResource()->save($customer);

        return $customer;
    }
}
