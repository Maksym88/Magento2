<?php

namespace ALevel\MyBlock\ViewModel;

use ALevel\MyBlock\DataProvider\Data;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Additional implements ArgumentInterface
{

    /**
     * @var $data
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
