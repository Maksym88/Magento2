<?php

namespace  ALevel\Javascript\Api;

/**
 * Interface MessageRepositoryInterface.
 *
 * @package ALevel\Javascript\Api
 */
interface MessageRepositoryInterface
{
    /**
     * @param \ALevel\Javascript\Api\Data\MessageInterface $message
     * @return \ALevel\Javascript\Api\Data\MessageInterface
     */
    public function save(\ALevel\Javascript\Api\Data\MessageInterface $message);
}
