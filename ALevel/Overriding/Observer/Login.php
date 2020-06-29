<?php

namespace ALevel\Overriding\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class Login.
 *
 * @package ALevel\Overriding\Observer
 */
class Login implements ObserverInterface
{
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $event = $observer->getEvent();
    }
}
