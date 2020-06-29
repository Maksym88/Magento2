<?php

namespace ALevel\User\Controller\Adminhtml\User;

use ALevel\User\Api\Model\UserInterfaceFactory;
use ALevel\User\Api\Repository\UserRepositoryInterface;
use ALevel\User\Model\User;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;

class Save extends Action
{
    /** @var UserRepositoryInterface */
    private $repository;

    /** @var UserInterfaceFactory */
    private $modelFactory;

    /** @var DataPersistorInterface */
    private $dataPersistor;

    /** @var LoggerInterface */
    private $logger;

    public function __construct(
        Context $context,
        UserRepositoryInterface $repository,
        UserInterfaceFactory $userFactory,
        DataPersistorInterface $dataPersistor,
        LoggerInterface $logger
    ) {
        $this->repository       = $repository;
        $this->modelFactory     = $userFactory;
        $this->dataPersistor    = $dataPersistor;
        $this->logger           = $logger;

        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $data = $this->getRequest()->getPostValue();

        if ($data) {
            /** @var User $model */
            $model = $this->modelFactory->create();

            $id = $this->getRequest()->getParam('user_id');
            if ($id) {
                try {
                    $model = $this->repository->getById($id);
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage(__('This user no longer exists.'));
                    $resultRedirect->setPath('*/*/listing');
                }
            }

            $model->setData($data);

            try {
                $this->repository->save($model);
                $this->messageManager->addSuccessMessage(__('You saved the user.'));
                $this->dataPersistor->clear('user');
                return $this->processReturn($model, $data, $resultRedirect);
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the user.'));
            }

            $this->dataPersistor->set('user', $data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
        }
        return $resultRedirect->setPath('*/*/listing');
    }

    private function processReturn($model, $data, $resultRedirect)
    {
        $redirect = $data['back'] ?? 'close';

        if ($redirect ==='continue') {
            $resultRedirect->setPath('*/*/edit', ['id' => $model->getId()]);
        } else if ($redirect === 'close') {
            $resultRedirect->setPath('*/*/listing');
        }

        return $resultRedirect;
    }
}
