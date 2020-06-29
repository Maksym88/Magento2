<?php

namespace ALevel\Message\Model;

use ALevel\Message\Api\Data\MessageInterfaceFactory;
use Magento\Framework\Api\SearchCriteriaBuilderFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;

/**
 * Class MessageService.
 *
 * @package ALevel\Message\Model
 */
class MessageService
{
    /**
     * @var MessageInterfaceFactory
     */
    private $messageInterfaceFactory;

    /** @var SearchCriteriaBuilderFactory */
    private $criteriaBuilderFactory;

    /**
     * @var MessageRepository
     */
    private $messageRepository;

    /**
     * MessageService constructor.
     *
     * @param MessageInterfaceFactory $messageInterfaceFactory
     * @param SearchCriteriaBuilderFactory $criteriaBuilderFactory
     * @param MessageRepository $messageRepository
     */
    public function __construct(
        MessageInterfaceFactory $messageInterfaceFactory,
        SearchCriteriaBuilderFactory $criteriaBuilderFactory,
        MessageRepository $messageRepository
    ) {
        $this->messageInterfaceFactory = $messageInterfaceFactory;
        $this->criteriaBuilderFactory = $criteriaBuilderFactory;
        $this->messageRepository = $messageRepository;
    }

    /**
     * @param $request
     *
     * @return \ALevel\Message\Api\Data\MessageInterface
     */
    public function prepareObjectMessage($request)
    {
        $message = $this->messageInterfaceFactory->create();

        $message->setMessage($request->getParam('message'));
        $message->setName($request->getParam('name'));

        return $message;
    }

    /**
     * @return array[]
     */
    public function prepareMessagesList()
    {
        /**
         * @var SearchCriteriaBuilder $criteriaBuilder
         */
        $criteriaBuilder = $this->criteriaBuilderFactory->create();
        $criteria = $criteriaBuilder->create();
        $messages = $this->messageRepository->getList($criteria)->getItems();

        $messagesItems = array_map(
            function ($message) {
                return [
                    'message' => $message->getMessage(),
                    'name' => $message->getName(),
                    'id' => $message->getId()
                ];
            }, $messages
        );


        return $messagesItems;
    }
}
