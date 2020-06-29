<?php

namespace ALevel\User\Controller\Adminhtml\User;

use ALevel\User\Api\Repository\UserRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

class Delete extends Action
{
    /** @var UserRepositoryInterface */
    private $repository;

    /** @var LoggerInterface */
    private $logger;

    /**
     * Delete constructor.
     *
     * @param Context                   $context
     * @param UserRepositoryInterface   $repository
     * @param LoggerInterface           $logger
     */
    public function __construct(
        Context $context,
        UserRepositoryInterface $repository,
        LoggerInterface $logger
    ) {
        $this->repository   = $repository;
        $this->logger       = $logger;

        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->_redirect('*/*/listing');
        }

        $id = $this->getRequest()->getParam('user_id');

        if (empty($id)) {
            $this->messageManager->addWarningMessage(__("Please select user id"));
            return $this->_redirect('*/*/listing');
        }

        try {
            $this->repository->deleteById($id);
        } catch (NoSuchEntityException|CouldNotDeleteException $e) {
            $this->logger->info(sprintf("item %d already delete", $id));
        }

        $this->messageManager->addSuccessMessage(sprintf("item %d was deleted", $id));
        $this->_redirect('*/*/listing');
    }
}
