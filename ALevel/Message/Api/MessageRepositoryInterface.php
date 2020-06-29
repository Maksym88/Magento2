<?php

namespace  ALevel\Message\Api;

/**
 * Interface MessageRepositoryInterface.
 *
 * @package ALevel\Message\Api
 */
interface MessageRepositoryInterface
{
    /**
     * @param \ALevel\Message\Api\Data\MessageInterface $message
     * @return \ALevel\Message\Api\Data\MessageInterface
     */
    public function save(\ALevel\Message\Api\Data\MessageInterface $message);
}
