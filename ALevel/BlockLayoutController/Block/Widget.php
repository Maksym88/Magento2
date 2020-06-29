<?php


namespace ALevel\BlockLayoutController\Block;

use Magento\Framework\View\Element\Template;

/**
 * Class Widget
 * @package ALevel\BlockLayoutController\Block
 */
class Widget extends Template
{

    public function getActionUrl(): string
    {
        return $this->getUrl('alevel_info/ajax/index');
    }
}
