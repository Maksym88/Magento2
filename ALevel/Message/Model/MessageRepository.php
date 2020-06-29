<?php

namespace ALevel\Message\Model;

use ALevel\Message\Api\MessageRepositoryInterface;
use ALevel\Message\Api\Data\MessageInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use ALevel\Message\Api\Data\MessageSearchResultsInterfaceFactory;
use ALevel\Message\Api\Data\MessageSearchResultsInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use ALevel\Message\Model\ResourceModel\Message\CollectionFactory;

/**
 * Class MessageRepository.
 *
 * @package ALevel\JavaScript\Model
 */
class MessageRepository implements MessageRepositoryInterface
{
    /**
     * @var \ALevel\Message\Api\Data\MessageSearchResultsInterfaceFactory
     */
    private $messageSearchResultsFactory;
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * MessageRepository constructor.
     * @param MessageSearchResultsInterfaceFactory $messageSearchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        MessageSearchResultsInterfaceFactory $messageSearchResultsFactory,
        CollectionProcessorInterface $collectionProcessor,
        CollectionFactory $collectionFactory
    ) {
        $this->messageSearchResultsFactory = $messageSearchResultsFactory;

        $this->collectionProcessor = $collectionProcessor;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @param \ALevel\Message\Api\Data\MessageInterface $message
     * @return \ALevel\Message\Api\Data\MessageInterface
     */
    public function save(\ALevel\Message\Api\Data\MessageInterface $message)
    {
        $message->getResource()->save($message);

        return $message;
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return MessageSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();

        $searchResult = $this->messageSearchResultsFactory->create();
        $searchResult->setSearchCriteria($searchCriteria);
        $searchResult->setItems($collection->getItems());
        $searchResult->setTotalCount($collection->getSize());

        return $searchResult;
    }
}
