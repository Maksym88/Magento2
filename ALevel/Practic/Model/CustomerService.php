<?php

namespace ALevel\Practic\Model;

use ALevel\Practic\Api\Data\CustomerInterfaceFactory;
use Magento\Customer\Model\Session;

class CustomerService
{
    /**
     * @var \ALevel\Practic\Api\Data\Customerinterface
     */
    private $customer;
    /**
     * @var Session
     */
    private $customerSession;

    public function __construct(
        CustomerInterfaceFactory $customer,
        Session $customerSession
    ) {
        $this->customer = $customer;
        $this->customerSession = $customerSession;
    }

    public function prepareObjectCustomer()
    {
        $customerObject = $this->customer->create();
        $customerData = $this->customerSession->getCustomerData();
        $customerObject->setCustomerName($customerData->getFirstname());
        $customerObject->setEmail($customerData->getEmail() );

        return $customerObject;
    }
}