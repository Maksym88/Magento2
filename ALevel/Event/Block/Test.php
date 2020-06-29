<?php

namespace ALevel\Event\Block;

use Magento\Framework\View\Element\Template;

class Test extends Template
{
    public function hello()
    {
        $hello = 'Hello World!!!';

        return $hello;
    }
}