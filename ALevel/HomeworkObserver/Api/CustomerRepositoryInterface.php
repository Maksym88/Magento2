<?php

namespace  ALevel\HomeworkObserver\Api;

interface CustomerRepositoryInterface
{
    /**
     * @param \ALevel\HomeworkObserver\Api\Data\TestInterface $customer
     * @return \ALevel\HomeworkObserver\Api\Data\TestInterface
     */
    public function save(\ALevel\HomeworkObserver\Api\Data\TestInterface $customer);
}
