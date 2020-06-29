<?php

namespace ALevel\Practic\Controller\Record;

use ALevel\Practic\Model\CustomerRepository;
use ALevel\Practic\Model\CustomerService;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Add
 * @package ALevel\Event\Controller\Record
 */
class Add extends Action
{
    /**
     * @var CustomerService
     */
    private $customerService;

    /**
     * @var CustomerRepository
     */
    private $customerRepository;

    /**
     * @var Context
     */
    private $context;

    /**
     * Add constructor.
     *
     * @param Context $context
     * @param CustomerService $customerService
     * @param CustomerRepository $customerRepository
     */
    public function __construct(
        Context $context,
        CustomerService $customerService,
        CustomerRepository $customerRepository
    ) {
        parent::__construct($context);

        $this->customerService = $customerService;
        $this->customerRepository = $customerRepository;
        $this->context = $context;
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        return $resultJson;
    }
}