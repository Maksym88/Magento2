<?php

namespace ALevel\HomeworkObserver\Model;

use ALevel\HomeworkObserver\Api\CustomerRepositoryInterface;
use ALevel\HomeworkObserver\Api\Data\TestInterface;

/**
 * Class CustomerRepository.
 *
 * @package ALevel\Event\Model
 */
class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @param \ALevel\HomeworkObserver\Api\Data\TestInterface $customer
     * @return \ALevel\HomeworkObserver\Api\Data\TestInterface
     */
    public function save(\ALevel\HomeworkObserver\Api\Data\TestInterface $customer)
    {
        $customer->getResource()->save($customer);

        return $customer;
    }
}