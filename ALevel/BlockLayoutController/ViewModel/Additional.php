<?php

namespace ALevel\BlockLayoutController\ViewModel;

use ALevel\BlockLayoutController\DataProvider\Data;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Additional implements ArgumentInterface
{
    /**
     * @var Data
     */
    private $data;

    public function __construct(
        Data $data
    ) {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getDataForBlockViewModel(): string
    {
        return $this->data->getDataForBlockViewModel();
    }
}
