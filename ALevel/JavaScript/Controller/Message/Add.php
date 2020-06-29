<?php

namespace ALevel\JavaScript\Controller\Message;

use ALevel\JavaScript\Model\MessageRepository;
use ALevel\JavaScript\Model\MessageService;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Add.
 *
 * @package ALevel\JavaScript\Controller\Message
 */
class Add extends Action
{
    /**
     * @var MessageRepository
     */
    private $messageRepository;

    /**
     * @var MessageService
     */
    private $messageService;

    /**
     * @var Context
     */
    private $context;

    /**
     * Add constructor.
     *
     * @param Context $context
     * @param MessageRepository $messageRepository
     * @param MessageService $messageService
     */
    public function __construct(
        Context $context,
        MessageRepository $messageRepository,
        MessageService $messageService
    ) {
        parent::__construct($context);

        $this->messageRepository = $messageRepository;
        $this->messageService = $messageService;
        $this->context = $context;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        if($this->getRequest()->isAjax()) {
            if ($this->getRequest()->getParam('message')) {
                $newObject = $this->messageService->prepareObjectMessage($this->getRequest());
                $this->messageRepository->save($newObject);
            }

            return $resultJson->setData($this->messageService->prepareMessagesList());

        }

        return $resultJson->setData(
            [
                'errors' => false,
                'message' => __('You took part in the action!')
            ]
        );
    }
}
