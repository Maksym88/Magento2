<?php

namespace ALevel\JavaScript\Model;

use ALevel\JavaScript\Api\MessageRepositoryInterface;
use ALevel\JavaScript\Api\Data\MessageInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use ALevel\JavaScript\Api\Data\MessageSearchResultsInterfaceFactory;
use ALevel\JavaScript\Api\Data\MessageSearchResultsInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use ALevel\JavaScript\Model\ResourceModel\Message\CollectionFactory;

/**
 * Class MessageRepository.
 *
 * @package ALevel\JavaScript\Model
 */
class MessageRepository implements MessageRepositoryInterface
{
    /**
     * @var \ALevel\JavaScript\Api\Data\MessageSearchResultsInterfaceFactory
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
     * @param \ALevel\JavaScript\Api\Data\MessageInterface $message
     * @return \ALevel\JavaScript\Api\Data\MessageInterface
     */
    public function save(\ALevel\JavaScript\Api\Data\MessageInterface $message)
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

        //$this->collectionProcessor->process($searchCriteria, $collection);

        $searchResult = $this->messageSearchResultsFactory->create();
        $searchResult->setSearchCriteria($searchCriteria);
        $searchResult->setItems($collection->getItems());
        $searchResult->setTotalCount($collection->getSize());

        return $searchResult;
    }
}
