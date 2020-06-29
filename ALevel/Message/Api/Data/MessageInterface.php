<?php

namespace ALevel\Message\Api\Data;

/**
 * Interface MessageInterface.
 *
 * @package ALevel\Message\Api\Data
 */
interface MessageInterface
{
    const MESSAGE = 'message';
    const NAME = 'name';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getMessage();

    /**
     * @param $message
     * @return mixed
     */
    public function setMessage($message);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);
}
