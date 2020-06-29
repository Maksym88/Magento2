<?php

namespace ALevel\Overriding\Plugin\Controller\Message;

use ALevel\JavaScript\Controller\Message\Add;

/**
 * Class AddPlugin
 * @package ALevel\Overriding\Plugin\Controller\Message
 */
class AddPlugin
{
    /**
     * @param Add $subject
     * @param callable $proceed
     * @return mixed
     */
    public function aroundExecute(
        Add $subject,
        callable $proceed
    ) {
        $result = $proceed();
        return $result;
    }
}
