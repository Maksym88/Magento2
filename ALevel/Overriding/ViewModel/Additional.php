<?php

namespace ALevel\Overriding\ViewModel;

use ALevel\BlockLayoutController\DataProvider\Data;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Additional implements ArgumentInterface
{
    /**
     * @var Data
     */
    private $data;
    /**
     * @var \Magento\Framework\View\LayoutInterface
     */
    private $layout;

    public function __construct(
        Data $data,
        \Magento\Framework\View\LayoutInterface $layout
    ) {
        $this->data = $data;
        $this->layout = $layout;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        $html = $this->layout->createBlock('Magento\Cms\Block\Block')->setBlockId('alevel_conent')->toHtml();
        $html .= ' '.microtime();

        return $html;
    }
}
