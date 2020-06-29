<?php

namespace ALevel\JavaScript\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface MessageSearchResultsInterface.
 *
 * @package ALevel\Message\Api\Data
 */
interface MessageSearchResultsInterface extends SearchResultsInterface
{
    /**
     *
     *
     * @return MessageInterface[]
     */
    public function getItems();

    /**
     *
     * @param MessageInterface[] $items
     *
     * @return $this
     */
    public function setItems(array $items);
}
